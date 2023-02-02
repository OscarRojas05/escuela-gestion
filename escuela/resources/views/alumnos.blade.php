@extends('plantilla')
@section('contenido')
<div class="d-grid gap-4 col-2 mx-auto">
    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#alumnoModal">
        Añadir Alumno
      </button>
</div>

    <div class="tabla">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Sexo</th>
                <th scope="col">Observacion</th>
                <th scope="col">Id Grado</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($alumno as $row)
                @php $i=1; @endphp
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->alumno_codigo }}</td>
                    <td>{{ $row->alumno_nombre }}</td>
                    <td>{{ $row->alumno_edad }}</td>
                    <td>{{ $row->alumno_sexo }}</td>
                    <td>{{ $row->alumno_observacion }}</td>
                    <td>{{ $row->alumno_id_grado }}</td>
                    <td>
                        <a href="{{ url('alumnos', [$row]) }}" class="btn btn-warning"><i class="fa-solid fa-edit"></i></a>
                    </td>
                    <td>
                        <form method="POST" action="{{ url('alumnos', [$row]) }}">
                            @method("delete")
                            @csrf
                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    <!-- Modal -->
  <div class="modal fade" id="alumnoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Alumno</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="formAlumnos" method="POST" action="{{ url('alumnos') }}">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Codigo</span>
                <input type="text" name="alumno_codigo" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre Alumno</span>
                <input type="text" name="alumno_nombre" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Edad</span>
                <input type="text" name="alumno_edad" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Sexo</span>
                <input type="text" name="alumno_sexo" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Observacion</span>
                <textarea class="form-control" name="alumno_observacion" aria-label="With textarea"></textarea>
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Grado</label>
                <select class="form-select" id="inputGroupSelect01" name="alumno_id_grado">
                    <option selected>Choose...</option>
                @foreach($grado as $row)
                    <option value={{ $row->id }}>{{ $row->grado_nombre }}</option>
                @endforeach
                </select>
            </div>
            <button class="btn btn-success">Save changes</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection