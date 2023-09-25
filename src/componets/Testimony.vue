<template>
    <div class="row justify-content-center testimonials" id="testimony">
        <div class="col-12 d-flex justify-content-center align-items-start align-items-lg-center section padding-lg" >
            <div class="row justify-content-center justify-content-md-between align-items-center elmo w-100">
                <div class="col-10 col-md-3 col-lg-3 flex-column justify-content-center align-items-center bubble mx-0" speech-bubble pbottom aleft style="--bbColor:#DD0000" v-for="(testimony, index) in testimonials" :key="testimony">
                    <div class="row justify-content-center w-100 ps-1 pe-0 mx-0">
                        <div class="col-12 d-flex justify-content-center align-items-center stars">
                            <img src="../../img/testimony-icons/rate-star-empty.png" alt="" class="star me-2" v-for="(rate, id) in testimony.rates">
                        </div>
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <h4>{{ testimony.title }}</h4>
                        </div>
                    </div>
                    <div class="row justify-content-center w-100 ps-0 mx-0">
                        <div class="col-12 d-flex justify-content-end">
                            <p class="py-0 pt-4">{{ testimony.name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useI18n } from "vue-i18n";
import { useGeneralStore } from "@/stores/general";
import { storeToRefs } from "pinia";
import { ref, computed } from 'vue';

const general = useGeneralStore();
const {setServices} = storeToRefs(general);
const {} = general

const { t } = useI18n({ useScope: 'global' })

const testimonials = ref([
    {
        title: computed(() => t('message.naka')),
        rates: 5,
        name: '- Naka, Japatonic Lite'
    },
    {
        title: computed(() => t('message.araya')),
        rates: 5,
        name: '- Cristhoper, Araya Vlogs'
    },
    {
        title: computed(() => t('message.jpgeek')),
        rates: 5,
        name: '- Francisco, JapanGeek'
    }
])

</script>

<style lang="scss" scoped>
[speech-bubble], [speech-bubble] * { box-sizing: border-box }

[speech-bubble]{
    --bbColor: grey;
    --bbArrowSize: 1.5rem;
    --bbBorderRadius: 0.25rem;
    --bbPadding: 1rem;
    background: var(--bbColor);
    border-radius: var(--bbBorderRadius);
    padding: var(--bbPadding);
    position: relative;
}

[speech-bubble]::before{
    content: ''; 
    position: absolute;
    background: var(--bbColor);
}
[speech-bubble]::after{
    content: ''; 
    position: absolute;
    background: var(--bbColor);
}

[speech-bubble][pbottom]{ margin-bottom: var(--bbArrowSize) }
[speech-bubble][ptop]   { margin-top: var(--bbArrowSize); }
[speech-bubble][pleft]  { margin-left: var(--bbArrowSize); }
[speech-bubble][pright] { margin-right: var(--bbArrowSize); }

/* bottom and top  */
[speech-bubble][pbottom]::before,
[speech-bubble][ptop]::before{
    --width: calc(var(--bbArrowSize) / 2 * 3);
    height: var(--bbArrowSize);
    width: var(--width);
}

[speech-bubble][pbottom]::before{
    top: calc(100% - 0px);
}

[speech-bubble][pbottom][aleft]::before {
    left: 1rem;
    clip-path: polygon(25% 0, 100% 0, 0% 100%);
}

[speech-bubble][pbottom][aleft]::after {
    left: 1.3rem;
    clip-path: polygon(15% 0, 60% 0, 0% 95%);
    --width: calc(var(--bbArrowSize) / 2 * 4);
    height: calc(var(--bbArrowSize) - 0.2rem);
    width: var(--width);
    background: var(--bgContact);
    top: calc(100% - 1px);
}
</style>