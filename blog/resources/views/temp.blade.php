<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>LaraCrud</title>
</head>

<body>
    <div class="container mt-2">
        <a href="{{route('inicio')}}" class="btn btn-primary">Inicio</a>
        <a href="{{route('fotos')}}" class="btn btn-primary">Fotos</a>
        <a href="{{route('blog')}}" class="btn btn-primary">Blog</a>
        <a href="{{route('nosotros')}}" class="btn btn-primary">Nosotros</a>
    </div>
    <div class="container">
        @yield("secc")
    </div>
    <div class="container bg-secondary text-center text-white">
        footer
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>