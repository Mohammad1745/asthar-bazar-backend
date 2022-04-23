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
          {page: "/", title: "HOME"},
          {page: "/signin", title: "SIGN IN"},
        ]
      }
    }
  }
</script>

<style scoped lang="scss">
.wrapper {
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: space-between;
}

.sidebar {
    height: 100vh;
    width: 265px;
    z-index: 99;
}
.header {
    z-index: 99;
}

.content {
    margin-left: 265px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.main {
    flex-grow:1;
}
//Responsive
@media (min-width: 1200px){
    .header {
        display: none;
    }
}
@media (max-width: 1199px){
    .sidebar {
        display: none;
    }
    .content {
        margin-left: 0;
    }
    .main {
        margin-top: 70px;
    }
}
@media (max-width: 990px){
    .header {

    }
}
</style>
