<template>
    <div class="col-12 col-lg-10 d-flex justify-content-center align-items-start background">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <h1 class="d-flex justify-content-center align-items-center flex-fix">
                    {{ $t('message.vulcano') }} <b> {{ $t('message.blockchain') }} </b>  {{ $t('message.servicesV2') }}
                </h1>
            </div>
            
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                <button class="arrow" @click="scroll('about')"><i class=""></i></button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useGeneralStore } from "@/stores/general";
import { storeToRefs } from "pinia";
import { ref } from 'vue';

const general = useGeneralStore();
const {} = storeToRefs(general);

const {scroll, url} = general
</script>

<style lang="scss" scoped>

</style>