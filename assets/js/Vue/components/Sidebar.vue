<template>
  <nav class="sidebar">
    <ul class="sidebar__list">
      <Transition name="fadetop">
        <li class="sidebar__item"
            style="--animation-delay: 0.4s"
            @click="setActiveTemplate('about')"
            :class="{active :  activeTemplate === 'about'}"
            v-show="loaded">
          <a>About</a>
        </li>
      </Transition>
      <Transition name="fadetop">
        <li class="sidebar__item"
            style="--animation-delay: 0.6s"
            @click="setActiveTemplate('experience')"
            :class="{active : activeTemplate === 'experience' }"
            v-show="loaded">
          <a>Experience</a>
        </li>
      </Transition>
      <Transition name="fadetop">
        <li class="sidebar__item"
            style="--animation-delay: 0.8s"
            @click="setActiveTemplate('myWork')"
            :class="{active : activeTemplate === 'myWork' }"
            v-show="loaded">
          <a>My Work</a>
        </li>
      </Transition>
      <Transition name="fadetop">
        <li class="sidebar__item"
            style="--animation-delay: 1s"
            @click="setActiveTemplate('contact')"
            :class="{active : activeTemplate === 'contact' }"
            v-show="loaded">
          <a>Contact</a>
        </li>
      </Transition>
    </ul>
  </nav>
</template>

<script>
import {mapActions, mapGetters} from "vuex";

export default {
  name: "Sidebar",
  data() {
    return {
      navIsActive: false
    }
  },
  computed: {
    ...mapGetters('main', [
      'activeTemplate',
      'loaded'
    ])
  },
  methods: {
    ...mapActions('main', ['setActiveTemplate']),
    toggleNav() {
      this.navIsActive = !this.navIsActive;
    }
  }
}
</script>
