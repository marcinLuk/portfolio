<template>
    <div class="contact">
        <Transition name="fadeleft">
            <h2 v-show="activeTemplate === 'contact'" style="--animation-delay: 0.2s" class="contact__title">
                Contact</h2>
        </Transition>
        <form @submit="formSubmit">
            <input v-model="name" type="text" name="name" placeholder="Name">
            <input v-model="email" type="text" name="email" placeholder="Email">
            <p v-if="error && inputErrors.email">{{ inputErrors.email }}</p>
            <input v-model="subject" type="text" name="subject" placeholder="Subject">
            <textarea v-model="message" name="message" placeholder="Message"> </textarea>
            <p v-if="error && inputErrors.message">{{ inputErrors.message }}</p>
            <button type="submit">Submit</button>
            <p v-if="serverResponse" :class="{ 'error' : (error && serverResponse) }">{{ serverResponse }}</p>
        </form>
    </div>
</template>

<script>
import {mapGetters} from "vuex";
import {sendEmail} from "../../store/services/contact";

export default {
    name: "Contact",
    data() {
        return {
            name: '',
            email: '',
            subject: '',
            message: '',
            error: false,
            inputErrors: {
                email: '',
                message: '',
            },
            serverResponse: false,
        }
    },
    computed: {
        ...mapGetters('main', [
            'activeTemplate',
            'crfToken',
        ]),
    },
    methods: {
        formSubmit(event) {
            event.preventDefault();
            this.validateData();
            if(!this.error) {
                sendEmail({
                    crfToken: this.crfToken,
                    name : this.name,
                    email : this.email,
                    subject : this.subject,
                    message : this.message,
                }).then( response => {
                   if(response.status == 200) {
                       this.serverResponse = 'Your message has benn send'
                       setTimeout(() => {
                           this.serverResponse = false;
                       }, 3000 )
                    }  else {
                       this.serverResponse = 'Error'
                       this.error = true;
                   }
                });
            }
        },
        validateData() {
            this.error = false;
            this.inputErrors.email = '';
            this.inputErrors.message = '';
            //messsage
            if (this.message.length === 0) {
                this.error = true;
                this.inputErrors.message = 'Field cannot be empty';
            }
            //email
            if (this.email.length === 0) {
                this.error = true;
                this.inputErrors.email = 'Field cannot be empty';
            }
            if (!this.emailCheck()) {
                this.error = true;
                this.inputErrors.email = 'Email is incorrect';
            }
        },
        emailCheck() {
            let re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return re.test(this.email);
        }
    }
}
</script>