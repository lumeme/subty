import { defineStore } from 'pinia'
import { ref } from 'vue'
// import { createApp } from 'vue'
// import App from '@/App.vue'
import axios from "axios"
import { createI18n, useI18n } from "vue-i18n";
import en from '../languages/en.json'
import es from '../languages/es.json'
import { useRouter } from 'vue-router';

export const useGeneralStore = defineStore('general', () => {
    const url = import.meta.env.VITE_URL
    const urlPortfolio = '/api/portfolio.php'
    const urlServices = '/api/services.php'

    const router = useRouter()

    const {locale} = useI18n({ useScope: 'global' })

    const setServices = ref({})
    const setPortfolios = ref({})
    const filterResult = ref()

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
        router.push({ name: 'index', params: { lang: lang } })
        fetchServices(lang)
    }

    const fetchPortfolios = (async() => {
        try {
            await axios.get(url+urlPortfolio).then((result) => {
                console.log(result)
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
    fetchServices(locale.value)

    
    

  return { scroll, url, setPortfolios, filterResult, setServices, setLang, locale}
})

export const i18n = new createI18n({
    locale: 'es',
    legacy: false,
    globalInjection: true,
    messages: {
        en:{
          message: en
          
        },
        es:{
          message: es
        },
    },
})
