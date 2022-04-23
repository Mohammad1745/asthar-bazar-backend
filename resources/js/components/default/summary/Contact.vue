<template>
<div :class="className">
  <div class="contact text-gray-200 ">
    <div class="header font-bold text-xl"> Contact </div>

    <div> <span class="text-green mr-2 font-bold"> C. </span> {{ name }} </div>
    <div> <span class="text-green mr-2 font-bold"> T. </span> {{ phone }} </div>
    <div> <span class="text-green mr-2 font-bold"> E. </span> {{ email }} </div>
  </div>
</div>
</template>

<script>
export default {
  name: "Contact",
  props: ['className'],
  data() {
    return {
      name: "Asthar Bazar",
      phone: "+880 1888 8888 88",
      email: "astherbazar@gmail.com",
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
