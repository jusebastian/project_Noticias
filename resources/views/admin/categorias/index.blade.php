@extends('admin.template.main')

@section('title','Listado de Categorias')

@section('content')
<br>
<br>
<a href="{{ route('categorias.create') }}" class="btn btn-outline-primary">Nueva Categoria</a>
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
      <th>nombre</th>
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>

  @foreach($categorias as $categoria)
    <tr>
        <td>{{ $categoria->id }}</td>
        <td>{{ $categoria->name }}</td>
        <td>
            <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-outline-warning">Editar</a> 
            <a href="{{ route('admin.categorias.destroy', $categoria->id) }}" onclick="return confirm('¿seguro deseas eliminarlo?')" class="btn btn-outline-danger">Eliminar</a>  
        </td>
    </tr>
  @endforeach
    
  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    {!! $categorias->render() !!}
  </ul>
</nav>


@endsection



