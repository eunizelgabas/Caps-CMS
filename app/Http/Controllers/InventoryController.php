<?php

namespace App\Http\Controllers;

use App\Models\Dispensing;
use App\Models\Inventory;
use App\Models\Medicine;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    public function index(){
        // $medicine = Medicine::orderBy('name')->get();
        $inventories = Inventory::orderBy('id')
        ->with('medicine')->get();

        $inventories->each(function ($inventory) {
            $inventory->Available = $inventory->stock_out ? ($inventory->stock_in - $inventory->stock_out) : $inventory->stock_in;

            // Check if the medicine relationship is loaded
            if ($inventory->medicine) {
                $inventory->medicine_name = $inventory->medicine->name;
            } else {
                $inventory->medicine_name = null; // or any default value you want
            }
        });

        // Calculate the total available stock by summing the stockAvail attribute
        // $totalAvail =$inventories->diff('Available');
        return inertia('Inventory/Index',[
            'inventories' => $inventories,
            // 'medicine' => $medicine,
        //    'totalAvail'=>  $totalAvail

        ]);
    }

    public function getData(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Fetch inventory data based on the date range
        $inventory = Inventory::whereBetween('created_at', [$startDate, $endDate])->get();

        return response()->json(['inventory' => $inventory]);
    }

    public function getInventoryByDateRange($startDate, $endDate)
    {
        $quantities = DB::table('medicines')
        ->select(
            'medicines.id',
            'medicines.name',
            DB::raw('SUM(stocks.qty) as stock_qty'),
            DB::raw('SUM(dispensings.qty) as dispense_qty')
        )
        ->leftJoin('stocks', 'medicines.id', '=', 'stocks.med_id')
        ->leftJoin('dispensings', 'medicines.id', '=', 'dispensings.med_id')
        ->whereBetween('stocks.purchase_date', [$startDate, $endDate])
        ->orWhereBetween('dispensings.created_at', [$startDate, $endDate])
        ->groupBy('medicines.id', 'medicines.name')
        ->get();

        dd($quantities);
    return inertia('Inventory/Index', ['quantities' => $quantities]);
    }

    // public function getMedicinePurchaseAndDispense(Medicine $medicine)
    // {
    //     $medicine = Medicine::with('purchases', 'dispensings')->find($medicine->id);

    //     if (!$medicine) {
    //         // Handle the case where the medicine is not found
    //         return response()->json(['error' => 'Medicine not found'], 404);
    //     }

    //     // Calculate the total purchase quantity
    //     $purchaseTotal = $medicine->purchases->sum('qty');

    //     // Calculate the total dispensing quantity
    //     $dispenseTotal = $medicine->dispensings->sum('qty');
    //     return response()->json([
    //         'medicine' => $medicine,
    //         'purchase_total' => $purchaseTotal,
    //         'dispense_total' => $dispenseTotal,
    //     ]);
    // }
}
