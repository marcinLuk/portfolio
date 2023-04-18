<template>
    <div class="app">
        <transition name="fade">
            <div v-show="!loaded" class="app__loader">
                <div class="lds-roller">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </transition>
        <!--    <img :src="require('../../img/bg.jpg')" alt="background" class="app__bg">-->
        <!--    <div class="firefly"></div>-->
        <!--    <div class="firefly"></div>-->
        <!--    <div class="firefly"></div>-->
        <!--    <div class="firefly"></div>-->
        <!--    <div class="firefly"></div>-->
        <!--    <div class="firefly"></div>-->
        <!--    <div class="firefly"></div>-->
        <!--    <div class="firefly"></div>-->
        <!--    <div class="firefly"></div>-->
        <!--    <div class="firefly"></div>-->
        <!--    <div class="firefly"></div>-->
        <!--    <div class="firefly"></div>-->
        <!--    <div class="firefly"></div>-->
        <!--    <div class="firefly"></div>-->
        <!--    <div class="firefly"></div>-->
        <div class="app__sidebar">
            <Sidebar></Sidebar>
        </div>
        <div class="app__main" :class="`app__main--${activeTemplate}`">
            <Main></Main>
        </div>
        <div class="app__footer">
            <Footer></Footer>
        </div>
    </div>
</template>

<script>
import Sidebar from "@/components/Sidebar.vue";
import Main from "@/components/Main.vue";
import Footer from "@/components/Footer.vue";
import {mapActions, mapGetters} from "vuex";

export default {
    name: "App",
    props: ['crf_token'],
    components: {
        Sidebar,
        Main,
        Footer
    },
    computed: {
        ...mapGetters('main', [
            'loaded',
            'activeTemplate'
        ])
    },
    methods: {
        ...mapActions('main', [
            'setLoaded',
            'setCrfToken'
        ]),
        ...mapActions('projects', [
            'getProjects'
        ]),
        ...mapActions('experience', [
            'getExperience'
        ]),
        ...mapActions('skills', [
            'getSkills'
        ]),
        async appInit() {
            await this.getProjects();
            await this.getExperience();
            await this.getSkills();
            this.setCrfToken(this.crf_token);
            this.setLoaded(true);
        },
    },
    beforeMount() {
        this.appInit();
    }
}
</script>