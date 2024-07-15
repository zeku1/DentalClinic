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
        $patients = Patient::all();

        return view('admin_patients',[
            'patients' => $patients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_add_patient');
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

        $patient = Patient::where('first_name', $validatedData['first_name'])
                            ->where('last_name', $validatedData['last_name'])
                            ->first();

        if($patient){
            return redirect()->route('admin.patients')
                ->with(['error' => 'There is a Patient with similar records']);
        }

        $patient = Patient::create($validatedData);

        return redirect()->route('admin.patients')->with(['message' => 'Patient added successfully']);
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
        // dd($patient);
        return view('admin_edit_patient',[
            'patient' => $patient
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'age' => 'required|integer',
            'number' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|email',
        ]);

        $patient->updateOrFail($validatedData);


        return redirect()->route('admin.patients')->with(['message' => 'Patient added successfully']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
