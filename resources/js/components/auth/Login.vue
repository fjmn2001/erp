<template>
    <div class="my-auto page page-h">
        <div class="main-signin-wrapper">
            <div class="main-card-signin d-md-flex wd-100p">
                <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white">
                    <div class="my-auto authentication-pages">
                        <div>
                            <a href="index.html">
                                <img src="/public/img/brand/logo-white.png"
                                     class="main-logo-pages m-0 mb-4" alt="logo"></a>
                            <h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
                            <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <a href="index.html" class="btn btn-pink">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="p-5 wd-md-50p">
                    <div class="main-signin-header">
                        <h2>Welcome back!</h2>
                        <h4>Please sign in to continue</h4>
                        <form autocomplete="off" @submit.prevent="login">
                            <div class="alert alert-danger mg-b-20" role="alert" v-if="serverError">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{serverError}}
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" placeholder="Enter your email" type="text"
                                       v-model="username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" placeholder="Enter your password"
                                       type="password" v-model="password">
                            </div>
                            <button type="submit" class="btn btn-main-primary btn-block" :disabled="loading">
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"
                                      v-show="loading"></span>
                                Sign In
                            </button>
                        </form>
                    </div>
                    <div class="main-signin-footer mt-3 mg-t-5">
                        <p><a href="">Forgot password?</a></p>
                        <p>Don't have an account?
                            <router-link :to="{name: 'register'}">Create an Account</router-link>
                        </p>
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
                password: '',
                serverError: '',
                loading: false
            };
        },

        methods: {
            ...mapActions(['retrieveToken']),

            login() {
                this.loading = true;
                this.retrieveToken({
                    username: this.username,
                    password: this.password
                }).then(response => {
                    this.$router.push({name: 'home'})
                }).catch(error => {
                    this.serverError = error.response.data;
                    this.password = '';
                }).finally(() => this.loading = false);
            }
        }
    }
</script>

<style scoped>

</style>
