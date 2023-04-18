import axios from "axios";

async function sendEmail(formData) {
    return await axios
        .post(`/contact`, formData)
        .then(response => {
            // debugger
            return {
                status: 200
            }
        })
        .catch(error => {
            // debugger;
            return {

            }
        });
}

export {
    sendEmail,
}