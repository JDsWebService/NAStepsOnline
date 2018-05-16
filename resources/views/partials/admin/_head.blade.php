<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

{{-- Darkly Bootstrap Theme --}}
<link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@yield('stylesheets')

{{-- Custom Style Sheet for ALL pages --}}
<link rel="stylesheet" href="/css/styles-admin.css">

<title>{{ config('app.name') }} Admin - @yield('title')</title> 