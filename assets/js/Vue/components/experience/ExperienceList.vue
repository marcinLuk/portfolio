<template>
  <div class="experience-list" v-if="allExperience">
    <div class="experience-list__sidebar">
      <div v-for="(experience, index) in allExperience"
           @click="setActiveItem(experience, index)"
           :class="{active : activeIndex === index }"
           class="experience-list__sidebar-item"
      >
        {{ experience.companyName }}
      </div>
    </div>
    <div class="experience-list__content">
      <Transition name="fadefast">
        <ExpierenceContentItem v-show="transition"></ExpierenceContentItem>
      </Transition>
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
      activeIndex: 0,
      transition: true,
    }
  },
  computed: {
    ...mapGetters('experience', [
      'allExperience'
    ])
  },
  methods: {
    ...mapActions('experience', [
      'setExpierence'
    ]),
    setActiveItem(item, index) {
      this.transition = false;
      this.activeIndex = index;
      setTimeout(() => {
        this.transition = true;
        this.setExpierence(item);
      }, 300 )
    }
  }
}
</script>