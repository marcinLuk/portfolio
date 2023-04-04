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
import {mapActions, mapGetters} from "vuex";

export default {
  name: "App",
  components: {
    Sidebar,
    Main,
    Footer
  },
  methods: {
    ...mapActions('projects', [
      'getProjects'
    ]),
  },
  async beforeMount() {
    //load all data from axios
    await this.getProjects();
  }
}
</script>