<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeifukuNime - @yield('title')</title>
    @include('include.style')
</head>

<body>
    <!-- Navabar -->
     <div class="container">
       @include('include.navbar')
    </div>

    <!-- Header -->
    <header class="text-center">
       <h1>
           Tempat Streaming Anime
           <br>
           Gratis
       </h1>
    </header>

    <!-- Content -->
<main>
    @yield('content')
</main>

@include('include.footer')


    @include('include.script')
</body>

</html>