@extends('layouts.main')

@section('title', 'Главная')
@section('description', 'Описание')


@section('content')

    <div class="main-search-wrapper">
        <div class="main-search">
            <div class="main-search__item">
                <input type="text" placeholder="Кого">
            </div>
            <div class="main-search__item">
                <input type="text" placeholder="Где">
            </div>
            <div class="main-search__item waves-effect teal cyan accent-3 btn">
                Поиск
            </div>
        </div>
        <ul class="main-search-links">
            <li><a href="#">Горячие предложения</a></li>
            <li><a href="#">Онлайн тесты</a></li>
            <li><a href="#">Отзывы</a></li>
            <li><a href="#">Полезная информация</a></li>
        </ul>
    </div>

    <div class="main-bonus-wrapper">
        <div class="container">
            <div class="main-bonus">
                <div class="main-bonus__item">
                    <div class="main-bonus__icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                    <div class="main-bonus__title">123 141 Инструкторов и автошкол</div>
                    <div class="main-bonus__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos error, iusto minus quos saepe tempora vitae. Dicta dolores error placeat!</div>
                </div>
                <div class="main-bonus__item">
                    <div class="main-bonus__icon"><i class="fa fa-smile-o" aria-hidden="true"></i></div>
                    <div class="main-bonus__title">1470 Успешно сдавших<br> на права</div>
                    <div class="main-bonus__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos error, iusto minus quos saepe tempora vitae. Dicta dolores error placeat!</div>
                </div>
                <div class="main-bonus__item">
                    <div class="main-bonus__icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                    <div class="main-bonus__title">Экономия времени</div>
                    <div class="main-bonus__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos error, iusto minus quos saepe tempora vitae. Dicta dolores error placeat!</div>
                </div>
                <div class="main-bonus__item">
                    <div class="main-bonus__icon"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="main-bonus__title">Оповещения и расписания</div>
                    <div class="main-bonus__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos error, iusto minus quos saepe tempora vitae. Dicta dolores error placeat!</div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-reviews-wrapper">
        <div class="main-reviews">
            <div class="main-reviews__col">
                <div class="main-reviews__title">Советы и ответы на вопросы</div>
                <div class="main-reviews__item">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Asperiores at consectetur corporis culpa dolorem, eligendi error
                    facere fugiat inventore iusto labore laborum laudantium nemo odio
                    pariatur perspiciatis porro tempora vel?
                </div>
                <div class="main-reviews__item">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Asperiores at consectetur corporis culpa dolorem, eligendi error
                    facere fugiat inventore iusto labore laborum laudantium nemo odio
                    pariatur perspiciatis porro tempora vel?
                </div>
                <div class="main-reviews__item">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Asperiores at consectetur corporis culpa dolorem, eligendi error
                    facere fugiat inventore iusto labore laborum laudantium nemo odio
                    pariatur perspiciatis porro tempora vel?
                </div>
            </div>
            <div class="main-reviews__col">
                <div class="main-reviews__title">Последние отзывы</div>
                <div class="main-reviews__item">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Asperiores at consectetur corporis culpa dolorem, eligendi error
                    facere fugiat inventore iusto labore laborum laudantium nemo odio
                    pariatur perspiciatis porro tempora vel?
                </div>
                <div class="main-reviews__item">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Asperiores at consectetur corporis culpa dolorem, eligendi error
                    facere fugiat inventore iusto labore laborum laudantium nemo odio
                    pariatur perspiciatis porro tempora vel?
                </div>
                <div class="main-reviews__item">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Asperiores at consectetur corporis culpa dolorem, eligendi error
                    facere fugiat inventore iusto labore laborum laudantium nemo odio
                    pariatur perspiciatis porro tempora vel?
                </div>
            </div>
        </div>
    </div>


@endsection