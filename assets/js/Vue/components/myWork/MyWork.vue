<template>
  <div class="my-work" v-if="projects">
    <div v-for="project in projects">
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
    ...mapGetters('projects' , ['projects'])
  }
}
</script>