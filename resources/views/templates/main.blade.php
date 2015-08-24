<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Mi Blog Laravel')</title>
  {{--Librerias--}}
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/slate/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('blog.css')}}">
  <link rel="stylesheet" href="{{asset('trumbowyg.min.css')}}">
  <script src="{{asset('js/animatescroll.min.js')}}"></script>
  <script src="{{asset('js/trumbowyg.min.js')}}"></script>
  <script src="{{asset('js/navigate.js')}}"></script>
</head>
<body>
  @yield('content')
</body>
  @yield('js')
  @yield('footer')
</html>
