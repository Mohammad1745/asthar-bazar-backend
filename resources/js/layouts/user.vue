<template>
  <div class="wrapper">
    <div class="sidebar fixed">
      <sidebar :menus="menus" />
    </div>
    <div class="content">
      <div class="header fixed w-full">
        <navbar :menus="menus" />
      </div>
      <div class="main">
          <slot name="main"></slot>
      </div>
      <div class="footer">
        <Footer />
      </div>
    </div>
  </div>
</template>

<script>
  import Sidebar from "../components/default/Sidebar";
  import Navbar from "../components/default/Navbar";
  import Footer from "../components/default/Footer";
  export  default {
    components: {Sidebar, Navbar, Footer},
    data() {
      return {
        menus: [
          {page: "/home", title: "HOME"},
          {page: "/shop", title: "SHOP"},
          {page: "/cart", title: "CART"},
          {page: "/news", title: "NEWS"},
          {page: "/account", title: "ACCOUNT"},
          {page: "/logout", title: "Logout"},
        ]
      }
    }
  }
</script>

<style scoped>
</style>
