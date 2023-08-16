<template>
    <div class="position-relative w-100 d-flex justify-content-center align-items-center container">
      <!-- <img src="../../img/about-icons/dialog-red.svg" alt="" class="element elementA"> -->
      <img src="../../img/about-icons/logo_subty.svg" alt="" class="img_subty" id="astronaut">
      <!-- <img src="../../img/about-icons/dialog-white.svg" alt="" class="element elementB"> -->
      <img src="../../img/about-icons/word-1.svg" alt="" class="words word1">
      <img src="../../img/about-icons/word-2.svg" alt="" class="words word2">
      <img src="../../img/about-icons/word-3.svg" alt="" class="words word3">
      <img src="../../img/about-icons/word-4.svg" alt="" class="words word4">
      <img src="../../img/about-icons/word-5.svg" alt="" class="words word5">
      <img src="../../img/about-icons/word-6.svg" alt="" class="words word6">
      <img src="../../img/about-icons/word-7.svg" alt="" class="words word7">
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>
.container {
  width: 100%;
  height: 400px; // Aumentamos el alto para dar espacio a las animaciones.
  position: relative;
}

#astronaut {
  position: absolute;
  margin-bottom: 20px;
}

// .element {
//   position: absolute;
//   width: 70px;
//   height: 70px;
//   top: 50%;
//   left: 50%;
//   animation-duration: 5s;
//   animation-timing-function: linear;
//   animation-iteration-count: infinite;
// }

// .elementA {
//   animation-name: rotateA;
// }

// .elementB {
//   animation-name: rotateB;
// }

// @keyframes rotateA {
//   0%, 100% { transform: translateY(-120px); opacity: 1; }
//   50% { transform: translateY(120px); opacity: 0; }
// }

// @keyframes rotateB {
//   0%, 100% { transform: translateY(120px); opacity: 1; }
//   50% { transform: translateY(-120px); opacity: 0; }
// }

.words {
  position: absolute;
  width: 100px;
  height: 100px;
  animation-duration: 7s; 
  animation-timing-function: ease-in;
  animation-iteration-count: infinite;
}


// Animaciones para los grupos
.word6, .word4, .word2 { animation-name: rotateWordG1; }
.word1, .word3, .word5, .word7 { animation-name: rotateWordG2; }

@keyframes rotateWordG1 {
  0% { opacity: 1; }
  25% { opacity: 0.8; }
  50% { opacity: 0.6; }
  75% { opacity: 0.3; }
  100% { opacity: 0; }
}

@keyframes rotateWordG2 {
  0% { opacity: 0; }
  25% { opacity: 0.3; }
  50% { opacity: 0.6; }
  75% { opacity: 0.8; }
  100% { opacity: 1; }
}

@media (min-width:375px){
    .words {
        width: calc(70px);
        height: calc(70px);
    }

    .word1, .word2, .word3, .word4, .word5, .word6, .word7 {
        transform-origin:center;
        transform-box: fill-box;
        transform-style: preserve-3d;
        transform-origin:center;
        transform-box: fill-box;
        transform-style: preserve-3d;
    }

    // Posición inicial de las palabras para formar un heptágono.
    .word1 { transform: rotate(257.14deg) translateY(calc(-150px)) rotate(-257.14deg); }
    .word2 { transform: rotate(205.71deg) translateY(calc(-150px)) rotate(-205.71deg); }
    .word3 { transform: rotate(102.86deg) translateY(calc(-150px)) rotate(-102.86deg); }
    .word4 { transform: rotate(154.29deg) translateY(calc(-150px)) rotate(-154.29deg); }
    .word5 { transform: rotate(51.43deg) translateY(calc(-150px)) rotate(-51.43deg); }
    .word6 { transform: rotate(0deg) translateY(calc(-150px)) rotate(0deg); }
    .word7 { transform: rotate(308.57deg) translateY(calc(-150px)) rotate(-308.57deg); }
  }
@media (min-width: 992px){
  .words{
    width: 100px;
    height: 100px;
  }
  // Posición inicial de las palabras para formar un heptágono.
  .word1 { transform: rotate(257.14deg) translateY(-150px) rotate(-257.14deg); }
  .word2 { transform: rotate(205.71deg) translateY(-150px) rotate(-205.71deg); }
  .word3 { transform: rotate(102.86deg) translateY(-150px) rotate(-102.86deg); }
  .word4 { transform: rotate(154.29deg) translateY(-150px) rotate(-154.29deg); }
  .word5 { transform: rotate(51.43deg) translateY(-150px) rotate(-51.43deg); }
  .word6 { transform: rotate(0deg) translateY(-150px) rotate(0deg); }
  .word7 { transform: rotate(308.57deg) translateY(-150px) rotate(-308.57deg); }

}
</style>