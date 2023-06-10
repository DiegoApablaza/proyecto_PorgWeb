<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{
    protected $table = 'estudiantes';

    protected $fillable = ['rut','nombre', 'apellido', 'email'];
}
