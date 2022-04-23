<template>
  <nav class="relative flex flex-wrap items-center justify-between px-2 py-3 bg-dark mb-3">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
      <div class="w-full relative flex justify-between lg:w-auto  px-4 lg:static lg:block lg:justify-start">
        <!-- Logo -->
        <div class="">
          <img src="/images/logo.png" :height="50" :width="50" class="rounded-full" alt="Name" style="border: solid 2px #bbe432;">
        </div>
        <button class="text-white cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" v-on:click="toggleNavbar()">
          <i class="fas fa-bars"></i>
        </button>
      </div>
      <div v-bind:class="{'hidden': !showMenu, 'flex': showMenu}" class="lg:flex lg:flex-grow items-center">
        <ul class="flex flex-col lg:flex-row list-none ml-auto">
          <li v-for="menu in menus"
              :key="menu.page"
              class="nav-item">
            <NuxtLink :to="menu.page">
              <span class="px-3 py-2 flex items-center text-md uppercase font-bold leading-snug text-white hover:opacity-75">
                {{ menu.title }}
              </span>
            </NuxtLink>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: "Navbar",
  props: ['menus'],
  data() {
    return {
      showMenu: false,
    }
  },
  methods: {
    toggleNavbar: function(){
      this.showMenu = !this.showMenu;
    }
  }
}
</script>

<style scoped>

</style>
