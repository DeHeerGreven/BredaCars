<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appointments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'first_name' => 'required',
            'infix' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'street' => 'required',
            'house_number' => 'required',
            'postal_code' => 'required',
            'city' => 'required',
            'phone_number' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'description' => 'required',
            'appointment_type' => 'required',
            'appointment_date' => 'required'
            // Add other fields if needed
        ]);
    
        // Create a new customer
        // $customer = User::create([
        //     'name' => $request->input('name'),
        //     'role' => 'customer',
        // ]);
    
        // Create a new company and associate it with the user
        $appointment = Appointment::create([
            'first_name' => $request->input('first_name'),
            'infix' => $request->input('infix'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'street' => $request->input('street'),
            'house_number' => $request->input('house_number'),
            'postal_code' => $request->input('postal_code'),
            'zipcode' => $request->input('zipcode'),
            'city' => $request->input('city'),
            'phone_number' => $request->input('phone_number'),
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'description' => $request->input('description'),
            'appointment_type' => $request->input('appointment_type'),
            'appointment_date' => $request->input('appointment_date'),

        ]);
        return view('appointments.succes');
    }

    /**
     * Display the specified resource.
     */
}
