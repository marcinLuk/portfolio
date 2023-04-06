import service from '@/store/services/experience.js';

const experienceStore = {
    state: {
        allExperience : null,
        expierenceShow : null,
    },
    mutations : {
        SET_ALL_EXPIERENCE(state, allExperience) {
            state.allExperience = allExperience;
        },
        SET_EXPIERENCE_SHOW(state, expierenceShow) {
            state.expierenceShow = expierenceShow;
        }
    },
    actions : {
        async getExperience({commit, dispatch}) {
            await service
                .index()
                .then( (data) => {
                    commit('SET_ALL_EXPIERENCE', data);
                    commit('SET_EXPIERENCE_SHOW', data[0]);
                })
        },
        setExpierence({commit}, data) {
            commit('SET_EXPIERENCE_SHOW', data)
        }
    },
    getters : {
        allExperience: (state) => state.allExperience,
        expierenceShow: (state) => state.expierenceShow,
    },
    namespaced: true,
}

export default experienceStore;
