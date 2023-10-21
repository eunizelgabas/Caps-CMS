<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as HttpRequest;

use App\Models\MedCategory;
class MedCategoryController extends Controller
{
    public function index(){
        // $medcategories = MedCategory::orderBy('id','desc')->get();
        // $search = HttpRequest::input('search');
        // if ($search) {
        //     $medcategories->where(function ($query) use ($search) {
        //         $query->where('name', 'like', '%' . $search . '%');
        //     });
        // }

        return inertia('MedCategory/Index',[
            'medcategories' => MedCategory::query()
                    ->when(HttpRequest::input('search'), function ($query, $search) {
                        $query->where('name', 'like', '%' . $search . '%');
                    })
                    ->withCount('medicine')
                    ->paginate(6)
                    ->withQueryString(),
                    'filters' => HttpRequest::only(['search'])
                    // $hidePagination = $medcategories->isEmpty() || $medcategories->count() <= $medcategories->perPage()
            ]);

//         $medcategories = MedCategory::query()
//     ->when(HttpRequest::input('search'), function ($query, $search) {
//         $query->where('name', 'like', '%' . $search . '%');
//     })
//     ->paginate(8)
//     ->withQueryString();

// $hidePagination = $medcategories->isEmpty() || $medcategories->count() <= $medcategories->perPage();

// return inertia('MedCategory/Index', [
//     'medcategories' => $medcategories,
//     'filters' => HttpRequest::only(['search']),
//     'hidePagination' => $hidePagination, // Move this line outside of the array
// ]);

    }

    // public function create(){
    //     return inertia('MedCategory/Index',[
    //         'medcategories' => MedCategory::orderBy('name')->get()
    //     ]);
    // }

    public function store(Request $request) {
        $fields = $request->validate([
            'name'=>'required',
        ]);

        MedCategory::create($fields);

        return redirect('/category')->with('success', 'Category successfully created');
    }

    public function update(Request $request, MedCategory $medcategory){
        $fields = $request->validate([
            'name'=>'required|string',
        ]);

        $medcategory->update($fields);
        return redirect('/category')->with('success', "You successfully updated the medicine category");
    }

    public function destroy(MedCategory $medcategory) {

        // $medc= $medcategory->medicine()->count();

        // if( $medc > 0 ){
        //     return back()->withErrors(['GeneralErrors' => "You cannot delete the medicine category $medc->name because it has $medc medicines ."]);
        // }

        // $medcategory->delete();

        // return back();
        if(!$medcategory->medicine()->exists()) {
            $medcategory->delete();

            return back()->with('success', 'Category deleted successfully.');
        } else {
            return back()->with('error', 'Sorry, this category cannot be deleted because it contains existing medicines in the system.');
        }
    }
}
