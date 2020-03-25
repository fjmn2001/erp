require('./bootstrap');
window.Vue = require('vue');

import VeeValidate from 'vee-validate';

Vue.use(VeeValidate);

import App from "./components/App";
import GlobalLoader from "./components/layouts/GlobalLoader";
import store from "./store";
import router from "./router";

const app = new Vue({
    el: '#app',
    store,
    router,
    components: {
        App,
        GlobalLoader
    }
});
