<?php

namespace App\Http\Controllers;

use App\Models\AppointmentProcedure;
use Log;
use App\Models\Patient;
use App\Models\Payments;
use App\Models\Procedure;
use App\Models\Appointments;
use App\Models\Dentist;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointments::where('approved','false')->get();
        $dentist = Dentist::all();

        return view('admin_appointments',[
            'appointments' => $appointments,
            'dentists' => $dentist,
        ]);
    }

    public function schedule()
    {
        $appointments = Appointments::where('approved', 'true')
                                    ->where('finished', 'false')
                                    ->orderBy('appointment_date')
                                    ->orderBy('appointment_time')
                                    ->get();

        $dentist = Dentist::all();

        return view('admin_schedule',[
            'appointments' => $appointments,
            'dentists' => $dentist,
        ]);
    }

    public function approve(Appointments $appointment)
    {

        $appointment->update(['approved' => 'true']);

        return redirect()->back()->with(['message' => 'Appointment request has been scheduled']);
    }

    public function cancel(Appointments $appointment)
    {

        $appointment->update(['finished' => 'cancelled']);

        return redirect()->back()->with(['error' => 'Appointment has been cancelled']);
    }

    public function finished(Appointments $appointment)
    {

        // Update the appointment's 'finished' status
        $appointment->update(['finished' => 'true']);

        $procedures = $appointment->procedures;
        $total = 0.00;

        foreach($procedures as $procedure){
            $total += $procedure->procedure->price;
        }



        // Create a new payment record
        Payments::create([
            'appointment_id' => $appointment->id,
            'amount' => $total,
            'paid' => 'false',
        ]);



        // Redirect back to the previous page
        return redirect()->back()->with(['message'=>'Appointment is done! Proceed to payment.']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $procedures = Procedure::all();
        return view('admin_add_appointment',[
            'procedures' => $procedures
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        $validatedPatient = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'age' => 'required',
            'address' => 'required',
            'number' => 'required',
            'email' => 'required|email',
        ]);

        $validatedAppointment = $request->validate([
            'appointment_date' => 'required',
            'appointment_time' => 'required',
        ]);

        $validatedProcedure = $request->validate([
            'procedures' => 'required|array',
            'procedures.*' => 'exists:procedures,id',
        ]);

        $patient = Patient::where('first_name', $validatedPatient['first_name'])
            ->where('last_name', $validatedPatient['last_name'])
            ->first();

        if(!$patient){
            $patient = Patient::create($validatedPatient);
        }

        $appointment = new Appointments();
        $appointment->patient_id = $patient->id;
        $appointment->appointment_date = $validatedAppointment['appointment_date'];
        $appointment->appointment_time = $validatedAppointment['appointment_time'];
        $appointment->finished = 'false';
        $appointment->approved = 'false';
        $appointment->save();

        foreach ($validatedProcedure['procedures'] as $procedureId) {
            AppointmentProcedure::create([
                'appointment_id' => $appointment->id,
                'procedure_id' => $procedureId
            ]);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointments $appointments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointments $appointments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointments $appointments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointments $appointment)
    {
        $appointment->delete();

        return redirect()->back()->with(['message' => 'Appointment request has been deleted']);
    }
}
