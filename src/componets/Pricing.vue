<template>
    <div class="col-12 col-md-9 d-flex flex-column justify-content-start align-items-center section contact pb-lg-5">
        <div class="row justify-content-center w-100 mt-5">
            <div class="col-12 d-flex flex-column justify-content-center align-items-start px-0 pb-4">
                <p class="yellow">{{ $t('message.sendUSAMessage') }}</p>
                <h2>{{ $t('message.pricing') }}</h2>
            </div>
        </div>
        <div class="row justify-content-between w-100 pt-4 pb-3">
            <div class="col-12 col-lg d-flex justify-content-center align-items-center container-card pricing px-0 pe-lg-2">
                <div class="row justify-content-center h-100 w-100 card-grey">
                    <div class="col-12 d-flex justify-content-center align-items-center px-0">
                        <div class="row justify-content-center w-100">
                            <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                                <div class="d-flex justify-content-start align-items-center w-100">
                                    <h3>Basic</h3>
                                </div>
                                <p>100 minutes of video, 1 language</p>
                            </div>
                            <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                                <div class="d-flex justify-content-start align-items-center w-100">
                                    <h3>$1</h3>
                                    <p>USD/min. Sub</p>
                                </div>
                                <p>$100 USD/month</p>
                            </div>
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <button @click="persoMessage = 1; updateMessage(); scroll('home')">
                                    Contact
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center px-0">
                        <div class="row justify-content-center w-100">
                            <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>$100 USD/month</p>
                            </div>
                            <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>$100 USD/month</p>
                            </div>
                            <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>$100 USD/month</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg mx-lg-4 d-flex justify-content-center align-items-center container-card pricing px-0 ">
                <div class="row justify-content-center h-100 w-100 card-grey">
                    <div class="col-12 d-flex justify-content-center align-items-center px-0">
                        <div class="row justify-content-center w-100">
                            <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                                <div class="d-flex justify-content-start align-items-center w-100">
                                    <h3>Basic</h3>
                                </div>
                                <p>100 minutes of video, 1 language</p>
                            </div>
                            <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                                <div class="d-flex justify-content-start align-items-center w-100">
                                    <h3>$1</h3>
                                    <p>USD/min. Sub</p>
                                </div>
                                <p>$100 USD/month</p>
                            </div>
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <button @click="persoMessage = 2; updateMessage(); scroll('home')">
                                    Contact
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center px-0">
                        <div class="row justify-content-center w-100">
                            <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>$100 USD/month</p>
                            </div>
                            <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>$100 USD/month</p>
                            </div>
                            <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>$100 USD/month</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg d-flex justify-content-center align-items-center container-card pricing px-0 ps-lg-2">
                <div class="row justify-content-center h-100 w-100 card-grey">
                    <div class="col-12 d-flex justify-content-center align-items-center px-0">
                        <div class="row justify-content-center w-100">
                            <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                                <div class="d-flex justify-content-start align-items-center w-100">
                                    <h3>Basic</h3>
                                </div>
                                <p>100 minutes of video, 1 language</p>
                            </div>
                            <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                                <div class="d-flex justify-content-start align-items-center w-100">
                                    <h3>$1</h3>
                                    <p>USD/min. Sub</p>
                                </div>
                                <p>$100 USD/month</p>
                            </div>
                            <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <button @click="persoMessage = 3; updateMessage(); scroll('home')">
                                    Contact
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center px-0">
                        <div class="row justify-content-center w-100">
                            <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>$100 USD/month</p>
                            </div>
                            <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>$100 USD/month</p>
                            </div>
                            <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>$100 USD/month</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import MazPhoneNumberInput from 'maz-ui/components/MazPhoneNumberInput.mjs'
import { useGeneralStore } from "@/stores/general";
import { storeToRefs } from "pinia";
import { createI18n, useI18n } from "vue-i18n";
import { ref, inject } from 'vue';
import Swal from 'sweetalert2'


const general = useGeneralStore();
const {} = storeToRefs(general);
const {ur, scroll} = general
const { t } = useI18n({ useScope: 'global' })

const message = inject('message')
const persoMessage = inject('persoMessage')
const updateMessage = inject('updateMessage')
</script>

<style lang="scss" scoped>

</style>