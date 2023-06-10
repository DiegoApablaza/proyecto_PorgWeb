<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor_propuesta extends Model
{
    protected $table = 'profesor_propuesta';

    protected $fillable = ['nombre', 'apellido', 'email'];
}
