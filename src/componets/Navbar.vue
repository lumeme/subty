<template>
    <div class="col-12 d-flex justify-content-center align-items-center">
        <nav class="navbar fixed-top" id="navbar">
            <div class="container-fluid justify-content-center align-items-center">
                <div class="row justify-content-center w-100">
                    <div class="col-12 d-flex justify-content-center align-items-center px-lg-1">
                        <div class="row justify-content-center w-100">
                          <div class="col-12 col-lg-1 d-flex justify-content-center justify-content-lg-start align-items-center px-0">
                            <a class="navbar-brand" href="#">
                              <img src="../../img/nav-icons/logo.png" alt="">
                            </a>
                          </div>
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <ul class="navbar-nav d-flex justify-content-end align-items-center w-100 d-none d-lg-flex">
                                    <li class="nav-item col-lg-4 col-xl-3 d-flex justify-content-center align-items-center">
                                        <button class="nav-link" aria-current="page" @click="scroll('home')">{{ $t('message.home') }}</button>
                                    </li>
                                    <li class="nav-item col-lg-4 col-xl-3 d-flex justify-content-center align-items-center">
                                        <button class="nav-link" aria-current="page" @click="scroll('pricing')">{{ $t('message.pricing') }}</button>
                                    </li>
                                  <li class="nav-item col-lg-4 col-xl-3 d-flex justify-content-center align-items-center">
                                    <button class="nav-link" @click="scroll('portfolio')">{{ $t('message.portfolio') }}</button>
                                  </li>
                                    <li class="nav-item col-lg-4 col-xl-3 d-flex justify-content-center align-items-center">
                                        <button class="nav-link" aria-current="page" @click="scroll('services')">{{ $t('message.services') }}</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-4 d-flex justify-content-center align-items-center d-none d-lg-flex">
                                <ul class="navbar-nav d-flex justify-content-start align-items-center w-100">
                                  <li class="nav-item col-lg-4 col-xl-3 d-flex justify-content-center align-items-center">
                                    <button class="nav-link" aria-current="page" @click="scroll('about')">{{ $t('message.about') }}</button>
                                  </li>
                                    <li class="nav-item col-lg-4 col-xl-3 d-flex justify-content-center align-items-center">
                                        <button class="nav-link" @click="scroll('team')">{{ $t('message.team') }}</button>
                                    </li>
                                    <li class="nav-item col-lg-4 col-xl-3 d-flex justify-content-center align-items-center">
                                        <button class="nav-link" @click="scroll('contact')">{{ $t('message.contact') }}</button>
                                    </li>
                                    <li class="col"></li>
                                    <li class="nav-item col-lg-3 d-flex justify-content-center align-items-center dropdown exception">
                                        <button class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" type="button">
                                            <img src="../../img/nav-icons/language/eeuu.png" alt="" class="flag" v-if="locale == 'en'">  
                                            <img src="../../img/nav-icons/language/spain.png" alt="" class="flag" v-else>
                                            {{ locale }}
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li>
                                                <a class="dropdown-item" href="#" @click="setLang('en')">
                                                    <img src="../../img/nav-icons/language/eeuu.png" alt="" class="flag"> 
                                                    {{ $t('message.en') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#" @click="setLang('es')">
                                                    <img src="../../img/nav-icons/language/spain.png" alt="" class="flag">
                                                    {{ $t('message.es') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                            <img src="../../img/nav-icons/logo.png" alt="">
                        </h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" @click="scroll('home')" data-bs-dismiss="offcanvas">{{ $t('message.home') }}</a>
                            </li>
                            <li class="nav-item col-lg-4 col-xl-3 d-flex justify-content-center align-items-center">
                                <button class="nav-link" aria-current="page" @click="scroll('pricing')">{{ $t('message.pricing') }}</button>
                            </li>
                          <li class="nav-item">
                            <a class="nav-link" @click="scroll('portfolio')" data-bs-dismiss="offcanvas">{{ $t('message.portfolio') }}</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" aria-current="page" @click="scroll('services')" data-bs-dismiss="offcanvas">{{ $t('message.services') }}</a>
                          </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" @click="scroll('about')" data-bs-dismiss="offcanvas">{{ $t('message.about') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" @click="scroll('team')" data-bs-dismiss="offcanvas">{{ $t('message.team') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" @click="scroll('contact')" data-bs-dismiss="offcanvas">{{ $t('message.contact') }}</a>
                            </li>
                            <li class="nav-item col-lg-3 d-flex justify-content-center align-items-center dropdown exception">
                                <button class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" type="button">
                                    <img src="../../img/nav-icons/language/eeuu.png" alt="" class="flag" v-if="locale == 'en'">  
                                    <img src="../../img/nav-icons/language/spain.png" alt="" class="flag" v-else>
                                    {{ locale }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="#" @click="setLang('en')">
                                            <img src="../../img/nav-icons/language/eeuu.png" alt="" class="flag"> 
                                            {{ $t('message.en') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" @click="setLang('es')">
                                            <img src="../../img/nav-icons/language/spain.png" alt="" class="flag">
                                            {{ $t('message.es') }}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>

<script setup>
import { useGeneralStore } from "@/stores/general";
import { storeToRefs } from "pinia";
import { ref } from 'vue';

const general = useGeneralStore();

const {locale} = storeToRefs(general);
const {scroll, url, setLang} = general

</script>

<style lang="scss" scoped>

</style>