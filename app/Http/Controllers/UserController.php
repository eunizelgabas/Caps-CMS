<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(){

        $users = User::with('roles')->get();
        return inertia('User/Index', [
            'users' => $users
        ]);
    }

    public function create(){
        $services = Service::all();
        return inertia('User/Create', [
            'roles' => Role::all(),
            'permissions' => Permission::all(),
            'services' => $services
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'lastname' => 'required|string',
            'firstname' => 'required|string',
            'middlename' => 'nullable|string',
            'suffix' => 'nullable|string',
            'gender' => 'required|string',
            'type' => 'required|string',
            'email' => 'required|email',
            'contact_no' => 'required',
            'password' => 'required|string',
            'role' => 'required',
        ]);

        $data['password'] = bcrypt($data['password']); // Hash the password

        unset($data['role']);
        $type = $data['type'];
        $role = $request->role;

        $user = User::create($data);

        $user->assignRole($role);

         if ($type === 'doctor') {
            // Handle the "doctor" type here.
            $specialization = $request->input('specialization');
            $selectedServiceIds = $request->input('selectedServiceIds');

            // Create a new doctor associated with the user
            $doctor = new Doctor([
                'specialization' => $specialization,
            ]);

            // Save the doctor first to get an ID.
            $user->doctor()->save($doctor);

            // Attach selected services to the doctor
            $doctor->services()->attach($selectedServiceIds);
        }
        return redirect()->route('user.index');
    }

    public function edit(User $user){
        $user = User::with('roles')->find($user->id);
        $roles = Role::all();
        return inertia('User/Edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    public function update(Request $request, User $user){
        $data = $request->validate([
            'lastname' => 'required|string',
            'firstname' => 'required|string',
            'middlename' => 'nullable|string',
            'suffix' => 'nullable|string',
            'gender' => 'required|string',
            'type' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'contact_no' => 'required',
            'password' => 'nullable|string',
            'role' => 'required',
        ]);

        // $data['password'] = bcrypt($data['password']); // Hash the password
        if (isset($data['password']) && $data['password'] !== null) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']); // Remove the "password" field from the data array
        }

        unset($data['role']);

        $role = $request->role;
        // $type = $data['type'];

        // $user = User::update($data);
        $user->update($data);

        $user->assignRole($role);

        // if ($type === 'doctor') {
        //     // Handle the "doctor" type here.
        //     $specialization = $request->input('specialization');
        //     $selectedServiceIds = $request->input('selectedServiceIds');

        //     // Create a new doctor associated with the user
        //     $doctor = new Doctor([
        //         'specialization' => $specialization,
        //     ]);

        //     // Save the doctor first to get an ID.
        //     $user->doctor()->save($doctor);

        //     // Attach selected services to the doctor
        //     $doctor->services()->attach($selectedServiceIds);
        // }

        return redirect()->route('user.index');
    }

    public function destroy(User $user) {
        $user->delete();

        return back();
    }
}
