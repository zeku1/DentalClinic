<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Payments;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payments::all();

        return view('admin_payments',[
            'payments' => $payments
        ]);
    }

    public function paid(Payments $payments){
        $payments->update(['paid' => 'true']);

        return redirect()->back()->with(['message' => 'Paid succesfully']);
    }


}