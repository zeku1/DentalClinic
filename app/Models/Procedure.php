<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    public function appointments()
    {
        return $this->belongsToMany(Appointments::class, 'appointment_procedures')
                    ->withTimestamps();
    }
    
}
