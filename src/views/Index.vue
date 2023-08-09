<template>
    <div class="container-fluid" id="home">
        <div id="preload-images"></div>
        <div class="row justify-content-center" id="top">
            <Navbar/>
          <!--- CONTACT --->
          <Contact id="home"/>
          <!--- PRICING --->
          <Pricing id="pricing"/>
          <div class="col-12 col-lg-9 d-flex justify-content-center align-items-center">
            <div class="row justify-content-center" id="portfolio">
              <!--- PORFOLIO --->
              <Portfolio/>
            </div>
          </div>
          <!--- SERVICES --->
          <Services/>
          <!--- ABOUT --->
          <About/>
          <!--- TEAM --->
          <TeamMobile/>
          <!--- CONTACT --->
          <ContactEnd id="contact"/>
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
        <a class="whatsapp" href="https://wa.me/+542215522274?text=¡Estoy+interesado!">
            <img src="../../img/general-icons/whatsapp.svg" alt="">
        </a>
    </div>
</template>

<script setup>
import Navbar from "../componets/Navbar.vue";
import Title from "../componets/Title.vue";
import About from "../componets/About.vue";
import Services from "../componets/Services.vue";
import Portfolio from "../componets/Portfolio.vue";
import TeamMobile from "../componets/TeamMobile.vue";
import TeamDesk from "../componets/TeamDesk.vue";
import Contact from "../componets/Contact.vue";
import Footer from "../componets/Footer.vue";

import { useGeneralStore } from "@/stores/general";
import { storeToRefs } from "pinia";
import { ref } from 'vue';
import ContactEnd from "@/componets/ContactEnd.vue";
import Pricing from "../componets/Pricing.vue";

const general = useGeneralStore();
const {} = storeToRefs(general);

const {scroll, url} = general

const contact = ref({
    phone: ''
})

//const vite_test = ref(import.meta.env.VITE_TEST)

</script>

<style lang="scss" scoped>

</style>