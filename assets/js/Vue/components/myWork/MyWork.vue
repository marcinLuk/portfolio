<template>
  <div class="my-work" v-if="allProjects">
    <div v-for="project in allProjects">
      <img :src="project.thumbnailUrl" alt="">
      <div>{{ project.name }}</div>
    </div>
  </div>
</template>

<script>
import {mapGetters} from "vuex";

export default {
  name: "MyWork",
  methods : {

  },
  computed : {
    ...mapGetters('projects' , ['allProjects'])
  }
}
</script>