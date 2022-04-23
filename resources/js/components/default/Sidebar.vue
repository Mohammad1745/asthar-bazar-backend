<template>
  <div class="p-8 h-screen bg-dark text-white">
    <!-- Logo -->
    <div class="p-5 mb-3">
      <img src="/images/logo.png" :height="150" :width="150" class="rounded-full" alt="Name" style="border: solid 2px #bbe432;">
    </div>

    <ul class="flex flex-col list-none ml-auto">
      <li
        v-for="menu in menus"
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
</template>

<script>
export default {
  name: "Sidebar",
  props: ['menus']
}
</script>

<style scoped>

</style>
