<template>
  <div class="experience">
    <Transition name="fadeleft">
      <h2 v-show="activeTemplate === 'experience'" style="--animation-delay: 0.2s" class="experience__title">Experience</h2>
    </Transition>
    <Transition name="fadeleft">
      <div v-show="activeTemplate === 'experience'" class="experience__content" style="--animation-delay: 0.4s">
        <experience-list></experience-list>
      </div>
    </Transition>
  </div>
</template>

<script>
import ExperienceList from "./ExperienceList.vue";
import {mapGetters} from "vuex";

export default {
  name: "Experience",
  components: {ExperienceList},
  computed : {
    ...mapGetters('main' , [
        'activeTemplate'
    ]),
  }
}
</script>