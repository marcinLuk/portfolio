<template>
  <div v-if="currentProject" class="my-work-single">
    <a v-show="activeTemplate === 'myWorkSingle'" style="--animation-delay: 0.2s" :href="currentProject.link"
       target="_blank" class="my-work-single__title">
      <h3 class="my-work-single__title">{{ currentProject.name }}</h3>
    </a>
    <p class="my-work-single__desc">{{ currentProject.description }}</p>
    <div class="my-work-single__tech-list">
      <div class="my-work-single__tech-list-item">Vue</div>
      <div class="my-work-single__tech-list-item">React</div>
      <div class="my-work-single__tech-list-item">Php</div>
    </div>
    <div class="my-work-single__links" v-if="currentProject.github">
      <a :href="currentProject.github" class="footer__social-item my-work-single__link" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor"
             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><title>
          GitHub</title>
          <path
              d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
        </svg>
      </a>

    </div>
    <img :src="currentProject.imgUrl" alt="" class="my-work-single__img">
  </div>
</template>

<script>
import {mapGetters} from "vuex";

export default {
  name: "myWorkSingle",
  computed: {
    ...mapGetters('projects', [
      'currentProject'
    ]),
    ...mapGetters('main', [
      'activeTemplate'
    ]),
  }
}
</script>