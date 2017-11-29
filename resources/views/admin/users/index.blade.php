@extends('admin.template.main')

@section('title','Listar usuarios')

@section('content')
<br>
<br>
<a href="{{ route('users.create') }}" class="btn btn-outline-primary">Registrar</a>
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
      <th>Correo</th>
      <th>Tipo</th>
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>

  @foreach($usuarios as $usuario)
    <tr>
        <td>{{ $usuario->id }}</td>
        <td>{{ $usuario->name }}</td>
        <td>{{ $usuario->email}}</td>
        <td>
        @if($usuario->type == "admin" )

            <span class="badge badge-primary">{{ $usuario->type }}</span>

        @else

            <span class="badge badge-danger">{{ $usuario->type }}</span>

        @endif

        
        
        
        </td>
        <td>
            <a href="{{ route('users.edit', $usuario->id) }}" class="btn btn-outline-warning">Editar</a> 
            <a href="{{ route('admin.users.destroy', $usuario->id) }}" onclick="return confirm('¿seguro deseas eliminarlo?')" class="btn btn-outline-danger">Eliminar</a>  
        </td>
    </tr>
  @endforeach
    
  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    {!! $usuarios->render() !!}
  </ul>
</nav>

@endsection
