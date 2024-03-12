<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DevStagram - @yield('titulo')</title>
</head>

<body>
  <nav>
    <a href="/">Principal</a>
    <a href="/nosotros">Nosotros</a>
    <a href="/tienda">Tienda</a>
  </nav>
  <h1>@yield('titulo')</h1>
  
  <hr>
  
  @yield('contenido')
  
</body>
</html>