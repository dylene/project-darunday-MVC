<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    // Define the name of the database table
    protected $table = 'consultation';

    // Define the properties that can be mass assigned
    protected $fillable = [
        'name', 
        'email', 
        'phone',
        'message'
    ];
}