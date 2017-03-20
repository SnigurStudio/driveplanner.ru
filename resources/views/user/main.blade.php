@extends('layouts.main')

@section('title', 'Добро пожаловать, '.\Illuminate\Support\Facades\Auth::user()->name )
@section('description', 'Описание')


@section('content')

<div class="container">
    <h3>Личный кабинет</h3>
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#settings">Настройки</a></li>
                <li class="tab col s3"><a href="#schedule">Расписание</a></li>
                <li class="tab col s3"><a href="#reports">Платежи и отчеты</a></li>
                <li class="tab col s3"><a href="#communications">Связь</a></li>
            </ul>
        </div>
        <div id="settings" class="col s12">
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header active">Личные данные</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                    <div class="collapsible-header">Оповещение</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
            </ul>
        </div>
        <div id="schedule" class="col s12">Test 2</div>
        <div id="reports" class="col s12">Test 3</div>
        <div id="communications" class="col s12">Test 4</div>
    </div>
</div>

@endsection