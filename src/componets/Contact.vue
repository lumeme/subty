<template>
    <div class="col-11 col-md-9 d-flex justify-content-center align-items-center section contact contact-fix mt-5 pb-lg-4">
        <div class="row justify-content-center w-100 mt-5">
            <!-- <div class="col-12 d-flex flex-column justify-content-center align-items-start px-0 pb-4">
                <h2>{{ $t('message.contact') }}</h2>
            </div> -->
            <form action="api/send_mail.php" method="post" id="mailForm" class="row justify-content-center justify-content-lg-start  px-0">
                <div class="col-12 col-lg-7 me-lg-5 d-flex flex-column justify-content-center justify-content-lg-start align-items-start px-0 pt-3">
                    <h3 class="title">{{ $t('message.companyOf') }}<br class="d-none d-xxl-flex">{{ $t('message.subtitling') }}</h3>
                    <p class="subtitle">
                      {{ $t('message.expand') }}<br>
                        <div class="tick" data-did-init="setupFlip" ref="tick">
                          <div data-repeat="true" aria-hidden="true">
                            <span data-view="flip" class="flip"></span>
                          </div>
                        </div>
                      {{ $t('message.people') }}
                    </p>
                </div>
                <div class="col-12 col-lg-4 col-xxl-3 d-flex justify-content-center align-items-center form form-fix">
                    <div class="row justify-content-start w-100">
                        <div class="col-12 d-flex flex-column justify-content-center align-items-start px-0">
                            <h3>{{ $t('message.yourName') }}</h3>
                            <input type="text" name="name" id="name" v-model="contact.name">
                        </div>
                        <div class="col-12 d-flex flex-column justify-content-center align-items-start px-0">
                            <h3>{{ $t('message.yourEmail') }}</h3>
                            <input type="email" name="email" id="email" v-model="contact.email">
                        </div>
                        <div class="col-12 d-flex flex-column justify-content-center align-items-start px-0 mb-3">
                            <h3>{{ $t('message.yourPhone') }}</h3>
                            <MazPhoneNumberInput
                                v-model="phone"
                                show-code-on-list
                                color="info"
                                :preferred-countries="['AR', 'FR', 'US', 'GB', 'DE']"
                                :ignored-countries="['AC']"
                                @update="results = $event"
                                :success="results?.isValid"
                                class="w-100"
                                :aria-label="''"
                                :translations="{
                                    countrySelector: {
                                        placeholder: '',
                                        error: '',
                                    },
                                    phoneInput: {
                                        placeholder: '',
                                        example: '',
                                        label: ''
                                    },
                                }"
                                no-example
                                fetch-country
                                no-use-browser-locale
                            />
                            <!--no-use-browser-locale--->
                        </div>
                        <div class="col-12 d-flex flex-column justify-content-center align-items-start px-0">
                            <h3>{{ $t('message.message') }}</h3>
                            <textarea name="message" id="message" cols="30" rows="8" v-model="contact.message"></textarea>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-lg-11 col-xxl-9 d-flex justify-content-end align-items-end">
                    <div class="row justify-content-end w-100">
                        <div class="col-6 col-lg-3 d-flex justify-content-center align-items-center  px-0">
                            <button type="button" value="Send" @click="sendMail()" class="see-more see-more-fix" id="seeMoreServicies" :disabled="disabled">
                                {{ $t('message.sendMessage') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import MazPhoneNumberInput from 'maz-ui/components/MazPhoneNumberInput.mjs'
import { useGeneralStore } from "@/stores/general";
import { storeToRefs } from "pinia";
import { createI18n, useI18n } from "vue-i18n";
import { ref, inject, computed, onMounted, watch, reactive, nextTick, onUnmounted, watchEffect} from 'vue';
import Swal from 'sweetalert2'
import Tick from "@pqina/flip";
import "@pqina/flip/dist/flip.min.css";

const general = useGeneralStore();
const {} = storeToRefs(general);
const {url} = general
const { t } = useI18n({ useScope: 'global' })

const message = inject('message')
const persoMessage = inject('persoMessage')
const contact = inject('contact')
const phone = inject('phone')
const disabled = inject('disabled')
const sendMail = inject('sendMail')
const results = inject('results')
// let button = document.getElementsByClassName('m-select-input__toggle-button')
// setInterval(function(){
    
//     button[0].dispatchEvent(new Event('click'))
// }, 1)
const tick = ref()
const count = ref(8548932456);
let _tick;

onMounted(() => {
  _tick = Tick.DOM.create(tick.value, {
    value: count.value,
  });
  console.log(_tick)
  console.log(count.value)

  Tick.helper.interval(() => {
    count.value++;
    _tick.value = count.value;
  }, 1000);
  console.log(_tick.value)
  console.log(count.value)
});
</script>

<style lang="scss" scoped>

</style>