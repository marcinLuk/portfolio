<template>
  <div class="experience-list" v-if="allExperience">
    <div class="experience-list__sidebar">
      <div v-for="experience in allExperience"  @click="setExpierence(experience)" class="experience__sidebar-item">
      {{ experience.companyName }}
      </div>
    </div>
    <div class="experience-list__content">
      <ExpierenceContentItem></ExpierenceContentItem>
    </div>
  </div>
</template>

<script>
import {mapActions, mapGetters} from "vuex";
import ExpierenceContentItem from "./ExpierenceContentItem.vue";

export default {
  name: "ExperienceList",
  components: {ExpierenceContentItem},
  data() {
    return {
      activeIndex: 0
    }
  },
  computed: {
    ...mapGetters('experience' , [
      'allExperience'
    ])
  },
  methods: {
    ...mapActions('experience' , [
        'setExpierence'
    ])
  }
}
</script>