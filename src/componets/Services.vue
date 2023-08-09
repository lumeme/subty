<template>
    <div class="row justify-content-center" id="services">
        <div class="col-12 col-lg-9 d-flex justify-content-center align-items-start align-items-lg-center section services padding-lg" >
            <div class="row justify-content-center justify-content-lg-between w-100">
                <div class="col-12 d-flex flex-column justify-content-center align-items-start px-0 pb-4">
                    <p class="yellow">{{ $t('message.servicesOffer') }}</p>
                    <h2>{{ $t('message.services') }}</h2>
                </div>
                <div class="col-12 col-md-6 col-lg-4  d-flex justify-content-center align-items-start card-grey-container" v-for="(servicies, id) in setServices" :class="id >=  4 ? 'd-none d-lg-flex hidden-div' : ''" :key="servicies">
                    <div class="row justify-content-center h-100 w-100 card-grey">
                        <div class="col-12 d-flex justify-content-center align-items-center info">
                            <img :src="servicies.image" alt="">
                            <p>{{ servicies.title }}</p>
                        </div>
                        <div class="col-12 info-hover">
                            <p>{{ servicies.description}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-start  px-0 d-lg-none">
                    <div class="row justify-content-center w-100">
                        <button class="col-4  d-flex justify-content-center align-items-center see-more" id="seeMoreServices" type="button" @click="hiddenServices">
                            <template v-if="textServices">
                                {{ $t('message.seeMore') }}
                            </template>
                            <template v-else>
                                {{ $t('message.seeLess') }}
                            </template>
                        </button>
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

const textServices = ref(true)

//console.log(setServices.value)
const hiddenServices = () => {
    var boxes = document.getElementsByClassName("hidden-div");
    for (var i = 0; i < boxes.length; i++) {
        var box = boxes[i];
        if (box.classList.contains("d-none")) {
            box.classList.remove('d-none')
            textServices.value = false
        } else {
            box.classList.add("d-none");
            textServices.value = true
        }
    }
}
</script>

<style lang="scss" scoped>

</style>