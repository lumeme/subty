<template>
    <div class="col-12 col-md-9 d-flex flex-column justify-content-start align-items-center section contact pb-lg-5" id="pricing">
        <div class="row justify-content-center w-100 mt-5">
            <div class="col-12 d-flex flex-column justify-content-center align-items-start px-0 pb-4">
                <h2>{{ $t('message.pricing') }}</h2>
            </div>
        </div>
        <div class="row justify-content-between w-100 pt-4 pb-3">
          <div class="col-12 col-lg-6 col-xxl-3 d-flex justify-content-center align-items-center container-card pricing px-0 pe-lg-2 mx-0">
              <div class="row justify-content-center h-100 w-100 card-grey">
                  <div class="col-12 d-flex justify-content-center align-items-start px-0">
                      <div class="row justify-content-center w-100">
                        <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                          <div class="d-flex justify-content-start align-items-center w-100">
                            <h3>
                              <img src="" alt="">
                              {{ $t('message.basic') }}</h3>
                          </div>
                          <p>{{ $t('message.basicLenguage') }}</p>
                        </div>
                        <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                          <div class="d-flex justify-content-start align-items-center w-100">
                            <h3>$1</h3>
                            <p>USD/Min.</p>
                          </div>
                          <p>{{ $t('message.basicMonth') }}</p>
                        </div>
                        <div class="col-12 d-flex justify-content-center align-items-center px-0">
                          <button @click="persoMessage = 1; updateMessage(); scroll('home')">
                            {{ $t('message.chooseButton') }}
                          </button>
                        </div>
                        <div class="col-12 d-flex justify-content-center align-items-start px-0 basic-fix">
                          <div class="row justify-content-center align-items-start w-100">
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                  <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                  <p>{{ $t('message.basicTextOne') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                  <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                  <p>{{ $t('message.basicTextTwo') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                  <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                  <p>{{ $t('message.basicTextThree') }}</p>
                              </div>
                            <div class="col-12 d-flex justify-content-start align-items-center info">
                              <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                              <p>{{ $t('message.basicTextFour') }}</p>
                            </div>
                            <div class="col-12 d-flex justify-content-start align-items-center info">
                              <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                              <p>{{ $t('message.basicTextFive') }}</p>
                            </div>
                            <div class="col-12 d-flex justify-content-start align-items-center info">
                              <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                              <p>{{ $t('message.basicTextSix') }}</p>
                            </div>
                            <div class="col-12 d-flex justify-content-start align-items-center info">
                              <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                              <p>{{ $t('message.basicTextSeven') }}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-lg-6 col-xxl-3 d-flex justify-content-center align-items-center container-card pricing px-0 ps-lg-2 px-xxl-2 mx-0">
            <div class="row justify-content-center h-100 w-100 card-grey">
              <div class="col-12 d-flex justify-content-center align-items-start px-0">
                <div class="row justify-content-center w-100">
                  <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                    <div class="d-flex justify-content-start align-items-center w-100">
                      <h3><img src="../../img/about-icons/dialog-white.svg" alt="">{{ $t('message.expansion') }}</h3>
                    </div>
                    <p>{{ $t('message.expansionLenguage') }}</p>
                  </div>
                  <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                    <div class="d-flex justify-content-start align-items-center w-100">
                      <h3>$0.33</h3>
                      <p>USD/Min.</p>
                    </div>
                    <p>{{ $t('message.expansionMonth') }}</p>
                  </div>
                  <div class="col-12 d-flex justify-content-center align-items-center px-0">
                    <button @click="persoMessage = 1; updateMessage(); scroll('home')">
                      {{ $t('message.chooseButton') }}
                    </button>
                  </div>
                  <div class="col-12 d-flex justify-content-center align-items-start px-0">
                    <div class="row justify-content-center w-100">
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.expansionTextOne') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.expansionTextTwo') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.expansionTextThree') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.expansionTextFour') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.expansionTextFive') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.expansionTextSix') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.expansionTextSeven') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.expansionTextEight') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.expansionTextNine') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.expansionTextTen') }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xxl-3 d-flex justify-content-center align-items-center container-card pricing px-0 pe-lg-2 px-xxl-2 mx-0">
            <div class="row justify-content-center h-100 w-100 card-grey">
              <div class="col-12 d-flex justify-content-center align-items-start px-0">
                <div class="row justify-content-center w-100">
                  <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                    <div class="d-flex justify-content-start align-items-center w-100">
                      <h3>
                        <img src="../../img/about-icons/world.svg" alt="">
                        {{ $t('message.global') }}</h3>
                    </div>
                    <p>{{ $t('message.globalLenguage') }}</p>
                  </div>
                  <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                    <div class="d-flex justify-content-start align-items-center w-100">
                      <h3>$0</h3>
                      <p>USD/Min.</p>
                    </div>
                    <p>{{ $t('message.globalMonth') }}</p>
                  </div>
                  <div class="col-12 d-flex justify-content-center align-items-center px-0">
                    <button @click="persoMessage = 1; updateMessage(); scroll('home')">
                      {{ $t('message.chooseButton') }}
                    </button>
                  </div>
                  <div class="col-12 d-flex justify-content-center align-items-start px-0">
                    <div class="row justify-content-center w-100">
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.globalTextOne') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.globalTextTwo') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.globalTextThree') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.globalTextFour') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.globalTextFive') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.globalTextSix') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.globalTextSeven') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.globalTextEight') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.globalTextNine') }}</p>
                      </div>
                      <div class="col-12 d-flex justify-content-start align-items-center info">
                        <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                        <p>{{ $t('message.globalTextTen') }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg d-flex justify-content-center align-items-center container-card pricing px-0 ps-lg-2 mx-0">
              <div class="row justify-content-center h-100 w-100 card-grey">
                  <div class="col-12 d-flex justify-content-center align-items-start px-0">
                      <div class="row justify-content-center w-100">
                          <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                              <div class="d-flex justify-content-start align-items-center w-100">
                                  <h3>
                                    <img src="../../img/about-icons/people.svg" alt="">
                                  Lets talk</h3>
                              </div>
                              <p class="pb-4 mt-1">{{ $t('message.letsTalkProposal') }}</p>
                          </div>
                          <div class="col-12 d-flex justify-content-center align-items-center px-0">
                              <button @click="persoMessage = 4; updateMessage(); scroll('home')">
                                {{ $t('message.chooseButton') }}
                              </button>
                          </div>
                          <div class="col-12 d-flex justify-content-center align-items-center px-0">
                              <div class="row justify-content-center w-100">
                                  <div class="col-12 d-flex justify-content-start align-items-center info">
                                      <p>{{ $t('message.letsTalkText') }}</p>
                                  </div>
                                <div class="col-12 d-flex justify-content-start align-items-center info">

                                  <p>{{ $t('message.letsTalkTextTwo') }}</p>
                                </div>
                              </div>
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