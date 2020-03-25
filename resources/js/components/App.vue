<template>
    <div>
        <transition name="router-animation"
                    enter-active-class="animated fadeIn"
                    leave-active-class="animated fadeOut">
            <router-view :key="$route.fullPath"></router-view>
        </transition>
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
