<template>
    <div class="remodal" data-remodal-id="register">
        <button data-remodal-action="close" class="remodal-close"></button>

        <div v-if="!created">
            <h1>Регистрация</h1>
            <form v-bind:action="action" v-on:submit.prevent="send" v-bind:class="{ pending: pending}">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="email" type="email" placeholder="Email" name="email" v-model="inputs.email.value" v-bind:class="{ invalid: inputs.email.error }">
                        <label class="active" for="email">Логин</label>
                        <p class="form__error" v-if="inputs.email.error">{{inputs.email.error}}</p>
                    </div>
                    <div class="input-field col s6">
                        <input id="password" type="password" placeholder="Пароль" name="password" v-model="inputs.password.value" v-bind:class="{ invalid: inputs.password.error }">
                        <label class="active" for="password">Пароль</label>
                        <p class="form__error" v-if="inputs.password.error">{{inputs.password.error}}</p>
                    </div>
                </div>
                <div class="g-recaptcha" data-callback="recaptchaOK" v-bind:data-sitekey="recaptchakey" v-bind:class="{ invalid: inputs['g-recaptcha-response'].error }"></div>
                <p class="form__error" v-if="inputs['g-recaptcha-response'].error">{{inputs['g-recaptcha-response'].error}}</p>
                <button class="waves-effect cyan accent-3 btn" v-bind:disabled="recaptchaBtnDisabled">Регистрация</button>

                <FormLoader v-bind:pending="pending"></FormLoader>
            </form>
        </div>

        <div v-if="created">
            <h1>Пользователь зарегистрирован</h1>
            <p>На ваш email( {{inputs.email.value}} был выслан код активация аккаунта. )</p>
        </div>
    </div>

</template>

<script>
    export default {
        props: ['recaptchakey','action'],

        data(){
            return {
                recaptchaBtnDisabled: true,
                created: false,
                pending: false,
                inputs: {
                    email: {
                        value: '',
                        error: false
                    },
                    password: {
                        value: '',
                        error: false
                    },
                    'g-recaptcha-response': {
                        value: '',
                        error: false
                    }
                }
            }
        },

        computed:{
          preparedInput(){
              return {
                  email: this.inputs.email.value,
                  password: this.inputs.password.value,
                  'g-recaptcha-response': this.inputs['g-recaptcha-response'].value,
              }
          }
        },

        created(){
            $('[data-remodal-id=register]').remodal();
            window.recaptchaOK = this.recaptchaOK;
        },

        methods: {
            recaptchaOK: function( r ){
                this.recaptchaBtnDisabled = false;
                this.inputs['g-recaptcha-response'].value = r;
            },
            send(){
                var self = this;
                self.pending = true;
                $.ajax({
                    method: "POST",
                    url: self.action,
                    dataType: 'json',
                    data: self.preparedInput,
                    success(){
                        self.created = true;
                        self.pending = false;
                    },
                    error( r ){
                        for (var key in self.inputs) {
                            self.inputs[key].error = false;
                            if ( r.responseJSON[key] )
                                self.inputs[key].error = r.responseJSON[key][0];
                        }
                        self.pending = false;
                    }
                })
            }
        }
    }
</script>