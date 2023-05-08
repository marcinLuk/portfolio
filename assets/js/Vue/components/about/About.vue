<template>
  <div class="about">
    <Transition name="fadeleft">
      <h2
        v-show="activeTemplate === 'about'"
        style="--animation-delay: 0.2s"
        class="about__title"
      >
        About
      </h2>
    </Transition>
    <Transition name="fadeleft">
      <div
        v-show="activeTemplate === 'about'"
        class="about__desc"
        style="--animation-delay: 0.4s"
      >
        I am a WordPress programmer with three years of
        professional experience. <br><br>
        For a year, I
        worked as a freelancer, creating websites and online stores for various clients. Then I joined the <a
          href="https://appwise.pl/en/"
          target="_blank"
        >Appwise</a>
        software house team, where I was involved in developing and maintaining projects based on WordPress and
        Woocommerce. <br><br>
        I have skills in creating responsive and functional websites, optimizing performance and security,
        integrating with various systems and APIs. I am interested in new technologies and constantly improving my
        qualifications.
      </div>
    </Transition>
    <Transition name="fadeleft">
      <div
        v-show="activeTemplate === 'about'"
        class="about__img"
        style="--animation-delay: 0.6s"
      >
        <img
          :src="require('../../../../img/me.jpg')"
          alt=""
        >
      </div>
    </Transition>
  </div>
</template>

<script>
import {mapGetters} from "vuex";

export default {
  name: "About",
  computed: {
    ...mapGetters('main', [
      'activeTemplate'
    ])
  }
}
</script>