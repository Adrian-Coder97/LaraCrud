@extends("temp")

@section("secc")
<div class="my-5">
<h1>Detalle de nota</h1>
<h4>id: {{$nota->id}} </h4>
<h4>Nombre: {{$nota->nombre}} </h4>
<h4>Nombre: {{$nota->descripcion}} </h4>
</div>


@endsection