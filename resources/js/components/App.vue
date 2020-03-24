<template>
    <div>
        <div class="my-auto page page-h">
            <router-view :key="$route.fullPath"></router-view>
        </div>
    </div>
</template>

<script>
    import template from './../template';

    export default {
        name: "App",

        mounted() {
            Vue.nextTick(() => {
                template();
            });
        }
    }
</script>

<style scoped>

</style>
