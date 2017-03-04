<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Drive Planner - @yield('title')</title>
    <meta name="description" content="@yield('description')">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link rel="stylesheet" href="/css/{{css()}}">
</head>
<body>


<div class="main" id="main">
    @include('partials/header')
    <div class="content">@yield('content')</div>
    @include('partials/footer')
    
    <Register recaptchakey="{{env('GOOGLE_RECAPTCHA_KEY')}}" action="{{route('register.create')}}"></Register>
    <Login></Login>
</div>







<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="/js/{{js()}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
</body>
</html>