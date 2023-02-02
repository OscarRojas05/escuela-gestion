@extends('plantilla')
@section('contenido')
    <div class="row mt-3">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <form id="formAlumnos" method="POST" action="{{ url('alumnos', [$alumno]) }}">
                            @method('put')
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Codigo</span>
                                <input type="text" name="alumno_codigo" value="{{ $alumno->alumno_codigo }}" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nombre Alumno</span>
                                <input type="text" name="alumno_nombre" value="{{ $alumno->alumno_nombre }}" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Edad</span>
                                <input type="text" name="alumno_edad" value="{{ $alumno->alumno_edad }}" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Sexo</span>
                                <input type="text" name="alumno_sexo" value="{{ $alumno->alumno_sexo }}" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Observacion</span>
                                <textarea class="form-control" name="alumno_observacion" aria-label="With textarea">{{ $alumno->alumno_observacion }}</textarea>
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Grado</label>
                                <select class="form-select" id="inputGroupSelect01" name="alumno_id_grado">
                                    <option selected>{{ $alumno->alumno_id_grado }}</option>
                                @foreach($grado as $row)
                                    <option value={{ $row->id }}>{{ $row->grado_nombre }}</option>
                                @endforeach
                                </select>
                            </div>
                            <button class="btn btn-success">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection