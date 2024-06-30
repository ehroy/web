<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400%7cJosefin+Sans:300,400,600,700">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
            @yield('content')
    </div>
</body>
</html>