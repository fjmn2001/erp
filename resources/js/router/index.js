import Vue from 'vue';
import VueRouter from 'vue-router';
import Login from "../components/auth/Login";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/login',
            name: 'login',
            component: Login,
        }
    ]
});

export default router;
