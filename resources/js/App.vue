<template>
    <div>
        <default-layout v-if="true">
            <template v-slot:main>
                <transition name="fade">-->
                    <router-view></router-view>
                </transition>
            </template>
        </default-layout>
        <user-layout v-if="false">
            <template v-slot:main>
                <transition name="fade">-->
                    <router-view></router-view>
                </transition>
            </template>
        </user-layout>
    </div>
</template>

<script>
import DefaultLayout from './layouts/default'
import UserLayout from "./layouts/user";

export default {
    name: "App.vue",
    components: {DefaultLayout, UserLayout}
}
</script>

<style>
.fade-enter-active, .fade-leave-active {
    transition: opacity .5s
}
.fade-enter, .fade-leave-active {
    opacity: 0
}
</style>
