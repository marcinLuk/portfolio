/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

import {createApp} from 'vue';
import {createStore} from "vuex";
import App from '@/App.vue';
//store modules
import mainStore from '@/store/modules/main.js';
import projectsStore from '@/store/modules/projects.js';
import skillsStore from '@/store/modules/skills.js';
import experieniceStore from '@/store/modules/experience.js';

const app = createApp({
    components: {
        App
    }
});
const store = createStore({
   modules : {
       main : mainStore,
       projects : projectsStore,
       skills : skillsStore,
       experience : experieniceStore,
   }
});
app.use(store);
app.mount("#app");