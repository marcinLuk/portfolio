import service from '@/store/services/techstack.js'

const skillsStore = {
    state: {
        skills : null,
    },
    mutations : {
        SET_SKILLS(state, skills) {
            state.skills = skills;
        }
    },
    actions : {
        async getSkills({commit}) {
            await service
                .index()
                .then( (data) => {
                    commit('SET_SKILLS', data)
                })
        }

    },
    getters : {
        allExperience: (state) => state.skills,
    },
    namespaced: true,
}

export default skillsStore;
