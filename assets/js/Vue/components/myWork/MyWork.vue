<template>
  <div
    class="my-work"
  >
    <Transition name="fadeleft">
      <div
        v-if="projects"
        v-show="activeTemplate === 'myWork'"
        style="--animation-delay: 0.4s"
        class="my-work__items"
      >
        <div
          v-for="project in projects"
          class="my-work__item"
        >
          <div class="my-work-single">
            <a
              :href="project.link"
              target="_blank"
              class="my-work-single__title"
            >
              <h3 class="my-work-single__title">{{ project.name }}</h3>
            </a>
            <p class="my-work-single__desc">
              {{ project.description }}
            </p>
            <div class="my-work-single__tech-list">
              <div
                v-for="techstack in project.techstack"
                class="my-work-single__tech-list-item"
              >
                {{ techstack.Name }}
              </div>
            </div>
            <div class="my-work-single__links">
              <a
                v-if="project.github"
                :href="project.github"
                class="footer__social-item my-work-single__link"
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
                >
                  <title>
                    GitHub</title>
                  <path
                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"
                  />
                </svg>
              </a>
              <a
                :href="project.link"
                class="footer__social-item my-work-single__link"
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
                  class="feather feather-external-link"
                >
                  <title>External Link</title>
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                  <polyline points="15 3 21 3 21 9" />
                  <line
                    x1="10"
                    y1="14"
                    x2="21"
                    y2="3"
                  />
                </svg>
              </a>
            </div>
          </div>
          <img
            :src="require(`../../../../img/projects/${project.imgUrl}`)"
            class="my-work__bg-img"
            alt="Project screenshot"
          >
        </div>
      </div>
    </Transition>
  </div>
</template>

<script>
import {mapGetters, mapActions} from "vuex";

export default {
  name: "MyWork",
    computed: {
        ...mapGetters('projects', [
            'projects'
        ]),
        ...mapGetters('main', [
            'activeTemplate'
        ]),
    },
  methods: {
    ...mapActions('projects', [
      'setCurrentProject'
    ]),
    ...mapActions('main', [
      'setActiveTemplate'
    ])
  },
}
</script>