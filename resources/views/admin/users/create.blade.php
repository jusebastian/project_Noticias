@extends('admin.template.main')

@section('title','Crear usuario')

@section('content')

<br>
<br>    
@if(count($errors)>0)
  <div class="alert alert-danger" role="alert">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error}}</li>
      @endforeach
    </ul>
  </div>
@endif

<hr>
<form action="{{ route('users.store')}}" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="name" id="nombre" aria-describedby="emailHelp" placeholder="Nombre">
  </div>
  <div>
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="ejemplo@gmail.com">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="*****">
  </div>
  <div class="form-group">
    <label class="mr-sm-2" for="type">Tipo usuario</label>
    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="type" id="type" >
        <option selected>Selecciones tù nivel...</option>
        <option name="member" value="member">Miembro</option>
        <option name="admin" value="admin">Administrador</option>
    </select>
  </div>

 
  <button type="submit" name="enviar" class="btn btn-outline-success">Registrar</button>
 
</form>


 <!--Retorna el mensaje de validación-->

@if(session()->has('msj'))
<div class="alert alert-success" role="alert">
  {{session('msj')}}
</div>
@endif

@if(session()->has('msjdelete'))
<div class="alert alert-danger" role="alert">
  {{session('msjdelete')}}
</div>
@endif
  

@endsection