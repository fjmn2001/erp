import Vue from 'vue';
import VueRouter from 'vue-router';

import Login from "../components/auth/Login";
import Home from "../components/Home";
import Logout from "../components/auth/Logout";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/login',
            name: 'login',
            component: Login,
        },
        {
            path: '/logout',
            name: 'logout',
            component: Logout,
        },
        {
            path: '/',
            name: 'home',
            component: Home,
        },
    ]
});

export default router;
