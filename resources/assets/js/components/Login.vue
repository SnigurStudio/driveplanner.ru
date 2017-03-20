<template>
    <div class="remodal" data-remodal-id="login">
        <button data-remodal-action="close" class="remodal-close"></button>
        <h1>Вход</h1>

        <form v-bind:action="action" v-on:submit.prevent="send" v-bind:class="{ pending: pending}" method="post">
            <div class="row">
                <div class="input-field col s6">
                    <input id="email" type="email" v-model="inputs.email.value" placeholder="Email">
                    <label class="active" for="email">Логин</label>
                </div>
                <div class="input-field col s6">
                    <input id="password" type="password" v-model="inputs.password.value" placeholder="Пароль">
                    <label class="active" for="password">Пароль</label>
                </div>
            </div>

            <div class="row" style="text-align: center">
                <a href="">Напомнить пароль</a> | <a href="">Регистрация</a>
            </div>
            <div v-if="errors" style="color: red;text-align: center">Ошибка авторизации</div>
            <button class="waves-effect cyan accent-3 btn">Войти</button>
            <FormLoader v-bind:pending="pending"></FormLoader>
        </form>
    </div>
</template>

<script>

    export default {
        props: ['action'],
        data() {
            return {
                pending: false,
                inputs: {
                    email: {
                        value: '',
                        error: false
                    },
                    password: {
                        value: '',
                        error: false
                    }
                },
                errors: false
            }
        },

        created(){
            $('[data-remodal-id=login]').remodal({});
        },

        computed:{
            preparedInput(){
                return {
                    email: this.inputs.email.value,
                    password: this.inputs.password.value,
                }
            }
        },

        methods: {
            send(){
                var self = this;
                self.pending = true;
                console.log(self.preparedInput);
                $.ajax({
                    method: "POST",
                    url: self.action,
                    dataType: 'json',
                    data: self.preparedInput,
                    success( e ){
                        window.location.replace( e.redirect );
                        self.pending = false;
                    },
                    error(){
                        self.errors = true;
                        self.pending = false;
                    }
                })
            }
        }
    }
</script>