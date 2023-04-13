import service from '@/store/services/projects.js';

const projectsStore = {
    state: {
        currentProject : null,
        projects : null,
    },
    mutations : {
        SET_ALL_PROJECTS(state, projects) {
            state.projects = projects;
        },
        SET_CURRENT_PROJECT(state, project) {
            state.currentProject = project
        }
    },
    actions : {
        async getProjects({commit}) {
            await service
                .index()
                .then( (data) => {
                    commit('SET_ALL_PROJECTS', data)
                })
        },
        setCurrentProject({commit}, project) {
            commit('SET_CURRENT_PROJECT', project)
        }
    },
    getters : {
        projects: (state) => state.projects,
        currentProject: (state) => state.currentProject,
    },
    namespaced: true,
}
export default projectsStore;
