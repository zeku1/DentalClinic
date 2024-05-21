<?php

use App\Http\Controllers\AppointmentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Models\Appointments;

Route::get('/', function () {
    return view('dashboard');
});

Route::post('appointment/store',[PatientController::class,'store']);

Route::get('/login',[LoginController::class, 'show']);
Route::post('/login',[LoginController::class, 'login'])->name('login.submit');

Route::get('/admin', function () {
    return view('admin_panel');
})->name('admin.panel');

Route::get('/admin/appointments',[AppointmentsController::class,'index'])->name('appointments');
Route::put('/admin/appointments/approve',[AppointmentsController::class,'approve']);
Route::put('/admin/appointments/finished',[AppointmentsController::class,'finished']);

Route::get('/admin/scheduled', [AppointmentsController::class, 'scheduled']);
