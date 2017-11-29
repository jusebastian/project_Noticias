@extends('admin.template.main')

@section('title','Agregar Articulos')

@section('content')

<br>
<br>

<form action="{{ route('articulos.store')}}" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="emailHelp" placeholder="titulo">
  </div>
  <div class="form-group">
    <label for="contenido" class="col-sm-2 control-label">Contenido</label>
    <Textarea type="text" class="form-control" name="contenido" placeholder="Contenido"></Textarea>
  </div>

  <button type="submit" name="enviar" class="btn btn-outline-success">Registrar</button>
 
</form>

@if(session()->has('msj'))
<div class="alert alert-success" role="alert">
  {{session('msj')}}
</div>
@endif


@endsection
