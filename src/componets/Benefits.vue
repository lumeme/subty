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
                            <!-- <img :src="benefit.image" alt="" style="width: 100%;"> -->
                            <lord-icon 
                                src="https://cdn.lordicon.com/yeallgsa.json"
                                trigger="hover"
                                colors="primary:#dd0000,secondary:#494347"
                                style="width:300px;height:300px"
                                v-if="benefit.image == 1">
                            </lord-icon>
                            <lord-icon
                                src="https://cdn.lordicon.com/kbtmbyzy.json"
                                trigger="hover"
                                colors="primary:#494347,secondary:#dd0000"
                                style="width:300px;height:300px"
                                v-if="benefit.image == 2">
                            </lord-icon>
                            <lord-icon
                                src="https://cdn.lordicon.com/yyecauzv.json"
                                trigger="hover"
                                colors="primary:#494347,secondary:#dd0000"
                                style="width:300px;height:300px"
                                v-if="benefit.image == 3">
                            </lord-icon>
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
        image: '1'
    },
    {
        title: 'VELOCIDAD',
        image: '2'
    },
    {
        title: 'SEGURIDAD Y COMODIDAD',
        image: '3'
    }
])

</script>

<style lang="scss" scoped>

</style>