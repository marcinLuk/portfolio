
const mainStore = {
    state : {
        activeTemplate : 'experience', //about, mySkills, experience, myWork, myWorkSingle, contact, welcome
        loaded : false,
    },
    mutations : {
        SET_ACTIVE_TEMPLATE(state, templateName) {
            state.activeTemplate = templateName;
        },
        SET_LOADED(state, loaded) {
            state.loaded = loaded;
        }
    },
    actions : {
        setActiveTemplate({commit}, templateName) {
            commit('SET_ACTIVE_TEMPLATE', templateName);
        },
        setLoaded({commit}, loaded) {
            commit('SET_LOADED', loaded);
        }
    },
    getters : {
        activeTemplate: (state) => state.activeTemplate,
        loaded: (state) => state.loaded,
    },
    namespaced: true,
}

export default mainStore;
