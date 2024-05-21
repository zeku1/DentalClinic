<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointments::where('approved','false')->get();

        return view('appointments',[
            'appointments' => $appointments,
        ]);
    }

    public function scheduled()
    {
        $appointments = Appointments::where('approved', 'true')
        ->where('finished', 'false')
        ->get();


        return view('appointment_procedures',[
            'appointments' => $appointments,
        ]);
    }

    public function approve(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        $appointment = Appointments::find($request->id);

        $appointment->update(['approved' => 'true']);

        return redirect()->back();
    }

    public function finished(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        $appointment = Appointments::find($request->id);

        $appointment->update(['finished' => 'true']);

        return redirect()->back();
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
        //
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
    public function destroy(Appointments $appointments)
    {
        //
    }
}
