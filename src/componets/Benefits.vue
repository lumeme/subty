<template>
    <div class="row justify-content-center" id="benefits">
        <div class="col-12 col-lg-11 d-flex justify-content-center align-items-center section padding-lg">
            <div class="row justify-content-center justify-content-lg-between w-100">
                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center card-grey-container" v-for="(benefit, index) in benefits" :key="benefit">
                    <div class="row justify-content-center h-100 w-100 card-grey benefits">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <h2>{{ benefit.title }}</h2>
                        </div>
                        <div class="col-12 jImage px-0">
                            <img :src="benefit.image" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useGeneralStore } from "@/stores/general";
import { storeToRefs } from "pinia";
import { ref } from 'vue';

const general = useGeneralStore();
const {setServices} = storeToRefs(general);
const {} = general

const benefits = ref([
    {
        title: 'RETORNO DE INVERSIÓN',
        image: '../../img/benefits-icons/1.png'
    },
    {
        title: 'VELOCIDAD',
        image: '../../img/benefits-icons/2.png'
    },
    {
        title: 'SEGURIDAD Y COMODIDAD',
        image: '../../img/benefits-icons/3.png'
    }
])

</script>

<style lang="scss" scoped>

</style>