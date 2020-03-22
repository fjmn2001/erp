<template>

</template>

<script>
    import {mapActions} from 'vuex';

    export default {
        name: "Logout",

        mounted() {
            this.destroyToken().then(() => {
                console.log('token destroyed...');
            });
        },

        methods: {
            ...mapActions(['destroyToken'])
        }
    }
</script>

<style scoped>

</style>
