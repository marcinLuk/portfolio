<template>
  <div class="app">
    <div class="app__sidebar">
      <Sidebar></Sidebar>
    </div>
    <div class="app__main">
      <Main></Main>
    </div>
    <div class="app__footer">
      <Footer></Footer>
    </div>
  </div>
</template>

<script>
import Sidebar from "@/components/Sidebar.vue";
import Main from "@/components/Main.vue";
import Footer from "@/components/Footer.vue";
import {mapGetters} from "vuex";

export default {
  name: "App",
  components: {
    Sidebar,
    Main,
    Footer
  },
  mounted() {

  }
}
</script>