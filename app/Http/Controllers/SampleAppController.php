<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\sampleApp;
use App\Models\Service;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class SampleAppController extends Controller
{
    //

    public function app(Request $request){
        $doctors = Doctor::whereHas('user', function ($query) {
            $query->where('status', 1);
        })->with(['services', 'user'])->get();

        $services = Service::all();

        // Assuming you want to search for users based on a search term provided in the request
        $searchTerm = $request->input('term');
        $users = User::where('status', 'active')
            ->where(function ($query) use ($searchTerm) {
                $query->where('firstname', 'like', "%$searchTerm%")
                    ->orWhere('lastname', 'like', "%$searchTerm%");
            })
            ->get();


        $selectedDoctor = null;
        $availableServices = [];



        return inertia('Appointment/Sample', [
            'doctors' => $doctors,
            'services' => $services,
            'users' => $users,

            'selectedDoctor' => $selectedDoctor,
            'availableServices' => $availableServices,
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'student_id' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'doc_id' => 'required',
            'service_id' => 'required',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|after_or_equal:now',
            'reason' => 'required',
        ]);

        // Check if the student with the provided ID, first name, and last name exists
        $existingStudent = Student::where([
            'id' => $validatedData['student_id'],
            'firstname' => $validatedData['firstname'],
            'lastname' => $validatedData['lastname'],
        ])->first();

        if (!$existingStudent) {
            // Handle case where the student does not exist
            return redirect('/app')->with(['error' => 'Student not found']);
        }

        // If checks pass, store the appointment
        sampleApp::create([
            'student_id' => $existingStudent->id, // assuming 'id' is the primary key of the students table
            'doc_id' => $validatedData['doc_id'],
            'service_id'=>$validatedData['service_id'],
            'date' => $validatedData['date'],
            'time' => $validatedData['time'],
            'reason' => $validatedData['reason'],
        ]);

        // Return a success response
        return redirect('/app')->with(['success' => 'Appointment submitted successfully']);
    }
}



