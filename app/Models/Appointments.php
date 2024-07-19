<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'procedures',
        'appointment_date',
        'appointment_time',
        'finished',
        'approved',
        'dentist_id',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }

    public function procedures()
    {
        return $this->hasMany(AppointmentProcedure::class,'appointment_id');
    }

}
