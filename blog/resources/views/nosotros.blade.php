@extends("temp")

@section("secc")
    <h1>Este es mi equipo de trabajo</h1>
    @foreach($equipo as $item)
        <a href="{{route('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a>
        <br>
    @endforeach

    @if(!empty($nombre))
        @switch($nombre)
            @case($nombre == "Adrian")
            <hr>
            <h2 class="mt-3">El nombre es {{ $nombre }} </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptatem beatae, vel, nostrum ducimus excepturi atque provident, veritatis voluptate facere tenetur at alias tempora. Mollitia, esse. Suscipit rem numquam eveniet.</p>
            @break

            @case($nombre == "Juanito")
            <hr>
            <h2 class="mt-3">El nombre es {{ $nombre }} </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptatem beatae, vel, nostrum ducimus excepturi atque provident, veritatis voluptate facere tenetur at alias tempora. Mollitia, esse. Suscipit rem numquam eveniet.</p>
            @break

            @case($nombre == "Pedrito")
            <hr>
            <h2 class="mt-3">El nombre es {{ $nombre }} </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptatem beatae, vel, nostrum ducimus excepturi atque provident, veritatis voluptate facere tenetur at alias tempora. Mollitia, esse. Suscipit rem numquam eveniet.</p>
            @break

        @endswitch
    @endif 
@endsection