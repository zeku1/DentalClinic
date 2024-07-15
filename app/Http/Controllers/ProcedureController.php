<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $procedure = Procedure::all();

        return view('admin_procedure', [
            'procedures' => $procedure
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_add_procedure');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'price' => ['required', 'numeric', 'min:0', 'regex:/^\d+(\.\d{1,2})?$/'],
            'description' => 'nullable|string'
        ]);

        $procedure = Procedure::where('name', $validatedData['name'])
            ->where('price', $validatedData['price'])
            ->first();

        if ($procedure) {
            return redirect()->route('admin.procedures')
                ->with(['error' => 'There is a Procedure with similar records']);
        }

        $procedure = Procedure::create($validatedData);

        return redirect()->route('admin.procedures')->with(['message' => 'Procedure added successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Procedure $procedure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Procedure $procedure)
    {
        return view('admin_edit_procedure', [
            'procedure' => $procedure
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Procedure $procedure)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'price' => ['required', 'numeric', 'min:0', 'regex:/^\d+(\.\d{1,2})?$/'],
            'description' => 'nullable|string'
        ]);

        $procedure->update($validatedData);

        return redirect()->route('admin.procedures')->with(['message' => 'Procedure edited successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Procedure $procedure)
    {
        //
    }
}
