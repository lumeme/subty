<template>
    <div class="row justify-content-center problem mt-5" id="solution">
        <div class="col d-flex justify-content-center align-items-center section padding-lg">
            <div class="row justify-content-center w-100">
                <div class="col d-flex flex-column flex-xl-row justify-content-center align-items-center elmo2">
                    <div class="row justify-content-center w-100 m-100">
                        <div class="col-12 d-flex justify-content-center justify-content-xl-start align-items-center">
                            <h1>{{ $t('message.ninetyThree') }}</h1>
                        </div>
                        <div class="col d-flex justify-content-center justify-content-xl-start align-items-center">
                            <h3 style="max-width: 80%;">{{ $t('message.ninetyThreeText') }}
                            </h3>
                        </div>
                    </div>
                    <div class="row justify-content-center w-100">
                        <div class="col d-flex justify-content-center justify-content-xl-start align-items-start" ref="observeElement">
                            <div ref="chartRef" id="chart">
                                <apexchart type="line" width="650" :options="chartOptions" :series="series2"></apexchart>
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

let observeElement = ref(null)
let chartRef = ref(null)

let pointAnnotationId = 'uniquePointAnnotation';


let series = [{
    name: "Series A",
    data: [1, 2, 1.2, 1.6, 1.3, 2.2, 1.3, 1.7, 3.5, 3, 4, 3.6, 5],
    opacity: 0
}]
let series2 = [{
    name: "Series A",
    data: []
}]
          
let chartOptions = {
    chart: {
        id: 'solution-chart',
        width: 500,
        type: "line",
        stacked: false,
        selection: {
            enabled: false
        },
        zoom: {
            enabled: false
        },
        toolbar: {
            show: false
        },
        animations: {
            enabled: true,
            speed: 500,
            easing: 'linear',
            animateGradually: {
                enabled: true,
                delay: 500
            },
            dynamicAnimation: {
                enabled: true,
                speed: 500
            }
        },
    },
    legend: {
        show: false
    },
    dataLabels: {
        enabled: false
    },
    colors:['#DD0000', '#GGGGGG'],
    stroke: {
        width: [8]
    },
    yaxis: [
        {
            axisTicks: {
                show: false
            },
            axisBorder: {
                show: true,
                color: "#ABA8AA"
            },
            labels: {
                show: false
            }
        }
    ],
    xaxis: {
        axisTicks: {
            show: false
        },
        axisBorder: {
            show: true,
            color: "#ABA8AA",
            offsetX: 0,
            offsetY: 0
        },
        labels: {
            show: false
        }
    },
    grid: {
        show: false
    },
    tooltip: {
        enabled: false
    }
}

let chart = new ApexCharts(document.querySelector("#chart"), chartOptions)

onMounted(() => {
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.intersectionRatio == 1) {
                    ApexCharts.exec('solution-chart', 'updateOptions', {
                        chart: {
                        animations: {
                            enabled: false
                        }
                        }
                    }, false, false)

                    setTimeout(() => {
                        ApexCharts.exec('solution-chart', 'removeAnnotation', pointAnnotationId)
                        ApexCharts.exec('solution-chart', 'updateOptions', {
                            chart: {
                                animations: {
                                    enabled: true,
                                    speed: 700,
                                    easing: 'linear',
                                    animateGradually: {
                                        enabled: true,
                                        delay: 700
                                    },
                                    dynamicAnimation: {
                                        enabled: true,
                                        speed: 700
                                    }
                                },
                                events: {
                                    animationEnd: function (chartContext, opts) {
                                        ApexCharts.exec('solution-chart', 'addPointAnnotation', {
                                            id: pointAnnotationId,
                                            x: 358,
                                            y: 1.7,
                                            marker: {
                                                fillColor: '#0044ff',
                                                strokeColor: '#0044ff',
                                                size: 10,
                                                shape: "circle"
                                            },
                                            label: {
                                                offsetX: 80,
                                                offsetY: 35,
                                                text: 'Subtitulos',
                                                borderColor: 'transparent',
                                                style: {
                                                background: 'transparent',
                                                color: '#ABA8AA',
                                                fontWeight: 500,
                                                fontFamily: 'Comic Sans MS',
                                                },
                                            }
                                        })
                                    }
                                }
                            },
                            series: series,
                        }, true, true)
                    }, 100)
                    observer.unobserve(entry.target)
                }
            }
        })
    }, {
        threshold: 1.0
    })

    if (observeElement.value) {
        observer.observe(observeElement.value)
    }
})

</script>

<style lang="scss" scoped>
.m-100{
    @media (min-width: 1200px) {
        margin-left: 30px;
    }
}
</style>