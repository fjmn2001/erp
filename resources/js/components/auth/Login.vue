<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Entrar</div>

                    <div class="card-body">
                        <form method="POST" autocomplete="off" @submit.prevent="login">
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" required autofocus v-model="username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Contraseña</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password" required v-model="password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Entrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapActions} from 'vuex';

    export default {
        name: "Login",

        data() {
            return {
                username: '',
                password: ''
            };
        },

        methods: {
            ...mapActions(['retrieveToken']),

            login() {
                this.retrieveToken({
                    username: this.username,
                    password: this.password
                }).then((response) => {
                    this.$router.push({name: 'home'})
                });
            }
        }
    }
</script>

<style scoped>

</style>
