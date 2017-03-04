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
</div>


<div class="remodal" data-remodal-id="login">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h1>Вход</h1>
    <div class="row">
        <div class="input-field col s6">
            <input id="first_name2" type="email" class="validate" placeholder="Email">
            <label class="active" for="first_name2">Логин</label>
        </div>
        <div class="input-field col s6">
            <input id="first_name2" type="password" class="validate" placeholder="Пароль">
            <label class="active" for="first_name2">Пароль</label>
        </div>
    </div>
    <div class="row" style="text-align: center">
        <a href="">Напомнить пароль</a> | <a href="">Регистрация</a>
    </div>
    <a href="#" class="waves-effect cyan accent-3 btn">Войти</a>
</div>

<div class="remodal" data-remodal-id="register">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h1>Регистрация</h1>
    <div class="row">
        <div class="input-field col s6">
            <input id="first_name2" type="email" class="validate" placeholder="Email">
            <label class="active" for="first_name2">Логин</label>
        </div>
        <div class="input-field col s6">
            <input id="first_name2" type="password" class="validate" placeholder="Пароль">
            <label class="active" for="first_name2">Пароль</label>
        </div>
    </div>
    <div class="g-recaptcha" data-callback="recaptchaOK" data-sitekey="6LfyThcUAAAAAEDCRCM5vTGVl4tC8AUD1eFe2eas"></div>
    <a href="#" class="waves-effect cyan accent-3 btn">Регистрация</a>
</div>


<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="/js/{{js()}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
</body>
</html>