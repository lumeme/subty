<template>
    <div class="col-12 col-lg-9 d-flex justify-content-center align-items-start section about padding-lg" id="about">
        <div class="row justify-content-center">
            <div class="col-12 d-flex flex-column justify-content-center align-items-start">
                <h2>{{ $t('message.about') }}</h2>
            </div>
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center justify-content-lg-start align-items-start ">
                <p>
                    {{ $t('message.aboutSectionOne') }} 
                </p>
                <p class="pt-0">
                    {{ $t('message.aboutSectionTwo') }}<br>
                </p>
                <p class="no-padding grey">
                    {{ $t('message.aboutSectionThree') }}
                </p>
                <p class="grey">
                    {{ $t('message.aboutSectionFour') }}
                </p>
                <p class="grey">
                    {{ $t('message.aboutSectionFive') }}
                </p>
                <p class="grey">
                    {{ $t('message.aboutSectionSix') }}
                </p>
                <p class="grey">
                    {{ $t('message.aboutSectionSeven') }}
                </p>
                <p class="grey">
                    {{ $t('message.aboutSectionEight') }}
                </p>
                
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-end  align-items-center" >
                <Astronaut/>
            </div>
        </div>
    </div>
</template>

<script setup>
import Astronaut from './Astronaut.vue';


</script>

<style lang="scss" scoped>

</style>