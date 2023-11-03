<template>
    <div class="row justify-content-center problem mt-5" id="solution">
        <div class="col d-flex justify-content-center align-items-center section padding-lg">
            <div class="row justify-content-center w-100">
                <div class="col d-flex flex-column flex-xl-row justify-content-center align-items-center elmo2">
                    <div class="row justify-content-center w-100 m-100">
                        <div class="col-12 d-flex justify-content-center justify-content-xl-start align-items-center">
                            <h1>{{ $t('message.solution') }}</h1>
                        </div>
                        <div class="col d-flex justify-content-center justify-content-xl-start align-items-center">
                            <h3 style="max-width: 80%;" v-html="$t('message.solutionText')"></h3>
                        </div>
                    </div>
                    <div class="row justify-content-center w-100">
                        <div class="col d-flex justify-content-center justify-content-xl-start align-items-start" ref="observeElement">
                            <div class="mt-5" ref="chartRef" id="chart">
                                <svg id="lineGraph" :width="windowSize <= 480 ? '305' : '610'" height="400">
                                    <g id="graphContent"></g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useI18n } from "vue-i18n";
import { useGeneralStore } from "@/stores/general";
import { storeToRefs } from "pinia";
import { ref, onMounted, onUnmounted, watch } from 'vue';

const general = useGeneralStore();

const { locale } = storeToRefs(general);
const {  } = general

const { t } = useI18n({ useScope: 'global' })

let observeElement = ref(null)
let chartRef = ref(null)
let observer
let windowSize = window.innerWidth

onMounted(() => {
    observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.intersectionRatio >= 0.999) {
                    initGraphAnimation()
                    observer.unobserve(entry.target)
                }
            }
        })
    }, {
        threshold: 0.999
    })

    if (observeElement.value) {
        observer.observe(observeElement.value)
    }

    console.log(windowSize)
})

onUnmounted(() => {
    if (observer && observeElement.value) {
        observer.unobserve(observeElement.value)
    }
})

const initGraphAnimation = () => {
    const points = [
        { x: 0, y: 0 },
        { x: 50, y: 40 },
        { x: 100, y: 12 },
        { x: 150, y: 26 },
        { x: 200, y: 14 },
        { x: 250, y: 44 },
        { x: 300, y: 15 },
        { x: 350, y: 23 },
        { x: 400, y: 110 },
        { x: 450, y: 80 },
        { x: 500, y: 140 },
        { x: 550, y: 120 },
        { x: 600, y: 200 }
    ]
    
    const svg = document.getElementById('lineGraph');
    const graphContent = document.getElementById('graphContent')
    const namespace = 'http://www.w3.org/2000/svg';
    
    let pathString = 'M' + points[0].x + ' ' + (400 - points[0].y * 2);
    let partialPathString = 'M' + points[0].x + ' ' + (400 - points[0].y * 2);

    for (let i = 1; i < points.length; i++) {
        pathString += ' L' + points[i].x + ' ' + (400 - points[i].y * 2);
        if (i < 7) {
            partialPathString += ' L' + points[i].x + ' ' + (400 - points[i].y * 2);
        }
    }

    const path = document.createElementNS(namespace, 'path');
    path.setAttribute('d', pathString);
    path.setAttribute('stroke', '#990000');
    path.setAttribute('stroke-width', '8');
    path.setAttribute('fill', 'none');

    // Añadiendo animación
    path.addEventListener('transitionend', () => {
        circle.classList.add('appear');
        text.classList.add('appear');
    });
    
    graphContent.appendChild(path);

    // Añadiendo un círculo en el octavo punto
    const circle = document.createElementNS(namespace, 'circle');
    circle.setAttribute('cx', points[7].x);
    circle.setAttribute('cy', 400 - points[7].y * 2);
    circle.setAttribute('r', '10');
    circle.setAttribute('fill', '#0000cc');
    circle.style.opacity = '0';
    graphContent.appendChild(circle);

    // Añadiendo texto en diagonal abajo a la derecha del octavo punto
    const text = document.createElementNS(namespace, 'text')
    text.setAttribute('x', points[7].x + 10)
    text.setAttribute('y', 400 - points[7].y * 2 + 18)
    text.textContent = t('message.subtitles')
    text.style.fontFamily = 'Comic Sans MS'
    text.style.fontStyle = 'italic'
    text.style.fontSize = '28px'
    text.setAttribute('fill', '#ABA8AA')
    text.style.opacity = '0'
    graphContent.appendChild(text)

    const partialPath = document.createElementNS(namespace, 'path')
    partialPath.setAttribute('d', partialPathString)
    partialPath.setAttribute('stroke', 'transparent')
    partialPath.setAttribute('stroke-width', '2')
    partialPath.setAttribute('fill', 'none')
    graphContent.appendChild(partialPath)

    let totalLength = path.getTotalLength()
    let partialLength = partialPath.getTotalLength()
    let animationDuration = 2350
    let partialDuration = (partialLength / totalLength) * animationDuration

    const screenWidth = window.innerWidth;

    if (screenWidth <= 480) {
        graphContent.setAttribute('transform', 'scale(0.5)');
        svg.setAttribute('width', '305');
        svg.setAttribute('height', '200');
    }

    setTimeout(() => {
        circle.style.opacity = ''
        text.style.opacity = ''
        circle.classList.add('appear')
        text.classList.add('appear')
    }, partialDuration)
    
    let length = path.getTotalLength()
    path.style.transition = 'none'
    path.style.strokeDasharray = length + ' ' + length
    path.style.strokeDashoffset = length
    svg.getBoundingClientRect()
    path.style.transition = 'stroke-dashoffset 2s ease-in-out'
    path.style.strokeDashoffset = '0'
}

watch(locale, () => {
    const svg = document.getElementById('lineGraph');
    console.log(svg)
    // Borrar el path
    const paths = svg.querySelectorAll('path');
    paths.forEach(path => path.remove());

    // Borrar el círculo
    const circle = svg.querySelector('circle');
    if (circle) {
        circle.remove();
    }

    // Borrar el texto
    const text = svg.querySelector('text');
    if (text) {
        text.remove();
    }
    initGraphAnimation()
})

</script>

<style lang="scss" scoped>
.m-100{
    @media (min-width: 1200px) {
        margin-left: 30px;
    }
}
#lineGraph {
    background-color: #ffffff00;
    border-left: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
}
@keyframes appear {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}
.appear {
    animation: appear 0.5s ease-in-out forwards;
}
</style>