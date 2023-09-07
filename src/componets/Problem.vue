<template>
    <div class="row justify-content-center problem mt-5" id="problem" ref="chartContainer">
        <div class="col d-flex justify-content-center align-items-center section padding-lg">
            <div class="row justify-content-center w-100">
                <div class="col d-flex flex-column flex-xl-row justify-content-center align-items-center elmo2">
                    <div class="row justify-content-center w-100">
                        <div class="col d-flex justify-content-center align-items-center">
                            <div class="chart" id="chart">
                                <apexchart v-if="isVisible" type="pie" width="650" :options="chartOptions" :series="series"></apexchart>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center w-100">
                        <div class="col-12 d-flex justify-content-center justify-content-xl-start align-items-center">
                            <h1>{{ $t('message.ninetyThree') }}</h1>
                        </div>
                        <div class="col-12 d-flex justify-content-center justify-content-xl-start align-items-center">
                            <h3 style="max-width: 80%;">{{ $t('message.ninetyThreeText') }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted, watch } from 'vue';
import { useGeneralStore } from "@/stores/general";
import { storeToRefs } from "pinia";

const general = useGeneralStore();

const { locale } = storeToRefs(general);
const {  } = general

let isVisible = ref(false)
let chartContainer = ref(null)
let observer

const series = [93, 7]
const seriesEn = [80, 20]
          
const chartOptions = {
    chart: {
        id: 'problem-chart',
        width: 600,
        type: 'pie',
    },
    colors:['#990000', '#GGGGGG'],
    labels: ['Otras personas', 'Tu público'],
    stroke: {
        show: false
    },
    plotOptions: {
        pie: {
            expandOnClick: false,
            startAngle: 170,
            endAngle: -190,
            dataLabels: {
                offset: -50
            }
        }
    },
    legend: {
        show: false
    },
    dataLabels: {
        formatter: function(val) {
            return Math.floor(val)+"%"
        },
        enabled: true,
        offsetY: 100,
        textAnchor: 'center',
        style: {
            fontFamily: 'Muli',
            fontWeight: 'bold',
        }
    },
    responsive: [{
        breakpoint: 991,
        options: {
            chart: {
                type: 'pie',
                width: 400
            }
        }
    }],
    states: {
        normal: {
            filter: {
                type: 'none'
            }
        },
        hover: {
            filter: {
                type: 'none'
            }
        },
        active: {
            filter: {
                type: 'none'
            }
        },
    },
    tooltip: {
        enabled: false
  }
}

watch(locale, () => {
    let newSeries = null
    if(locale.value == 'en'){
        newSeries = [80, 20]
    } else{
        newSeries = [93, 7]
    }
    ApexCharts.exec('problem-chart', 'updateOptions', {
        series: newSeries
    }, true, true, true)
})

onMounted(() => {
    observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
        if (entry.isIntersecting) {
            console.log(entry.intersectionRatio)
            if (entry.intersectionRatio >= 0.7) {
                isVisible.value = true
                console.log(isVisible.value)
                observer.unobserve(entry.target)
            }
        }
        })
    }, {
        threshold: 0.7
    })

    if (chartContainer.value) {
        observer.observe(chartContainer.value)
    }
})

onUnmounted(() => {
    if (observer && chartContainer.value) {
        observer.unobserve(chartContainer.value)
    }
})

</script>

<style lang="scss" scoped>

.chart{
    width: 650px;
    height: 521px;
}

</style>