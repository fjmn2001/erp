<template>
    <div class="my-auto page page-h">
        <router-view :key="$route.fullPath"></router-view>
    </div>
</template>

<script>
    export default {
        name: "App"
    }
</script>

<style scoped>

</style>
