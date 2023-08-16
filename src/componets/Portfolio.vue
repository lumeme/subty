<template>
    <div class="col-12 d-flex justify-content-center align-items-start section portfolio background-2 padding-top px-0">
        <div class="row justify-content-start w-100">
            <div class="col-12 d-flex flex-column justify-content-center justify-content-lg-start align-items-start pb-4">
                <h2>{{ $t('message.portfolio') }}</h2>
            </div>
            <!--- FILTER
            <div class="col-12 col-lg-9 d-flex flex-column justify-content-center align-items-center px-0 pb-4">
                <div class="row justify-content-center w-100">
                    <div class="col-12 d-flex scroll">
                        <div class="row justify-content-start row_scroll ps-lg-3">
                            <div class="col-12 px-lg-0 d-flex justify-content-center align-items-center ps-2 ps-lg-0">
                                <div class="row justify-content-start justify-content-lg-end">
                                    <button class="col-1 d-flex justify-content-center align-items-center" @click="setResultPorfolio('All')">
                                        <div class="all">{{ $t('message.all') }}</div>
                                    </button>
                                    <button class="col d-flex justify-content-center align-items-center card-scroll" @click="setResultPorfolio('Mint Web')">
                                        <i class="mint"></i>
                                        <p>{{ $t('message.mintWeb') }}</p>
                                    </button>
                                    <button class="col d-flex justify-content-center align-items-center card-scroll" @click="setResultPorfolio('NFT Collection')">
                                        <i class="nft"></i>
                                        <p>{{ $t('message.nftCollection') }}</p>
                                    </button>
                                    <button class="col d-flex justify-content-center align-items-center card-scroll d-none d-sm-flex" @click="setResultPorfolio('Staking')">
                                        <i class="staking"></i>
                                        <p>{{ $t('message.staking') }}</p>
                                    </button>
                                    <button class="col d-flex justify-content-center align-items-center card-scroll d-none d-sm-flex" @click="setResultPorfolio('Marketplace')">
                                        <i class="marketplace"></i>
                                        <p>{{ $t('message.marketplace') }}</p>
                                    </button>
                                    <button class="col d-flex justify-content-center align-items-center card-scroll d-none d-sm-flex" @click="setResultPorfolio('Front End')">
                                        <i class="front"></i>
                                        <p>{{ $t('message.front') }}</p>
                                    </button>
                                    <button class="col d-flex justify-content-center align-items-center card-scroll d-none d-sm-flex" @click="setResultPorfolio('')">
                                        <i class="token"></i>
                                        <p>{{ $t('message.tokenization') }}</p>
                                    </button>
                                    <button class="col d-flex justify-content-center align-items-center card-scroll d-none d-sm-flex me-0 me-lg-3" @click="setResultPorfolio('')">
                                        <i class="dapps"></i>
                                        <p>{{ $t('message.dapps') }}</p>
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 d-flex d-sm-none ps-4 ps-lg-0">
                                <div class="row">
                                    <button class="col d-flex justify-content-center align-items-center card-scroll" @click="setResultPorfolio('Staking')">
                                        <i class="staking"></i>
                                        <p>{{ $t('message.staking') }}</p>
                                    </button>
                                    <button class="col d-flex justify-content-center align-items-center card-scroll" @click="setResultPorfolio('Marketplace')">
                                        <i class="marketplace"></i>
                                        <p>{{ $t('message.marketplace') }}</p>
                                    </button>
                                    <button class="col d-flex justify-content-center align-items-center card-scroll me-0" @click="setResultPorfolio('Front End')">
                                        <i class="front"></i>
                                        <p>{{ $t('message.front') }}</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--->
            <div class="col-12 col-sm-6 col-xl-4 d-flex justify-content-center align-items-center cards-portfolio pop-up" v-for="(portfolio, id) in filterResult" :class="id >=  4 ? 'd-none d-lg-flex hidden-port' : ''" :key="portfolio">
                <div class="row justify-content-center h-100 w-100">
                    <div class="col-12 d-flex flex-column justify-content-center align-items-center px-0 pb-4 pb-lg-0">
                        <div class="row justify-content-center h-100 w-100">
                            <div class="col-12 d-flex justify-content-center align-items-center info px-0">
                                <a :href="portfolio.link" class="w-100" target="_blank">
                                    <img :src="portfolio.image" alt="" class="img">
                                </a>
                                <div class="info-hover w-100">
                                    <div class="row justify-content-center align-items-end h-100">
                                        <div class="col-12 d-flex flex-column justify-content-center align-items-start px-0">
                                            <h3>{{ portfolio.name }}</h3>
                                            <div class="d-flex justify-content-start align-items-center w-100">
                                                <p v-for="(category, id) in portfolio.categories" class="d-flex">
                                                    {{ category }} 
                                                    <span class="mx-1" :class="id >= portfolio.categories.length - 1 ? 'd-none' : 'd-flex'">-</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="padding-fix-bottom" v-show="filterResult == ''">
                
            </div>
            <div class="col-12 d-flex justify-content-center align-items-start  px-0 d-lg-none" v-if="button">
                <div class="row justify-content-center w-100">
                    <button class="col-4  d-flex justify-content-center align-items-center see-more" id="seeMore" type="button" @click="hiddenPortfolio">
                        <template v-if="textPortfolio">
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
</template>

<script setup>
import { ref, nextTick } from 'vue';
import { useGeneralStore } from "@/stores/general";
import { storeToRefs } from "pinia";

const general = useGeneralStore();
const {setPortfolios, filterResult} = storeToRefs(general);

const {scroll, url} = general

const textPortfolio = ref(true)

const button = ref(true)

const hiddenPortfolio = () => {
    var boxes = document.getElementsByClassName("hidden-port");
    for (var i = 0; i < boxes.length; i++) {
        var box = boxes[i];
        if (box.classList.contains("d-none")) {
            box.classList.remove('d-none')
            textPortfolio.value = false
        } else {
            box.classList.add("d-none");
            textPortfolio.value = true
        }
    }
}

const setResultPorfolio = (x) => {
    filterResult.value = new Array
    console.log(filterResult.value)
    nextTick(() => {
        if(x == 'All'){
            button.value = true
            filterResult.value = setPortfolios.value
            //console.log(filterResult.value)
        }else{
            button.value = false
            let result = setPortfolios.value
            //console.log(result)
            filterResult.value = result.filter(result => {
                return result.categories.some(cat => x.includes(cat));
            });
            //console.log(filterResult.value) 
        }
    })
}
</script>

<style lang="scss" scoped>
@keyframes pop-up {
  0% {
    transform: scale(0);
  }
  50% {
    transform: scale(1);
  }
  100% {
    transform: scale(1);
  }
}

.pop-up {
  animation: pop-up 0.4s ease-in-out;
  opacity: 1;
}
</style>