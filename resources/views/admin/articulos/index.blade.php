@extends('admin.template.main')

@section('title','Listado de Articulos')

@section('content')
<br>
<br>
<a href="{{ route('articulos.create') }}" class="btn btn-outline-primary">Nuevo Artículo</a>
<br>
<br>

<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<hr>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Titulo</th>
      <th>Contenido</th>
      <th>Usuario</th>
      <th>Categoria</th>
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>

  @foreach($articulos as $articulo)
    <tr>
        <td>{{ $articulo->id }}</td>
        <td>{{ $articulo->titulo }}</td>
        <td>{{ $articulo->contenido }}</td>
        <td>{{ $articulo->user_id }}</td>
        <td>{{ $articulo->category_id }}</td>
        <td>
            <a href="" class="btn btn-outline-warning">Editar</a> 
            <a href="" onclick="return confirm('¿seguro deseas eliminarlo?')" class="btn btn-outline-danger">Eliminar</a>  
        </td>
        
    </tr>
  @endforeach
    
  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    
  </ul>
</nav>




@endsection