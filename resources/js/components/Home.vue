<template>
    <div>
        <ul class="nav">
            <li class="nav-item" v-show="!isLogged">
                <router-link href="#" :to="{name: 'login'}">Login</router-link>
            </li>
            <li class="nav-item" v-show="isLogged">
                <router-link href="#" :to="{name: 'logout'}">Logout</router-link>
            </li>
        </ul>
        <h1>hi there!</h1>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex';

    export default {
        name: "Home",

        computed: {
            ...mapGetters(['isLogged'])
        }
    }
</script>

<style scoped>

</style>
