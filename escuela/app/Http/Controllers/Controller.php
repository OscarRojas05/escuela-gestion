<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Materia;
use App\Models\Alumno;
use App\Models\Grado;
use App\Models\MateiaxGrado;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $materia = Materia::all();
        $alumno = Alumno::all();
        $grado = Grado::all();
        $materiaxgrado = MateiaxGrado::all();
        return view('welcome', compact('alumno', 'grado', 'materia', 'materiaxgrado'));
    }
}
