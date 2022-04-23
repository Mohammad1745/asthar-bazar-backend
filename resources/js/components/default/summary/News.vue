<template>
<div :class="className">
  <div class="news text-gray-200 ">
    <div class="header font-bold text-xl"> News </div>
    <div
      v-for="(item, index) in news"
      :key="index"
      class="my-1 grid grid-rows-3 grid-cols-3 grid-flow-col"
    >
      <div class="col-span-1 row-span-3">
        <img :src="item.image" alt="" :height="65" :width="65">
      </div>
      <div class="col-span-2 text-md font-bold">{{ item.title }}</div>
      <div class="col-span-2 text-gray-500 text-sm">{{ item.date }}</div>
      <div class="col-span-2 text-green text-sm">
        <NuxtLink :to="item.page">Read More...</NuxtLink>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  name: "News",
  props: ['className'],
  data() {
    return {
      news: [
        {page: "/", title: "WHAT SHOES TO WEAR", date: "JUNE 06, 2022", image: `/footer_blog_1.jpg`},
        {page: "/", title: "TRENDS THIS YEAR", date: "JUNE 06, 2022", image: `/footer_blog_2.jpg`},
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
    margin-bottom: 30px;
  }
}
@media (max-width: 766px) {
  .header {
    margin-bottom: 20px;
  }
}

</style>
