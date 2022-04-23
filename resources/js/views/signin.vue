<template>
  <div class="form m-10 sm:m-12 md:m-24 lg:m-32 px-12 sm:px-12 md:px-24 py-20">
    <div class="mb-16 text-2xl font-extrabold">Sign In</div>
    <div class="my-2">
      <div class="mb-1.5">Phone</div>
      <input type="text" v-model="phone" class="w-full h-16">
    </div>
    <div class="my-2">
      <div class="mb-1.5">Password</div>
      <input type="password" v-model="password" class="w-full h-16">
    </div>
    <div class="mt-16 ">
      <button class="bg-green text-sm font-bold w-full h-16">SIGN IN</button>
    </div>
<!--    <div class="flex justify-center py-2">Or</div>-->
<!--    <div class="">-->
<!--      <a class="bg-green-inverted text-sm font-bold flex justify-center items-center w-full h-16"-->
<!--         :href='backendUrl+"/auth/redirect?provider=google"'>-->
<!--        <i class="fab fa-google text-red-400 pr-2"></i> SIGN IN WITH GOOGLE-->
<!--      </a>-->
<!--    </div>-->
  </div>
</template>

<script>

export default {
  name: 'SignInPage',
  data() {
    return {
      phone: '',
      password: ''
    }
  }
}
</script>
