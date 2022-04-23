<template>
<div :class="className">
  <div class="faq text-gray-200 ">
    <div class="header font-bold text-xl"> FAQ </div>
    <ul class="grid grid-cols-2">
      <li
        v-for="(menu, index) in menus"
        :key="index"
        class="my-1"
      > <NuxtLink :to="menu.page"> {{ menu.title }}</NuxtLink></li>
    </ul>
  </div>
</div>
</template>

<script>
export default {
  name: "Faq",
  props: ['className'],
  data() {
    return {
      menus: [
        {page: "/", title: "About Us"},
        {page: "/", title: "Contact Us"},
        {page: "/", title: "Offers"},
        {page: "/", title: "Order Guideline"},
        {page: "/", title: "Payment Information"},
        {page: "/", title: "Delivery Information"},
        {page: "/", title: "Terms and Conditions"},
        {page: "/", title: "Privacy Policy"},
      ]
    }
  }
}
</script>

<style scoped>
.header {
  margin-bottom: 90px;
}

@media (max-width: 1499px) {
  .header {
    margin-bottom: 90px;
  }
}
@media (max-width: 766px) {
  .header {
    margin-bottom: 20px;
  }
}
</style>
