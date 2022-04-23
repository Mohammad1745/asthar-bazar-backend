<template>
  <div :class="className" class="bg-white z-2">
    <div class="mx-10 flex flex-wrap  justify-around">
      <div
        v-for="i in 10"
        :key="i"
        class="product m-5 shadow-xl cursor-pointer">
        <div v-if="i%3===0" class="new">NEW</div>
        <div class="image">
          <img src="~assets/images/product_9.jpg" class="w-80 h-80" alt="">
        </div>
        <div class="name m-5 flex justify-center text-lg font-bold">
          বাগদা - বড় সাইজ (হিমায়িত)
        </div>
        <div class="price m-5 flex justify-center text-xl font-bold">
          49.99tk/kg
        </div>
        <div v-if="user" class="flex justify-center mb-5">
          <NuxtLink class="shop-btn bg-green-inverted text-sm font-bold px-5 py-4" to="/shop">
            Add To Cart
          </NuxtLink>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ProductList",
  props: ['className', 'user'],
  data(){
    return {

    }
  }
}
</script>

<style scoped>
.product {
  transition: 0.5s;
}
.product:hover {
  transform: scale(1.1);
}
.new {
  position: absolute;
  margin-left: 16rem;
  background: #bbe432;
  color: #414141;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 4rem;
  height: 2.5rem;
}
</style>
