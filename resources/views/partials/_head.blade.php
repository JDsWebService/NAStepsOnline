<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

{{-- Lux Bootstrap Theme --}}
<link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- Font Awesome --}}
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

@yield('stylesheets')

{{-- Custom Style Sheet for ALL pages --}}
<link rel="stylesheet" href="/css/styles.css">

<title>{{ config('app.name') }} - @yield('title')</title> 