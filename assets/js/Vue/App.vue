<template>
  <div class="app">
    <transition name="fade">
      <div
        v-show="!loaded"
        class="app__loader"
      >
        <div class="lds-roller">
          <div />
          <div />
          <div />
          <div />
          <div />
          <div />
          <div />
          <div />
        </div>
      </div>
    </transition>
    <img
      :src="require('../../img/bg.jpg')"
      alt="background"
      class="app__bg"
    >
    <div class="firefly" />
    <div class="firefly" />
    <div class="firefly" />
    <div class="firefly" />
    <div class="firefly" />
    <div class="firefly" />
    <div class="firefly" />
    <div class="firefly" />
    <div class="firefly" />
    <div class="firefly" />
    <div class="firefly" />
    <div class="firefly" />
    <div class="firefly" />
    <div class="firefly" />
    <div class="firefly" />
    <div class="app__sidebar">
      <Sidebar />
    </div>
    <div
      class="app__main"
      :class="`app__main--${activeTemplate}`"
    >
      <MainContainer />
    </div>
    <div class="app__footer">
      <FooterContainer />
    </div>
  </div>
</template>

<script>
import Sidebar from "@/components/Sidebar.vue";
import MainContainer from "@/components/Main.vue";
import FooterContainer from "@/components/Footer.vue";
import {mapActions, mapGetters} from "vuex";

export default {
    name: "App",
    components: {
        Sidebar,
        MainContainer,
        FooterContainer
    },
    props: ['crf_token'],
    computed: {
        ...mapGetters('main', [
            'loaded',
            'activeTemplate'
        ])
    },
    methods: {
        ...mapActions('main', [
            'setLoaded',
            'setCrfToken'
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
            this.setCrfToken(this.crf_token);
            this.setLoaded(true);
        },
    },
    beforeMount() {
        this.appInit();
    }
}
</script>