<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <script type="text/javascript" src="flowplay/flowplayer-3.2.2.min.js"></script>
  @yield('head')
</head>
<body>
  @include('inc.header')
  @yield('content')
  <!-- @include('inc.aside') -->
  @include('inc.footer')
</body>
</html>
