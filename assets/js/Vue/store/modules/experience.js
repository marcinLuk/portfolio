import service from '@/store/services/experience.js';

const experienceStore = {
    state: {
        allExperience : null,
    },
    mutations : {
        SET_ALL_EXPIERENCE(state, projects) {
            state.allExperience = projects;
        }
    },
    actions : {
        async getExperience({commit}) {
            await service
                .index()
                .then( (data) => {
                    commit('SET_ALL_EXPIERENCE', data)
                })
        }

    },
    getters : {
        allExperience: (state) => state.allExperience,
    },
    namespaced: true,
}

export default experienceStore;
