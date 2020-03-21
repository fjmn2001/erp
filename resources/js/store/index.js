import * as types from './mutation-types';
import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        token: null
    },

    mutations: {
        [types.RETRIEVE_TOKEN](state, token) {
            state.token = token;
        }
    },

    actions: {
        retrieveToken(context, credentials) {
            axios.post('/api/login', {
                username: credentials.username,
                password: credentials.password
            }).then(response => {
                console.log(response.data);
            }).catch(e => console.log(e));
        },
    },
});

export default store;
