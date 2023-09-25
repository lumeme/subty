<template>
    <div class="row justify-content-center" id="benefits">
        <div class="col-12 col-lg-11 d-flex justify-content-center align-items-center section">
            <div class="row justify-content-center justify-content-lg-between w-100">
                <!--  -->
                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center card-grey-container">
                    <div class="row justify-content-center h-100 w-100 card-grey benefits">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <h2>{{ $t('message.investmentReturn') }}</h2>
                        </div>
                        <div class="col-12 d-flex jImage justify-content-center px-0">
                            <!-- <img :src="benefit.image" alt="" style="width: 100%;"> -->
                            <lord-icon 
                                src="https://cdn.lordicon.com/yeallgsa.json"
                                trigger="click"
                                colors="primary:#dd0000,secondary:#494347"
                                style="width:200px;height:200px"
                                ref="iconObserver1">
                            </lord-icon>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center card-grey-container">
                    <div class="row justify-content-center h-100 w-100 card-grey benefits">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <h2>{{ $t('message.speed') }}</h2>
                        </div>
                        <div class="col-12 d-flex jImage justify-content-center px-0">
                            <lord-icon
                                src="https://cdn.lordicon.com/kbtmbyzy.json"
                                trigger="click"
                                colors="primary:#494347,secondary:#dd0000"
                                style="width:200px;height:200px"
                                ref="iconObserver2">
                            </lord-icon>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center card-grey-container">
                    <div class="row justify-content-center h-100 w-100 card-grey benefits">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <h2>{{ $t('message.securityComfy') }}</h2>
                        </div>
                        <div class="col-12 d-flex jImage justify-content-center px-0">
                            <lord-icon
                                src="https://cdn.lordicon.com/yyecauzv.json"
                                trigger="click"
                                colors="primary:#494347,secondary:#dd0000"
                                style="width:200px;height:200px"
                                ref="iconObserver3">
                            </lord-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

let iconObserver1 = ref(null)
let iconObserver2 = ref(null)
let iconObserver3 = ref(null)
let observer1
let observer2
let observer3
let isVisible1 = ref(false)
let isVisible2 = ref(false)
let isVisible3 = ref(false)

onMounted(() => {
    observer1 = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            console.log(entry)
            if (entry.isIntersecting) {
                if (entry.intersectionRatio >= 0.999) {
                    entry.target._triggerInstance.onClick();
                    observer.unobserve(entry.target)
                }
            }
        })
    }, {
        threshold: 0.999
    })
    observer2 = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.intersectionRatio >= 0.999) {
                    entry.target._triggerInstance.onClick();
                    observer.unobserve(entry.target)
                }
            }
        })
    }, {
        threshold: 0.999
    })
    observer3 = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.intersectionRatio >= 0.999) {
                    entry.target._triggerInstance.onClick();
                    observer.unobserve(entry.target)
                }
            }
        })
    }, {
        threshold: 0.999
    })

    if (iconObserver1.value) {
        observer1.observe(iconObserver1.value)
    }
    if (iconObserver2.value) {
        observer2.observe(iconObserver2.value)
    }
    if (iconObserver3.value) {
        observer3.observe(iconObserver3.value)
    }
})

onUnmounted(() => {
    if (observer1 && iconObserver1.value) {
        observer1.unobserve(iconObserver1.value)
    }
    if (observer2 && iconObserver2.value) {
        observer2.unobserve(iconObserver2.value)
    }
    if (observer3 && iconObserver3.value) {
        observer3.unobserve(iconObserver3.value)
    }
})

</script>

<style lang="scss" scoped>

</style>