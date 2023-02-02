<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = ['alumno_codigo', 'alumno_nombre', 'alumno_edad', 'alumno_sexo', 'alumno_observacion', 'alumno_id_grado'];
}
