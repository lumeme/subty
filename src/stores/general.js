import { defineStore } from 'pinia'
import { ref } from 'vue'
// import { createApp } from 'vue'
// import App from '@/App.vue'
import axios from "axios"
import { createI18n, useI18n } from "vue-i18n";
import en from '../languages/en.json'
import es from '../languages/es.json'


export const useGeneralStore = defineStore('general', () => {

    const url = import.meta.env.VITE_URL
    const urlPortfolio = '/api/portfolio.php'
    const urlServices = '/api/services.php'

    const {locale} = useI18n({ useScope: 'global' })

    const setServices = ref({})
    const setPortfolios = ref({})
    const filterResult = ref()

    setInterval(function() {
        const navbar = document.getElementById('navbar')
            //console.log('hola')
            window.onscroll = function() {
                let y = window.scrollY;
                //console.log(y);
                if( y >= 1 ){
                    navbar.classList.add('background-color')
                }else{
                    navbar.classList.remove('background-color')
                }
            }
    }, 1000);

    const scroll = (id) => {
        const section = document.getElementById(id);
            if(window.innerWidth >= 992) {
                if (section) {
                    const offsetTop = section.getBoundingClientRect().top + window.scrollY;
                    window.scrollTo({
                        top: offsetTop - 100,
                        behavior: 'smooth'
                    })
                }
            } else {
                if (section) {
                    const offsetTop = section.getBoundingClientRect().top + window.scrollY;
                    window.scrollTo({
                        top: offsetTop - 90,
                        behavior: 'smooth'
                    })
                }
        }
    }

    const setLang = (lang) => {
        locale.value = lang
        fetchServices(lang)
    }

    const fetchPortfolios = (async() => {
        try {
            await axios.get(url+urlPortfolio).then((result) => {
                //console.log(result)
                setPortfolios.value = result.data
                filterResult.value = result.data
            })
        } catch (error) {
            console.log(error)
        }
    })
    fetchPortfolios()

    const fetchServices = (async(lang) => {
        try {
            await axios.get(url+urlServices, {
                params: {
                    lang: lang
                }
            }).then((result) => {
                //console.log(result)
                setServices.value = result.data
            })
        } catch (error) {
            console.log(error)
        }
    })
    fetchServices()

  return { scroll, url, setPortfolios, filterResult, setServices, setLang, locale}
})

export const i18n = new createI18n({
    locale: 'en',
    legacy: false,
    messages: {
        en:{
          message: en
          
        },
        es:{
          message: es
        },
    },
})