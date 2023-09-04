<template>
    <div class="row justify-content-center problem mt-5" id="solution">
        <div class="col d-flex justify-content-center align-items-center section padding-lg">
            <div class="row justify-content-center w-100">
                <div class="col d-flex flex-column flex-xl-row justify-content-center align-items-center elmo2">
                    <div class="row justify-content-center w-100">
                        <div class="col-12 d-flex justify-content-center justify-content-xl-start align-items-center">
                            <h1>{{ $t('message.ninetyThree') }}</h1>
                        </div>
                        <div class="col-12 d-flex justify-content-center justify-content-xl-start align-items-center">
                            <h3 style="max-width: 80%;">{{ $t('message.ninetyThreeText') }}
                            </h3>
                            <div>
                                <button style="color: white;" @click="updateChart">Update!</button>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center w-100">
                        <div class="col d-flex justify-content-center align-items-center" ref="observarElemento">
                            <div id="chart">
                                <apexchart type="pie" width="750" :options="chartOptions" :series="series"></apexchart>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

let observarElemento = ref(null)

let series = [93, 7]
let series2 = [50, 50]
          
let chartOptions = {
    series: [93, 7],
    chart: {
        id: 'solution-chart',
        width: 600,
        type: 'pie'
    },
    colors:['#DD0000', '#GGGGGG'],
    labels: ['Otras personas', 'Tu público'],
    plotOptions: {
        pie: {
            expandOnClick: false,
            startAngle: 170,
            endAngle: -190,
        }
    },
    legend: {
        show: false
    },
    dataLabels: {
        enabled: true,
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
    tooltip: {
        enabled: false
  }
}

let chart = new ApexCharts(document.querySelector("#chart"), chartOptions);
console.log(chart)

onMounted(() => {
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
        if (entry.isIntersecting) {
            console.log('El elemento está en la vista')
            ApexCharts.exec('solution-chart', 'updateOptions', [null, false, true, false])
            // observer.unobserve(entry.target)
        }
        })
    })

    if (observarElemento.value) {
        console.log(observarElemento.value)
        observer.observe(observarElemento.value)
    }
})

const updateChart = () => {
    ApexCharts.exec('solution-chart', 'updateOptions', [null, false, true, false])
}

</script>

<style lang="scss" scoped>

</style>