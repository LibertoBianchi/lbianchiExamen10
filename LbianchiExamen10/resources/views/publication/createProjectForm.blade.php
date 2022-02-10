@extends('layout.baseForm')

@section('contenido')


<h1>Crear Articulo</h1>
@if(Session::has('success'))
        <div class="alert alert-success">
            Session::get('success')
        </div>
        @endif

        @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li class="text-danger">{{$error}}</li> 
        @endforeach
    </ul>
    @endif

<form action="/publications " method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">@lang('formPublication.publicationName')</label>
    <input id="publicationName" name="publicationName" type="text" class="form-control" tabindex="1" value ="{{old('publicationName')}}" required>    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">@lang('formPublication.publicationExtract')</label>
    <input id="publicationExtract" name="publicationExtract" type="text"  value ="{{old('publicationExtract')}}" class="form-control" tabindex="2" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">@lang('formPublication.publicationContent')</label>
    <input id="publicationContent" name="publicationContent" type="textbox"  value ="{{old('publicationContent')}}" class="form-control" tabindex="2" required>
  </div>
  
  
 
  <div class="mb-3">
    <label for="" class="form-label">@lang('formPublication.publicationDate')</label>
    <input id="publicationDate" name="publicationDate" type="date" class="form-control" tabindex="5" value ="{{old('publicationDate')}}" required>
  </div>
 
 
   
  
  <button type="submit" class="btn btn-primary" tabindex="4">Publicar</button>
</form>


@endsection