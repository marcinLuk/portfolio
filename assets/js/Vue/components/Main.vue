<template>
<main class="main">
  <About v-if="activeTemplate === 'about'"></About>
  <MySkills v-if="activeTemplate === 'mySkills'"></MySkills>
  <Experience v-if="activeTemplate === 'experience'"></Experience>
  <MyWork v-if="activeTemplate === 'myWork'"></MyWork>
  <Contact v-if="activeTemplate === 'contact'"></Contact>
  <Loader v-if="activeTemplate === 'loader'"></Loader>
</main>
</template>

<script>
import {mapGetters} from "vuex";
import About from "./about/About.vue";
import MySkills from "./mySkills/MySkills.vue";
import Experience from "./experience/Experience.vue";
import MyWork from "./myWork/MyWork.vue";
import Contact from "./contact/Contact.vue";
import Loader from "./loader/Loader.vue";

export default {
  name: "Main",
  components: {Loader, Contact, MyWork, Experience, MySkills, About},
  computed: {
    ...mapGetters('main' , ['activeTemplate'])
  },
}
</script>