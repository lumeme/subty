import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

import 'maz-ui/css/main.css'
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap/dist/js/bootstrap.bundle.min.js"
import './assets/css/styles.css'

import VueTelInput from 'vue3-tel-input'
import 'vue3-tel-input/dist/vue3-tel-input.css'
import { i18n } from '../src/stores/general'

import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'

import 'animate.css';


const app = createApp(App)

const VueTelInputOptions = {
    inputOptions:{
        showDialCode: false
    },
    dropdownOptions:{
        showDialCodeInSelection: true,
        showSearchBox: true
    },
    preferredCountries:['ar','fr']
}


app.use(createPinia())
app.use(VueTelInput, VueTelInputOptions)
app.use(i18n)
app.use(router)

app.mount('#app')
