import * as types from './mutation-types';
import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        token: localStorage.getItem('access_token') || null
    },

    getters: {
        isLogged(state) {
            return state.token !== null;
        }
    },

    mutations: {
        [types.RETRIEVE_TOKEN](state, token) {
            state.token = token;
        },

        [types.DESTROY_TOKEN](state) {
            state.token = null;
        },
    },

    actions: {
        register(context, register) {
            return new Promise((resolve, reject) => {
                axios.post('/api/register', {
                    name: register.name,
                    email: register.email,
                    password: register.password
                }).then(response => {
                    resolve(response);
                }).catch(e => reject(e));
            });
        },

        retrieveToken(context, credentials) {
            return new Promise((resolve, reject) => {
                axios.post('/api/login', {
                    username: credentials.username,
                    password: credentials.password
                }).then(response => {
                    const token = response.data.access_token;

                    localStorage.setItem('access_token', token);
                    context.commit(types.RETRIEVE_TOKEN, token);
                    resolve(response);
                }).catch(e => reject(e));
            });
        },

        destroyToken(context) {
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + context.state.token;

            return new Promise((resolve, reject) => {
                axios.post('/api/logout').then(response => {

                    localStorage.removeItem('access_token', null);
                    context.commit(types.DESTROY_TOKEN, null);
                    resolve(response);
                }).catch(e => reject(e));
            });
        },
    },
});

export default store;
