<template>
  <div class="app">
    <div class="app__sidebar">
      <Sidebar></Sidebar>
    </div>
    <div class="app__main">
      <div class="app__loader" v-show="!loaded">LOADER</div>
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
  computed : {
    ...mapGetters('main', [
        'loaded'
    ])
  },
  methods: {
    ...mapActions('main', [
      'setLoaded'
    ]),
    ...mapActions('projects', [
      'getProjects'
    ]),
    ...mapActions('experience', [
      'getExperience'
    ]),
    ...mapActions('skills', [
      'getSkills'
    ]),
    async appInit() {
      await this.getProjects();
      await this.getExperience();
      await this.getSkills();
      this.setLoaded( true );
    },
  },
  beforeMount() {
    this.appInit();
  }
}
</script>