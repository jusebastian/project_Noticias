@extends('admin.template.main')

@section('title','login')

@section('content')

<br>
<br>

<form action="{{ route('admin.auth.login') }}" method="POST">
<input type="hidden" name="_method" value="PUT">

{{ csrf_field() }}
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com">
  </div>
  <div class="form-group">
    <label for="nombre">password</label>
    <input type="text" class="form-control" name="name" id="nombre" aria-describedby="emailHelp" placeholder="******">
  </div>

  <button type="submit" name="Enviar" class="btn btn-outline-success">Acceder</button>
 
</form>

@if(session()->has('msj'))
<div class="alert alert-success" role="alert">
  {{session('msj')}}
</div>
@endif


@endsection

