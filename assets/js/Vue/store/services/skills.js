import axios from 'axios';

async function index() {
    return axios
        .get('/project/')
        .then(response => {
            return response.data;
        })
        .catch(error => {
            console.log(error);
        })
}

export default {
    index,
}