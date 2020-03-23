<template>
    <div class="main-signin-wrapper">
        <form class="main-card-signin d-md-flex wd-100p" autocomplete="off" @submit.prevent="login">
            <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white">
                <div class="my-auto authentication-pages">
                    <div>
                        <a href="index.html"><img src="../assets/img/brand/logo-white.png"
                                                  class="main-logo-pages m-0 mb-4" alt="logo"></a>
                        <h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
                        <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
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
                    <form action="index.html">
                        <div class="form-group">
                            <label>Email</label><input class="form-control" placeholder="Enter your email" type="text"
                                                       value="info@spruko.com">
                        </div>
                        <div class="form-group">
                            <label>Password</label> <input class="form-control" placeholder="Enter your password"
                                                           type="password" value="sprukodemo">
                        </div>
                        <button class="btn btn-main-primary btn-block">Sign In</button>
                    </form>
                </div>
                <div class="main-signin-footer mt-3 mg-t-5">
                    <p><a href="">Forgot password?</a></p>
                    <p>Don't have an account? <a href="page-signup.html">Create an Account</a></p>
                </div>
            </div>
        </form>
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
