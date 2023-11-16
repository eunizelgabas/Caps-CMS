<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $pendingApp = Appointment::where('status', '=', 'Pending')->count();
        $appointment = Appointment::with('user', 'doctor.user', 'service')
                    ->orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();
        return inertia('Dashboard',
            [
                'pendingApp' => $pendingApp,
                'appointment' => $appointment
            ]);
    }
}
