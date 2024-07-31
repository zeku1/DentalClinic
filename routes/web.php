<?php

use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\DentistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProcedureController;
use App\Models\Appointments;
use App\Models\Dentist;
use App\Models\Patient;
use App\Models\Procedure;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\AppointmentProcedureController;

Route::get('/', function () {
    $procedures = Procedure::all();
    $dentistCount = Dentist::all()->count();
    $patients = Patient::all()->count();
    return view('dashboard',[
        'procedures' => $procedures,
        'dentistCount' => $dentistCount,
        'patients' => $patients,

    ]);
})->name('dashboard');

Route::post('appointment/store',[PatientController::class,'store']);
Route::post('appointment/submit',[AppointmentsController::class,'store'])
    ->name('client.submit');

Route::get('/login',[LoginController::class, 'show']);
Route::post('/login',[LoginController::class, 'login'])->name('login.submit');

//admin dashboard
Route::group(['prefix' => 'admin' , 'middleware' => 'customeAuth'],function(){
    Route::get('/', function () {
        return view('admin_dashboard');
    })->name('admin.dashboard');

    Route::get('/panel', function () {
        return view('admin_panel');
    })->name('admin.panel');

    Route::get('/patients',[PatientController::class,'index'])
        ->name('admin.patients');
    Route::get('/patients/create',[PatientController::class,'create'])
        ->name('admin.patients.add');
    Route::post('/patients/store',[PatientController::class,'store'])
        ->name('admin.patients.store');
    Route::get('/patients/{patient}/edit',[PatientController::class,'edit'])
        ->name('admin.patients.edit');
    Route::put('/patients/{patient}/update',[PatientController::class,'update'])
        ->name('admin.patients.update');
    Route::delete('/patients/{patient}/destrtoy',[PatientController::class,'destroy'])
        ->name('admin.patients.destroy');

    Route::get('/appointments',[AppointmentsController::class,'index'])
        ->name('admin.appointments');
    Route::get('/appointments/create',[AppointmentsController::class,'create'])
        ->name('appointment.create');
    Route::put('appointments/{appointment}/approve',[AppointmentsController::class,'approve'])
        ->name('appointment.approve');
    Route::delete('appointments/{appointment}/delete',[AppointmentsController::class,'destroy'])
        ->name('appointment.destroy');
    Route::put('/appointments/{appointment}/finished',[AppointmentsController::class,'finished'])
        ->name('appointment.finished');
    Route::get('/schedule',[AppointmentsController::class,'schedule'])
        ->name('admin.schedule');
    Route::put('/schedule/{appointment}/cancel',[AppointmentsController::class,'cancel'])
        ->name('appointment.cancel');
        
    Route::get('/payments',[PaymentsController::class,'index'])
        ->name('payment.index');
    Route::put('/payment/{payments}/paid',[PaymentsController::class,'paid'])
        ->name('payment.paid');

    Route::get('/procedure',[ProcedureController::class,'index'])
        ->name('admin.procedures');
    Route::get('/procedure/create',[ProcedureController::class,'create'])
        ->name('admin.procedures.create');
    Route::post('/procedure/store',[ProcedureController::class,'store'])
        ->name('admin.procedures.store');
    Route::get('/procedure/{procedure}/edit',[ProcedureController::class,'edit'])
        ->name('admin.procedures.edit');
    Route::put('/procedure/{procedure}/update',[ProcedureController::class,'update'])
        ->name('admin.procedures.update');
        
    Route::get('/dentist',[DentistController::class,'index'])
        ->name('admin.dentists');
    Route::get('/dentist/create',[DentistController::class,'create'])
        ->name('admin.dentists.create');
    Route::post('/dentist/store',[DentistController::class,'store'])
        ->name('admin.dentists.store');
    Route::get('/dentist/{dentist}/edit',[DentistController::class,'edit'])
        ->name('admin.dentists.edit');
    Route::put('/dentist/{dentist}/update',[DentistController::class,'update'])
        ->name('admin.dentists.update');

    Route::get('/scheduled', [AppointmentsController::class, 'scheduled']);

    Route::post('/logout',[LoginController::class,'logout'])->name('logout');
});


