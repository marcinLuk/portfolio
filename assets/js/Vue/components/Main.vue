<template>
  <main class="main">
    <div class="main__template-container">
      <Welcome v-show="activeTemplate === 'welcome'" />
      <About v-show="activeTemplate === 'about'" />
      <Experience v-show="activeTemplate === 'experience'" />
      <MyWork v-show="activeTemplate === 'myWork'" />
      <Contact v-show="activeTemplate === 'contact'" />
    </div>
  </main>
</template>

<script>
import {mapGetters} from "vuex";
import About from "./about/About.vue";
import Experience from "./experience/Experience.vue";
import MyWork from "./myWork/MyWork.vue";
import Contact from "./contact/Contact.vue";
import Welcome from "./weclcome/Welcome.vue";

export default {
  name: "MainContainer",
  components: {Welcome, Contact, MyWork, Experience, About},
  computed: {
    ...mapGetters('main', ['activeTemplate'])
  },
}
</script>