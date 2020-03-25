<template>
    <div class="main-signin-wrapper">
        <div class="main-card-signin d-md-flex wd-100p">
            <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white">
                <div class="my-auto authentication-pages">
                    <div>
                        <a href="index.html"><img src="/public/img/brand/logo-white.png"
                                                  class="main-logo-pages m-0 mb-4" alt="logo"></a>
                        <h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
                        <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has survived
                            not only five centuries, but also the leap into electronic typesetting</p>
                        <a href="index.html" class="btn btn-pink">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="sign-up-body wd-md-50p">
                <div class="main-signin-header">
                    <h2>Welcome back!</h2>
                    <h4>Please Register with Rapo</h4>
                    <form autocomplete="off" @submit.prevent="register">
                        <div class="alert alert-danger mg-b-20" role="alert" v-if="serverErrors.length">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div v-for="(se, key) in serverErrors" :key="key">{{se[0]}}</div>
                        </div>
                        <div class="form-group">
                            <label>Firstname &amp; Lastname</label>
                            <input class="form-control" placeholder="Enter your firstname and lastname" type="text"
                                   :class="{'input-error': errors.has('name')}"
                                   v-model="name" v-validate="'required'" name="name">
                            <span class="form-error">{{ errors.first('name') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" placeholder="Enter your email" type="text"
                                   :class="{'input-error': errors.has('email')}"
                                   v-model="email" v-validate="'required|email'" name="email">
                            <span class="form-error">{{ errors.first('email') }}</span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" placeholder="Enter your password"
                                   :class="{'input-error': errors.has('password')}"
                                   type="password" v-model="password" v-validate="'required|min:8'" name="password">
                            <span class="form-error">{{ errors.first('password') }}</span>
                        </div>
                        <button type="submit" class="btn btn-main-primary btn-block">Create Account</button>
                    </form>
                </div>
                <div class="main-signup-footer mg-t-10">
                    <p>Already have an account? <a href="page-signin.html">Sign In</a></p>
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
                name: '',
                email: '',
                password: '',
                serverErrors: []
            };
        },

        methods: {
            ...mapActions(['retrieveToken']),

            register() {
                this.$validator.validateAll().then((result) => {
                    if(result){
                        this.$store.dispatch('register', {
                            name: this.name,
                            email: this.email,
                            password: this.password
                        }).then(response => {
                            this.$router.push({name: 'login'})
                        }).catch(error => {
                            this.serverErrors = Object.values(error.response.data.errors);
                        });
                    }
                });
            }
        }
    }
</script>

<style scoped>

</style>
