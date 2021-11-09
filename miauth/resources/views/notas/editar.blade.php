@extends('layouts.app')

@section('content')
<h1>editar nota {{$nota->id}} </h1>

@if(session('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('mensaje')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<form class="border bg-warning p-3 mb-5" action="{{route('update', $nota->id)}}" method="POST">
    @method('PUT')
    @csrf

    @error('nombre')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">El campo nombre es obigatorio <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>
    @enderror

    @error('descripcion')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">El campo descripcion es obigatorio <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>
    @enderror

    <h3 class="my-2">Editar nota:</h3>
    <input type="text" name="nombre" placeholder="nombre" class="form-control my-2" value="{{$nota->nombre}}">
    <input type="text" name="descripcion" placeholder="descripcion" class="form-control mb-2" value="{{$nota->descripcion}}">
    <button type="submit" class="btn btn-primary w-100">Editar</button>
</form>

<a href="/notas" class="btn btn-primary btn-sm">Volver a lista de notas...</a>
@endsection