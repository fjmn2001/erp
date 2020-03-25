require('./bootstrap');
window.Vue = require('vue');

const toastrConfigs = {
    position: 'top right',
    showDuration: 2000,
    timeOut: 5000,
    progressBar: true,
    successColor: 'green',
    infoColor: 'blue',
    warningColor: 'orange',
    errorColor: 'red',
};

import VeeValidate from 'vee-validate';
import CxltToastr from 'cxlt-vue2-toastr'

Vue.use(VeeValidate);
Vue.use(CxltToastr, toastrConfigs);

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
