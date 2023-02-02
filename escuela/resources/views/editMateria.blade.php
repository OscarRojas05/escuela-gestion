@extends('plantilla')
@section('contenido')
    <div class="row mt-3">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <form id="formMaterias" method="POST" action="{{ url('materias', [$materia]) }}">
                            @method('put')
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Materia</span>
                                <input type="text" name="materia_nombre" value="{{ $materia->materia_nombre }}" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                <button class="btn btn-success">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection