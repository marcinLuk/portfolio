<template>
  <main class="main">
    <div class="main__template-container">
      <Welcome v-if="activeTemplate === 'welcome'"></Welcome>
      <About v-if="activeTemplate === 'about'"></About>
      <Experience v-if="activeTemplate === 'experience'"> </Experience>
      <MyWork v-if="activeTemplate === 'myWork'"></MyWork>
      <MyWorkSingle v-if="activeTemplate === 'myWorkSingle'"></MyWorkSingle>
      <Contact v-if="activeTemplate === 'contact'"></Contact>
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