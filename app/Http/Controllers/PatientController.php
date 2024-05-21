<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Patient;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'age' => 'required|integer',
            'number' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|email',
        ]);

        $patient = Patient::create($validatedData);

        $validateAppointment = $request->validate([
            'services.*' => 'required',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
        ]);

        $procedures = implode(", ", $request->input('services'));

        Appointments::create([
            'patient_id' => $patient->id,
            'procedures' => $procedures,
            'appointment_date' => $validateAppointment['appointment_date'],
            'appointment_time' => $validateAppointment['appointment_time'],
            'finished' => 'false',
            'approved' => 'false',
        ]);

        return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
