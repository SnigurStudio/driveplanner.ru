<header class="header-wrapper">
    <div class="container">
        <div class="header">
            <div class="header__logo"><a href="/">LOGO</a></div>
            <div class="header__locate"><i class="fa fa-map-marker" aria-hidden="true"></i> Новосибирск</div>

            @if( !Auth::check() )
            <div class="header__user">
                <a href="#login" class="waves-effect white blue-text btn">Войти</a>
                <a href="#register" class="waves-effect white blue-text btn">Регистрация</a>
            </div>
            @else
            <div class="header__user">
                <a class='dropdown-button  white-text' href='#' data-activates='dropdown1'>
                    <i class="fa fa-user" aria-hidden="true"></i> {{\Illuminate\Support\Facades\Auth::user()->email}}
                </a>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">Настройки</a></li>
                    <li><a href="#!">Расписание</a></li>
                    <li><a href="#!">Платежи и отчеты</a></li>
                    <li><a href="#!">Связь</a></li>
                    <li class="divider"></li>
                    <li><a href="{{route('logout')}}">Выйти</a></li>
                </ul>
            </div>
            @endif
        </div>
    </div>
</header>
