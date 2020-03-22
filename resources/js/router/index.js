import Vue from 'vue';
import VueRouter from 'vue-router';

import Login from "../components/auth/Login";
import Home from "../components/Home";
import Logout from "../components/auth/Logout";
import store from "../store";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/login',
            name: 'login',
            component: Login,
            meta: {
                requiresVisitor: true
            }
        },
        {
            path: '/logout',
            name: 'logout',
            component: Logout,
            meta: {
                requiresAuth: true
            }
        },
        {
            path: '/',
            name: 'home',
            component: Home,
            meta: {
                requiresAuth: true
            }
        },
    ]
});

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (!store.getters.isLogged) {
            next({name: 'login'})
        } else {
            next();
        }
    } else if (to.matched.some(record => record.meta.requiresVisitor)) {
        if (store.getters.isLogged) {
            next({name: 'home'})
        } else {
            next();
        }
    } else {
        next();
    }
});

export default router;
