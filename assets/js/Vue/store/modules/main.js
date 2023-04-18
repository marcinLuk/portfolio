
const mainStore = {
    state : {
        activeTemplate : 'contact', //about, mySkills, experience, myWork, myWorkSingle, contact, welcome
        loaded : false,
        crfToken : '',
    },
    mutations : {
        SET_ACTIVE_TEMPLATE(state, templateName) {
            state.activeTemplate = templateName;
        },
        SET_LOADED(state, loaded) {
            state.loaded = loaded;
        },
        SET_CRF_TOKEN(state, crfToken) {
            state.crfToken = crfToken;
        }
    },
    actions : {
        setActiveTemplate({commit}, templateName) {
            commit('SET_ACTIVE_TEMPLATE', templateName);
        },
        setLoaded({commit}, loaded) {
            commit('SET_LOADED', loaded);
        },
        setCrfToken({commit}, crfToken) {
            commit('SET_CRF_TOKEN', crfToken);
        }
    },
    getters : {
        crfToken: (state) => state.crfToken,
        activeTemplate: (state) => state.activeTemplate,
        loaded: (state) => state.loaded,
    },
    namespaced: true,
}

export default mainStore;
