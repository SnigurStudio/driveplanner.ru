<template>
    <div class="remodal" data-remodal-id="login">
        <button data-remodal-action="close" class="remodal-close"></button>
        <h1>Вход</h1>
        <div class="row">
            <div class="input-field col s6">
                <input id="email" type="email" class="validate" placeholder="Email">
                <label class="active" for="email">Логин</label>
            </div>
            <div class="input-field col s6">
                <input id="password" type="password" class="validate" placeholder="Пароль">
                <label class="active" for="password">Пароль</label>
            </div>
        </div>
        <div class="row" style="text-align: center">
            <a href="">Напомнить пароль</a> | <a href="">Регистрация</a>
        </div>
        <a href="#" class="waves-effect cyan accent-3 btn">Войти</a>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                test: 'Hello from vue ;) !'
            }
        },
        created(){
            $('[data-remodal-id=login]').remodal({});
        }
    }
</script>