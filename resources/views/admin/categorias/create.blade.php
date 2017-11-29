@extends('admin.template.main')

@section('title','Agregar Categorias')

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



<form action="{{ route('categorias.store')}}" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="name" id="nombre" aria-describedby="emailHelp" placeholder="Nombre">
  </div>
  <!--<div class="form-group">
    <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
    <Textarea type="text" class="form-control" name="descripcion" placeholder="Descripción">
    </Textarea>
        @if($errors->has('descripcion'))
            <span>{{$errors->first('descripcion')}}</span>
        @endif
  </div>-->

  <button type="submit" name="enviar" class="btn btn-outline-success">Registrar</button>
 
</form>

@if(session()->has('msj'))
<div class="alert alert-success" role="alert">
  {{session('msj')}}
</div>
@endif


@endsection

