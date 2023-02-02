@extends('plantilla')
@section('contenido')
<div class="tabla">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Alumno</th>
            <th scope="col">Grado</th>
            <th scope="col">Materias</th>
          </tr>
        </thead>
        <tbody>
          @foreach($alumno as $row)
          @php
            $i = 0;
          @endphp
            @foreach($materiaxgrado as $mat)
              @php
              $id_materia = array();
              $nombre_materia = array();
              //array_push($nombre_materia, 'hola');
              //array_push($nombre_materia, 'adios');
              if($row->alumno_id_grado == $mat->id_grado){
                array_push($id_materia, $mat->id_materia);
              }
              @endphp
            @endforeach
            @foreach($materia as $materias)
              @php
                if($materias->id == $id_materia[$i]){
                  array_push($nombre_materia, $materias->materia_nombre);
                }
                //$i = 0;
              @endphp
            @endforeach
            @foreach($grado as $key)
              @php
              $i = 0;
              if($row->alumno_id_grado == $key->id){
                $nombre_grado_alumno = $key->grado_nombre;
              }
              @endphp
            @endforeach
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->alumno_nombre }}</td>
                <td>
                  {{ $nombre_grado_alumno }}
                </td>
                <td>
                  {{ $nombre_materia[$i] }}
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection