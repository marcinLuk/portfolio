<template>
  <div class="contact">
    <Transition name="fadeleft">
      <h2
        v-show="activeTemplate === 'contact'"
        style="--animation-delay: 0.2s"
        class="contact__title"
      >
        Contact
      </h2>
    </Transition>
    <Transition name="fadeleft">
      <form
        v-show="activeTemplate === 'contact'"
        style="--animation-delay: 0.4s"
        class="contact__form"
        @submit="formSubmit"
      >
        <div class="contact__input contact__input--half">
          <input
            v-model="name"
            type="text"
            name="name"
            placeholder="Name"
          >
        </div>
        <div class="contact__input contact__input--half">
          <input
            v-model="email"
            type="text"
            name="email"
            placeholder="Email"
          >
          <p
            v-show="error && inputErrors.email"
            class="contact__error"
          >
            {{ inputErrors.email }}
          </p>
        </div>
        <div class="contact__input">
          <input
            v-model="subject"
            type="text"
            name="subject"
            placeholder="Subject"
          >
        </div>
        <div class="contact__textarea">
          <textarea
            v-model="message"
            name="message"
            placeholder="Message"
          />
          <p
            v-show="error && inputErrors.message"
            class="contact__error"
          >
            {{ inputErrors.message }}
          </p>
        </div>
        <button
          type="submit"
          class="btn contact__button"
        >
          Submit
        </button>
        <p
          v-show="serverResponse"
          class="contact__response"
          :class="{ 'contact__response--error' : (error && serverResponse) }"
        >
          {{ serverResponse }}
        </p>
      </form>
    </Transition>
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
            if (!this.error) {
                sendEmail({
                    crfToken: this.crfToken,
                    name: this.name,
                    email: this.email,
                    subject: this.subject,
                    message: this.message,
                }).then(response => {
                    if (response.status === 200) {
                        this.serverResponse = 'Your message has been sent';
                        setTimeout(() => {
                            this.serverResponse = false;
                        }, 3000)
                    } else {
                        this.serverResponse = 'Sorry, something go wrong, please try again later'
                        this.error = true;
                    }
                });
            }
        },
        validateData() {
            this.error = false;
            this.inputErrors.email = '';
            this.inputErrors.message = '';
            //message
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