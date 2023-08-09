<template>
    <div class="col-12 col-md-10 d-flex justify-content-center align-items-start section contact mt-5 pb-lg-4">
        <div class="row justify-content-center w-100 mt-5">
            <div class="col-12 d-flex flex-column justify-content-center align-items-end px-0 pb-4">
                <p class="yellow">{{ $t('message.sendUSAMessage') }}</p>
                <h2>{{ $t('message.contact') }}</h2>
            </div>
            <form action="api/send_mail.php" method="post" id="mailForm" class="row justify-content-between px-0">
              <div class="col-12 col-lg d-flex justify-content-center align-items-center d-none d-lg-flex pe-0 container-card px-0 mx-0">
                <div class="row justify-content-center h-100 w-100 card-grey">
                  <div class="col-12 d-flex justify-content-center align-items-center px-0">
                    <div class="row justify-content-center w-100">
                      <div class="col-12 d-flex justify-content-center align-items-start info">
                        <img src="../../img/contact-icons/mail.png" alt="">
                        <div class="d-flex flex-column justify-content-center align-items-start w-100">
                          <h3>{{ $t('message.emailUs') }}</h3>
                          <a href="mailto:nachomattano86@gmail.com">nachomattano86@gmail.com</a>
                          <a href="mailto:joacolinares2003@gmail.com">joacolinares2003@gmail.com</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-center align-items-center px-0">
                    <div class="row justify-content-center w-100">
                      <div class="col-12 d-flex justify-content-center align-items-start info">
                        <img src="../../img/contact-icons/phone.png" alt="">
                        <div class="d-flex flex-column justify-content-center align-items-start w-100">
                          <h3>{{ $t('message.callUs') }}</h3>
                          <a href="tel:+542215522274">+54 221 5522274</a>
                          <a href="tel:+542215679803">+54 221 5679803</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center form px-lg-0">
                    <div class="row justify-content-start w-100">
                        <div class="col-12 d-flex flex-column justify-content-center align-items-start px-0">
                            <h3>{{ $t('message.yourName') }}</h3>
                            <input type="text" name="name" id="name" v-model="contact.name">
                        </div>
                        <div class="col-12 d-flex flex-column justify-content-center align-items-start px-0">
                            <h3>{{ $t('message.yourEmail') }}</h3>
                            <input type="email" name="email" id="email" v-model="contact.email">
                        </div>
                        <div class="col-12 d-flex flex-column justify-content-center align-items-start px-0 mb-3">
                            <h3>{{ $t('message.yourPhone') }}</h3>
                            <MazPhoneNumberInput
                                v-model="phone"
                                show-code-on-list
                                color="info"
                                :preferred-countries="['AR', 'FR', 'US', 'GB', 'DE']"
                                :ignored-countries="['AC']"
                                @update="results = $event"
                                :success="results?.isValid"
                                class="w-100"
                                :aria-label="''"
                                :translations="{
                                    countrySelector: {
                                        placeholder: '',
                                        error: '',
                                    },
                                    phoneInput: {
                                        placeholder: '',
                                        example: '',
                                        label: ''
                                    },
                                }"
                                no-example
                                fetch-country
                                no-use-browser-locale
                            />
                        </div>
                        <div class="col-12 d-flex flex-column justify-content-center align-items-start px-0">
                            <h3>{{ $t('message.message') }}</h3>
                            <textarea name="message" id="message" cols="30" rows="8" v-model="contact.message"></textarea>
                        </div>
                        
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-end align-items-end">
                    <div class="row justify-content-end w-100">
                        <div class="col-6 col-lg-3 d-flex justify-content-center align-items-center  px-0">
                            <button type="button" value="Send" @click="sendMail()" class="see-more" id="seeMoreServicies" :disabled="disabled">
                                {{ $t('message.sendMessage') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import MazPhoneNumberInput from 'maz-ui/components/MazPhoneNumberInput.mjs'
import { useGeneralStore } from "@/stores/general";
import { storeToRefs } from "pinia";
import { createI18n, useI18n } from "vue-i18n";
import { ref } from 'vue';
import Swal from 'sweetalert2'


const general = useGeneralStore();
const {} = storeToRefs(general);
const {url} = general
const { t } = useI18n({ useScope: 'global' })

const contact = ref({
    name: '',
    email: '',
    message: ''
})

const results = ref({
    formatInternational: ""
})
const phone = ref()

const disabled = ref(false)

function sendMail() {
    console.log(disabled.value, 'comienzo')
    disabled.value = true
    const name = contact.value.name;
    const email = contact.value.email;
    const phone = results.value.formatInternational;
    const message = contact.value.message;
    const validateEmailConst = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;   
    const validatePhoneConst = /^\+?[\d\s-]+$/;
    // Validación para verificar si alguno de los campos está vacío
    const validateName = () => {
        if (!name ) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: t('message.errorName')
            })
            //console.log('false')
            return false
        }else{
            return true
        }
    }
    const validateEmail = () => {
        if (!email) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: t('message.errorEmail')
            })
            //console.log('false email')
            return false
        }else if (validateEmailConst.test(email) == false){
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: t('message.errorEmail2')
            })
            //console.log('false email')
            return false
        }
        else{
            return true
        }
    }
    const validatePhone = () => {
        if (!phone) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: t('message.errorPhone')
            })
            return false
        }else if (validatePhoneConst.test(phone) == false){
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: t('message.errorPhone2')
            })
            return false
        }
        else{
            return true
        }
    }
    const validateMessage = () => {
        if (!message ) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: t('message.errorMessage')
            })
            return false
        }else{
            return true
        }
    }
    if (validateName() === true && validateEmail() == true && validatePhone() == true && validateMessage() == true) {
        fetch(url+'/api/send_mail.php', {
            method: 'POST',
            headers: {
            'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                name: name,
                email: email,
                phone: phone,
                message: message
            })
        })
        .then(response => response.text())
        .then(data => {
            let dataParse = JSON.parse(data)
            //console.log(JSON.parse(data));
            //console.log(dataParse.inf.result)
            // Aquí puedes agregar la condición para verificar si la respuesta es correcta o no
            if (dataParse.inf.result == true) {
                //console.log('holi')
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: t('message.success')
                })
            } else {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'error',
                    title: t('message.error2')
                })
            }
        })    
        disabled.value = false
        return
    }else{
        disabled.value = false
        //console.log(phone)
    }
    disabled.value = false
}
// let button = document.getElementsByClassName('m-select-input__toggle-button')
// setInterval(function(){
    
//     button[0].dispatchEvent(new Event('click'))
// }, 1)
</script>

<style lang="scss" scoped>

</style>