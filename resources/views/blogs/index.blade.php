@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Index</h1>
@stop

@section('content')

<table id="blogs" class="table table-dark table-striped mt-4">
  <thead>
    <th class="text-center">Id</th>
    <th class="text-center">Tíulo</th>
    <th class="text-center">Contenido</th>
    <th class="text-center">Acciones</th>
  </thead>
  <tbody>
    @foreach($blogs as $blog)
    <tr>
      <td class="text-center">{{$blog-> id}}</td>
      <td class="text-center">{{$blog->titulo}}</td>
      <td class="text-center">{{$blog->contenido}}</td>
      <td class="text-center">
        <form action=" {{route('blogs.destroy',$blog->id)}} " class="borrar d-flex justify-content-around" method="POST">
          @csrf
          @method('DELETE')
          @can('editar-blog')
          <a href="blogs/{{$blog->id}}/edit" class="btn btn-info">Editar</a>
          @endcan
          @can('borrar-blog')
          <button type="submit" class=" btn btn-danger boton-borrar">Borrar</button>
          @endcan
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@can('crear-blog')
<a href="blogs/create" class="btn btn-primary mt-5">Crear</a>
@endcan
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</link>
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function() {
    $('#blogs').DataTable({
      "lengthMenu": [
        [5, 10, 50, -1],
        [5, 10, 50, "All"]
      ]
    });
  });

  document.addEventListener('submit', e => {
    if (e.target.matches('.borrar')) {
      if (confirm("Seguro desea borrar el blog?") == 1) {} else {
        e.preventDefault();
      }
    }

  })
</script>
@stop