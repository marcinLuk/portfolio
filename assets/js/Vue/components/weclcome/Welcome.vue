<template>
  <div class="welcome">
    <Transition name="fadeleft">
      <h1 v-show="loaded" class="welcome__title" style="--animation-delay: 1.8s">
        Hi, <br>
        I'm <span class="welcome__highlited">Marcin Łukaszek</span><br>
        Wordpress developer
      </h1>
    </Transition>
    <Transition name="fadeleft">
      <p v-show="loaded" style="--animation-delay: 2s" class="welcome__desc">
        I’m a Full-stack Wordpress developer with 3 years of experience in developing web applications.<br> Proficient in PHP, HTML, CSS, JavaScript, and Vue. <br>Skilled in developing responsive web designs
        and
        integrating APIs. Passionate about creating user-friendly interfaces and solving complex problems
      </p>
    </Transition>
    <Transition name="fadeleft">
      <div style="--animation-delay: 2.2s" v-show="loaded">
        <a class="btn">Contact me</a>
      </div>
    </Transition>
  </div>
</template>

<script>
import {mapGetters} from "vuex";

export default {
  name: "Welcome",
  computed: {
    ...mapGetters('main', [
      'loaded',
      'activeTemplate'
    ])
  },
}
</script>