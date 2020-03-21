require('./bootstrap');
window.Vue = require('vue');

import App from "./components/App";
import store from "./store";
import router from "./router";

const app = new Vue({
    el: '#app',
    store,
    router,
    components: {
        App
    }
});
