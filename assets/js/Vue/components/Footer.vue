<template>
  <Transition name="fadetop">
    <footer
      v-show="loaded"
      class="footer"
      style="--animation-delay: 1.2s"
    >
      <div class="footer__social">
        <a
          href="https://github.com/marcinLuk?tab=repositories"
          class="footer__social-item"
          target="_blank"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            role="img"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="feather feather-github"
          ><title>
             GitHub</title>
            <path
              d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"
            />
          </svg>
        </a>
        <a
          href="https://www.linkedin.com/in/marcin-lukaszek/"
          class="footer__social-item"
          target="_blank"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            role="img"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="feather feather-linkedin"
          ><title>
             LinkedIn</title>
            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
            <rect
              x="2"
              y="9"
              width="4"
              height="12"
            />
            <circle
              cx="4"
              cy="4"
              r="2"
            />
          </svg>
        </a>
      </div>
      <p class="footer__copy">
        Copyright © 2023 Marcin Łukaszek
      </p>
    </footer>
  </Transition>
</template>

<script>
import {mapGetters} from "vuex";

export default {
  name: "TheFooter",
  computed: {
    ...mapGetters('main', [
      'loaded'
    ])
  }
}
</script>

<style scoped>

</style>