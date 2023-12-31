<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'gender'    => 'required|string',
            'contact_no' => 'required|integer',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ]);

        $user = User::create([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'suffix' => $request->suffix,
            'gender'     => $request->gender,
            'contact_no' => $request->contact_no,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function search(Request $request)
    {
        try {
            $term = $request->query('term'); // Get the search term from the query parameter

            // Perform the user search based on the provided term and user type "patient"
            $users = User::where('type', 'patient')
                ->where(function ($query) use ($term) {
                    $query->where('firstname', 'like', '%' . $term . '%')
                        ->orWhere('lastname', 'like', '%' . $term . '%');
                })
                ->get();

            return response()->json(['users' => $users]);
        } catch (\Exception $e) {
            // Handle the exception and return an error response if needed
            return response()->json(['error' => 'An error occurred while searching for users.'], 500);
        }
    }
}
