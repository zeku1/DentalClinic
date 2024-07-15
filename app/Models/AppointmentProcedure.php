<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentProcedure extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_id',
        'procedure_id',
    ];

    public $timestamps = true;

    public function appointment()
    {
        return $this->belongsTo(Appointments::class);
    }

    public function procedure()
    {
        return $this->belongsTo(Procedure::class);
    }
}
