@extends('admin.template.main')

@section('title','Editar Categorias')

@section('content')

<br>
<br>

<form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
<input type="hidden" name="_method" value="PUT">


{{ csrf_field() }}
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="name" id="nombre" aria-describedby="emailHelp" value="{{$categoria->name}}">
  </div>
  <!--<div class="form-group">
    <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
    <Textarea type="text" class="form-control" name="descripcion" placeholder="Descripción">
    </Textarea>
        @if($errors->has('descripcion'))
            <span>{{$errors->first('descripcion')}}</span>
        @endif
  </div>-->

  <button type="submit" name="Editar" class="btn btn-outline-success">Guardar</button>
 
</form>

@if(session()->has('msj'))
<div class="alert alert-success" role="alert">
  {{session('msj')}}
</div>
@endif


@endsection
