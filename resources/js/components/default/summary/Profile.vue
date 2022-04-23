<template>
<div :class="className">
  <div class="profile text-gray-200">
    <div class="header">
      <img src="/images/logo.png" :height="75" :width="75" class="rounded-full" alt="Name" style="border: solid 2px #bbe432;">
    </div>
    <div class="description text-sm my-10">
      Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam fringilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem
    </div>
    <div class="bkash">
      <div>bKash: +880 1888 8888 88</div>
      <div>bKash: +880 1888 8888 88</div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  name: "Profile",
  props: ['className']
}
</script>

<style scoped>

</style>
