@extends("temp")

@section("secc")

<h1 class="mt-2">Notas</h1>

@if(session('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('mensaje')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<form class="border bg-success p-3 mb-5" action="{{route('crear')}}" method="POST">
    @csrf

    @error('nombre')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">El campo nombre es obigatorio <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>
    @enderror

    @error('descripcion')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">El campo descripcion es obigatorio <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>
    @enderror

    <h3 class="my-2">Agregar Nueva nota:</h3>
    <input type="text" name="nombre" placeholder="nombre" class="form-control my-2" value="{{old('nombre')}}">
    <input type="text" name="descripcion" placeholder="descripcion" class="form-control mb-2" value="{{old('descripcion')}}">
    <button type="submit" class="btn btn-primary w-100">Agregar</button>
</form>

<h1>lista de notas:</h1>
<table class="table bg-dark text-white border p-5">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($notas as $nota)
        <tr>
            <th scope="row">{{$nota->id}}</th>
            <td>
                <a href="{{route('detalle', $nota)}}">{{$nota->nombre}}</a>
            </td>
            <td>{{$nota->descripcion}}</td>
            <td class="d-flex">
                <a href="{{ route('editar', $nota) }}" class="btn btn-warning btn-sm">Editar</a>

                <form class="px-2" action="{{route('eliminar', $nota)}}" method="POST"> 
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $notas->links('pagination::bootstrap-4') }}
@endsection