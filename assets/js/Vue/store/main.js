
const mainStore = {
    state : {
        activeTemplate : 'about' //about, mySkills, experience, myWork, contact, loader
    },
    mutations : {
        SET_ACTIVE_TEMPLATE(state, templateName) {
            state.activeTemplate = templateName;
        }
    },
    actions : {
        setActiveTemplate({commit}, templateName) {
            commit('SET_ACTIVE_TEMPLATE', templateName);
        }
    },
    getters : {
        activeTemplate: (state) => state.activeTemplate
    },
    namespaced: true,
}

export default mainStore;
