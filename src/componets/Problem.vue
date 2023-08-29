<template>
    <div class="row justify-content-center problem mt-5" id="problem">
        <div class="col d-flex justify-content-center align-items-center section padding-lg">
            <div class="row justify-content-center w-100">
                <div class="col d-flex flex-column flex-xl-row justify-content-center align-items-center elmo2">
                    <div class="row justify-content-center w-100">
                        <div class="col d-flex justify-content-center align-items-center">
                            <div id="chart">
                                <apexchart type="pie" width="750" :options="chartOptions" :series="series"></apexchart>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center w-100">
                        <div class="col-12 d-flex justify-content-center justify-content-xl-start align-items-center">
                            <h1>El 93% de las personas no puede entenderte.</h1>
                        </div>
                        <div class="col-12 d-flex justify-content-center justify-content-xl-start align-items-center">
                            <h3 style="max-width: 80%;">En el mundo hay cada vez mas personas que no pueden disfrutar
                                de tu contenido debido a la barrera idiomatica que los separa.
                                Millones de personas estan esperando unirse a tu comunidad, 
                                brindales un puente a tu vida con nuestros subtitulos de alta calidad.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useGeneralStore } from "@/stores/general";
import { storeToRefs } from "pinia";
import { ref } from 'vue';

const general = useGeneralStore();
const {setServices} = storeToRefs(general);
const {} = general

const series = [93, 7]
          
const chartOptions = {
    chart: {
        width: 600,
        type: 'pie',
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

</script>

<style lang="scss" scoped>

</style>