<template>
  <main class="main">
    <div class="main__template-container">
      <Welcome v-show="activeTemplate === 'welcome'"></Welcome>
      <About v-show="activeTemplate === 'about'"></About>
      <Experience v-show="activeTemplate === 'experience'"></Experience>
      <MyWork v-show="activeTemplate === 'myWork'"></MyWork>
      <MyWorkSingle v-show="activeTemplate === 'myWorkSingle'"></MyWorkSingle>
      <Contact v-show="activeTemplate === 'contact'"></Contact>
    </div>
  </main>
</template>

<script>
import {mapGetters} from "vuex";
import About from "./about/About.vue";
import Experience from "./experience/Experience.vue";
import MyWork from "./myWork/MyWork.vue";
import Contact from "./contact/Contact.vue";
import MyWorkSingle from "./myWorkSingle/MyWorkSingle.vue";
import Welcome from "./weclcome/Welcome.vue";

export default {
  name: "Main",
  components: {Welcome, MyWorkSingle, Contact, MyWork, Experience, About},
  computed: {
    ...mapGetters('main', ['activeTemplate'])
  },
}
</script>