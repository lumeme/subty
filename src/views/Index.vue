<template>
    <div class="container-fluid" id="home">
        <div id="preload-images"></div>
        <div class="row justify-content-center" id="top">
            <div class="background-one d-flex flex-column justify-content-center align-items-center">
                <Navbar/>
                <!--- CONTACT --->
                <Contact id="home"/>
            </div>
            <!--- PROBLEM --->
            <Problem/>
            <!--- SOLUTION --->
            <Solution/>
            <!--- SERVICES --->
            <Services/>
            <!--- BENEFICIOS --->
            <Benefits/>
            <!--- TESTIMONIOS --->
            <Testimony/>
            <div class="col-12 col-lg-9 d-flex justify-content-center align-items-center">
                <div class="row justify-content-center" id="portfolio">
                    <!--- PORFOLIO --->
                    <Portfolio/>
                </div>
            </div>
            <!--- PRICING --->
            <Pricing id="pricing"/>
            <!--- ABOUT --->
            <About/>
            <!--- CONTACT --->
            <ContactEnd id="contact"/>
            <!--- TEAM --->
            <TeamMobile/> 
        </div>

      <!--- <div class="row justify-content-center background-3">
          Background decoration
            <div class="col-12 col-lg-10 d-flex justify-content-center align-items-center">
                <div class="row justify-content-center" id="portfolio">


                </div>
            </div>
             Background decoration
        </div> --->
        <Footer/>
         <!--- BUTTON --->
        <a class="whatsapp" href="https://wa.me/+541151807976?text=¡Estoy+interesado!">
            <img src="../../img/general-icons/whatsapp.svg" alt="">
        </a>
    </div>
</template>

<script setup>
import Navbar from "../componets/Navbar.vue"
import About from "../componets/About.vue"
import Services from "../componets/Services.vue"
import Portfolio from "../componets/Portfolio.vue"
import TeamMobile from "../componets/TeamMobile.vue"
import Contact from "../componets/Contact.vue"
import Footer from "../componets/Footer.vue"
import ContactEnd from "@/componets/ContactEnd.vue"
import Pricing from "../componets/Pricing.vue"
import Benefits from "../componets/Benefits.vue"
import Testimony from "../componets/Testimony.vue"
import Problem from "../componets/Problem.vue"
import Solution from "../componets/Solution.vue"
import { useGeneralStore } from "@/stores/general"
import { storeToRefs } from "pinia"
import { ref, provide, onMounted, watch } from 'vue';
import { createI18n, useI18n } from "vue-i18n"
import { useRoute } from "vue-router"

import Swal from 'sweetalert2'

const route = useRoute()

const general = useGeneralStore()
const {locale} = storeToRefs(general)
const {scroll, url} = general

const { t } = useI18n({ useScope: 'global' })

watch(() => route.params.lang, (newParam, oldParam) => {
        if (newParam == 'es' || newParam == 'en') {
            locale.value = newParam
        }
    }, { 
        immediate: true
    }
);

const contact = ref({
  name: '',
  email: '',
  message: ''
})
const phone = ref()
const disabled = ref(false)

const persoMessage = ref()
let message = undefined

const results = ref({
  formatInternational: ""
})

provide('persoMessage', persoMessage)
provide('message', message)
provide('contact', contact)
provide('phone', phone)
provide('disabled', disabled)
provide('results', results)

const updateMessage = () => {
  if(persoMessage.value){
    switch (persoMessage.value) {
      case 1:
        message = t('message.planOne')
        contact.value.message = t('message.planOne')
        break;
      case 2:
        message = t('message.planTwo')
        contact.value.message = t('message.planTwo')
        break;
      case 3:
        message = t('message.planThree')
        contact.value.message = t('message.planThree')
        break;
      case 4:
        message = t('message.planFour')
        contact.value.message = t('message.planFour')
        break;
    }
  }
}

provide('updateMessage', updateMessage)

function sendMail() {
    disabled.value = true
    const name = contact.value.name;
    const email = contact.value.email;
    const phone = results.value.formatInternational;
    if(persoMessage.value){
        switch (persoMessage.value) {
            case 1:
                message = t('message.planOne')
                contact.value.message = t('message.planOne')
                break;
            case 2:
                message = t('message.planTwo')
                contact.value.message = t('message.planTwo')
                break;
            case 3:
                message = t('message.planThree')
                contact.value.message = t('message.planThree')
                break;
            case 4:
                message = t('message.planFour')
                contact.value.message = t('message.planFour')
            break;
        }
    }else{
        message = contact.value.message;
    }
    console.log(message)
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

provide('sendMail', sendMail)
</script>

<style lang="scss" scoped>

</style>