<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modal extends Model
{
    
    use HasFactory;
    protected $table    =   'modals';
    public $timestamps = false;
    protected $fillable = 
    [ 
        'id',
        'title',
        'desc',
        'image'
    ];
}
