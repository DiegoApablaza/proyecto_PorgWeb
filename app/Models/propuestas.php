<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propuestas extends Model
{
    protected $table = 'propuestas';

    protected $fillable = ['fecha', 'documento', 'estado','estudiante_rut'];
}
