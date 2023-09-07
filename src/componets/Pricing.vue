<template>
    <div class="col-12 col-md-9 d-flex flex-column justify-content-start align-items-center section contact pb-lg-5" id="pricing">
        <div class="row justify-content-center w-100 mt-5">
            <div class="col-12 d-flex flex-column justify-content-center align-items-start px-0 pb-4">
                <h2>{{ $t('message.pricing') }}</h2>
            </div>
        </div>
        <div class="row justify-content-center w-100 pt-4 pb-3">
          <!--- BUTTONS --->
          <ul class="nav nav-tabs d-flex  justify-content-center align-items-center" id="myTab" role="tablist">
            <div class="div_tabs">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">{{ $t('message.tabVideo') }}</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">{{ $t('message.tabMonth') }}</button>
              </li>
            </div>
          </ul>
          <!--- END BUTTONS --->
          <!--- TABS --->
          <div class="tab-content" id="myTabContent">
            <!--- TAB 1 --->
            <div class="tab-pane fade active show px-0" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="row">
                  <div class="col-12 col-lg-6 col-xxl-3 d-flex justify-content-center align-items-center container-card pricing px-0 pe-lg-2 mx-0">
                    <div class="row justify-content-center h-100 w-100 card-grey">
                      <div class="col-12 d-flex justify-content-center align-items-start px-0">
                        <div class="row justify-content-center w-100">
                          <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                            <div class="row justify-content-center w-100">
                              <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                                <div class="d-flex justify-content-start align-items-center w-100">
                                  <h3>
                                    <img src="../../img/about-icons/dialog-white-one.png" alt="">
                                    {{ $t('message.basic') }}</h3>
                                </div>
                                <p>{{ $t('message.basicLenguage') }}</p>
                              </div>
                              <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                                <div class="d-flex justify-content-start align-items-center w-100 mb-1">
                                  <h3>$1<p>USD/{{ $t('message.minuteVideo') }}</p></h3>
                                </div>
                                <p>{{ $t('message.basicMinuteSubtitle') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-center align-items-center px-0">
                                <button @click="persoMessage = 1; updateMessage(); scroll('home')">
                                  {{ $t('message.chooseButton') }}
                                </button>
                              </div>
                            </div>
                          </div>
                          <!-- <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                            <div class="d-flex justify-content-start align-items-center w-100">
                              <h3>
                                <img src="../../img/about-icons/dialog-white-one.png" alt="">
                                {{ $t('message.basic') }}</h3>
                            </div>
                            <p>{{ $t('message.basicLenguage') }}</p>
                          </div>
                          <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                            <div class="d-flex justify-content-start align-items-center w-100">
                              <h3>$1<p>USD/{{ $t('message.minuteVideo') }}</p></h3>
                            </div>
                            <p>{{ $t('message.basicMinuteSubtitle') }}</p>
                          </div>
                          <div class="col-12 d-flex justify-content-center align-items-center px-0">
                            <button @click="persoMessage = 1; updateMessage(); scroll('home')">
                              {{ $t('message.chooseButton') }}
                            </button>
                          </div> -->
                          <div class="col-12 d-flex justify-content-center align-items-start px-0 basic-fix">
                            <div class="row justify-content-center align-items-start w-100">
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>{{ $t('message.basicTextSix') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>{{ $t('message.basicTextFive') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>{{ $t('message.basicTextThree') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>{{ $t('message.basicVideoOpcional') }}</p>
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
                              <h3>$1.35 <p>USD/{{ $t('message.minuteVideo') }}</p></h3>
                            </div>
                            <p>{{ $t('message.expansionMinuteSubtitle') }}</p>
                          </div>
                          <div class="col-12 d-flex justify-content-center align-items-center px-0">
                            <button @click="persoMessage = 2; updateMessage(); scroll('home')">
                              {{ $t('message.chooseButton') }}
                            </button>
                          </div>
                          <div class="col-12 d-flex justify-content-center align-items-start px-0">
                            <div class="row justify-content-center w-100">
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>{{ $t('message.expansionTextFive') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>{{ $t('message.expansionTextThree') }}</p>
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
                              <h3>$1.50<p>USD/{{ $t('message.minuteVideo') }}</p></h3>
                            </div>
                            <p>{{ $t('message.globalMinuteSubtitle') }}</p>
                          </div>
                          <div class="col-12 d-flex justify-content-center align-items-center px-0">
                            <button @click="persoMessage = 3; updateMessage(); scroll('home')">
                              {{ $t('message.chooseButton') }}
                            </button>
                          </div>
                          <div class="col-12 d-flex justify-content-center align-items-start px-0">
                            <div class="row justify-content-center w-100">
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>{{ $t('message.globalTextEight') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>{{ $t('message.globalTextThree') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/check.svg" alt="" class="check">
                                <p>{{ $t('message.globalTextSix') }}</p>
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
                            <p class="py-4 mt-5 pt-lg-5 mt-lg-1">{{ $t('message.letsTalkProposal') }}</p>
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
            <!--- TAB 2 --->
              <div class="tab-pane fade px-0" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="row">
                  <div class="col-12 col-lg-6 col-xxl-3 d-flex justify-content-center align-items-center container-card pricing px-0 pe-lg-2 mx-0">
                    <div class="row justify-content-center h-100 w-100 card-grey">
                      <div class="col-12 d-flex justify-content-center align-items-start px-0">
                        <div class="row justify-content-center w-100">
                          <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                            <div class="d-flex justify-content-start align-items-center w-100">
                              <h3>
                                <img src="../../img/about-icons/dialog-white-one.png" alt="">
                                {{ $t('message.basic') }}</h3>
                            </div>
                            <p>{{ $t('message.basicLenguage') }}</p>
                          </div>
                          <div class="col-12 d-flex flex-column justify-content-center align-items-start info">
                            <div class="d-flex justify-content-start align-items-center w-100">
                              <h3>$150<p>USD/{{ $t('message.month') }}</p></h3>
                            </div>
                            <p><span>$1800</span>{{ $t('message.basicYear') }}</p>
                          </div>
                          <div class="col-12 d-flex justify-content-center align-items-center px-0">
                            <button @click="persoMessage = 1; updateMessage(); scroll('home')">
                              {{ $t('message.chooseButton') }}
                            </button>
                          </div>
                          <div class="col-12 d-flex justify-content-center align-items-start px-0 basic-fix">
                            <div class="row justify-content-center align-items-start w-100">
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/infinity.svg" alt="" class="check">
                                <p>{{ $t('message.basicTextOne') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/infinity.svg" alt="" class="check">
                                <p>{{ $t('message.basicTextTwo') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/infinity.svg" alt="" class="check">
                                <p>{{ $t('message.basicTextThree') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/infinity.svg" alt="" class="check">
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
                              <h3>$200<p>USD/{{ $t('message.month') }}</p></h3>
                            </div>
                            <p>{{ $t('message.expansionYear') }}</p>
                          </div>
                          <div class="col-12 d-flex justify-content-center align-items-center px-0">
                            <button @click="persoMessage = 2; updateMessage(); scroll('home')">
                              {{ $t('message.chooseButton') }}
                            </button>
                          </div>
                          <div class="col-12 d-flex justify-content-center align-items-start px-0">
                            <div class="row justify-content-center w-100">
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/infinity.svg" alt="" class="check">
                                <p>{{ $t('message.expansionTextOne') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/infinity.svg" alt="" class="check">
                                <p>{{ $t('message.expansionTextTwo') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/infinity.svg" alt="" class="check">
                                <p>{{ $t('message.expansionTextThree') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/infinity.svg" alt="" class="check">
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
                              <h3>$250<p>USD/{{ $t('message.month') }}</p></h3>
                            </div>
                            <p>{{ $t('message.globalYear') }}</p>
                          </div>
                          <div class="col-12 d-flex justify-content-center align-items-center px-0">
                            <button @click="persoMessage = 3; updateMessage(); scroll('home')">
                              {{ $t('message.chooseButton') }}
                            </button>
                          </div>
                          <div class="col-12 d-flex justify-content-center align-items-start px-0">
                            <div class="row justify-content-center w-100">
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/infinity.svg" alt="" class="check">
                                <p>{{ $t('message.globalTextOne') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/infinity.svg" alt="" class="check">
                                <p>{{ $t('message.globalTextTwo') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/infinity.svg" alt="" class="check">
                                <p>{{ $t('message.globalTextThree') }}</p>
                              </div>
                              <div class="col-12 d-flex justify-content-start align-items-center info">
                                <img src="../../img/pricing-icons/infinity.svg" alt="" class="check">
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
                            <p class="py-4 mt-5 pt-lg-5 mt-lg-1">{{ $t('message.letsTalkProposal') }}</p>
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
          </div>
          <!--- END TABS --->
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
.nav-tabs{
  border: 0;
  margin-bottom: 10px;
  .nav-link{
    background-color: transparent;
    border: 0;
    border-radius: 10px;
    padding: 10px;
    color: var(--white);
    margin-bottom: 0;
    min-width: 100px;
    &:focus{
      outline: 0;
    }
  }
  .nav-link.active{
    background-color: var(--yellow);
    color: var(--white);
    border: 0;
    font-weight: 600;
    transition: background-color 1s;
  }
}
.div_tabs{
  background-color: var(--bgSelected);
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 10px;
}
</style>