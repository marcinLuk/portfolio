<template>
  <nav class="sidebar">
    <div class="sidebar__trigger">
      <div class="hamburger hamburger--collapse" @click="toggleNav()" :class="{'is-active' : navIsActive}">
        <div class="hamburger-box">
          <div class="hamburger-inner"></div>
        </div>
      </div>
    </div>
    <ul class="sidebar__list" :class="{'active' : navIsActive}">
      <li @click="setActiveTemplate('about')" class="sidebar__item">About</li>
      <li @click="setActiveTemplate('experience')" class="sidebar__item">Experience</li>
      <li @click="setActiveTemplate('myWork')" class="sidebar__item">My Work</li>
      <li @click="setActiveTemplate('contact')" class="sidebar__item">Contact</li>
    </ul>
  </nav>
</template>

<script>
import {mapActions} from "vuex";

export default {
  name: "Sidebar",
  data() {
    return {
      navIsActive : false
    }
  },
  methods: {
    ...mapActions('main' , ['setActiveTemplate']),
    toggleNav() {
      this.navIsActive = !this.navIsActive;
    }
  }
}
</script>
