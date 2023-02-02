@extends('plantilla')
@section('contenido')
<div class="d-grid gap-4 col-2 mx-auto">
    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#gradoModal">
        Añadir Grado
      </button>
</div>

    <div class="tabla">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Grado</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($grado as $row)
                @php $i=1; @endphp
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->grado_nombre }}</td>
                    <td>
                        <a href="{{ url('grados', [$row]) }}" class="btn btn-warning"><i class="fa-solid fa-edit"></i></a>
                    </td>
                    <td>
                        <form method="POST" action="{{ url('grados', [$row]) }}">
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
  <div class="modal fade" id="gradoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Grado</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="formGrados" method="POST" action="{{ url('grados') }}">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre Grado</span>
                <input type="text" name="grado_nombre" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                <button class="btn btn-success">Save changes</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection