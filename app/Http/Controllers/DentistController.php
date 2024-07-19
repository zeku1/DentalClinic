<?php

namespace App\Http\Controllers;

use App\Models\Dentist;
use Illuminate\Http\Request;

class DentistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dentists = Dentist::all();

        return view('admin_dentist', [
            'dentists' => $dentists
        ]);
    }

    /**
     * Show the form for creating a new dentist.
     */
    public function create()
    {
        return view('admin_add_dentist');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'title' => 'required|string'
        ]);

        $dentist = Dentist::where('first_name', $validatedData['first_name'])
            ->where('last_name', $validatedData['last_name'])
            ->first();

        if ($dentist) {
            return redirect()->route('admin.dentists')
                ->with(['error' => 'There is a Dentist with similar records']);
        }

        $dentist = Dentist::create($validatedData);

        return redirect()->route('admin.dentists')->with(['message' => 'Dentist added successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dentist $dentist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dentist $dentist)
    {
        return view('admin_edit_dentist',[
            'dentist' => $dentist
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dentist $dentist)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'title' => 'required|string'
        ]);

        $dentist->update($validatedData);

        return redirect()->route('admin.dentists')->with(['message' => 'Dentist edited successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dentist $dentist)
    {
        //
    }
}
