<template>
    <div class="position-relative w-100 d-flex justify-content-center align-items-center container">
      <!-- <img src="../../img/about-icons/dialog-red.svg" alt="" class="element elementA"> -->
      <img src="../../img/nav-icons/logo.svg" alt="" class="img_subty" id="astronaut">
      <!-- <img src="../../img/about-icons/dialog-white.svg" alt="" class="element elementB"> -->
      <img src="../../img/about-icons/word-3.svg" alt="" class="words word1">
      <img src="../../img/about-icons/word-1.svg" alt="" class="words word2">
      <img src="../../img/about-icons/word-2.svg" alt="" class="words word3">
      <img src="../../img/about-icons/word-4.svg" alt="" class="words word4">
      <img src="../../img/about-icons/word-5.svg" alt="" class="words word5">
      <img src="../../img/about-icons/word-6.svg" alt="" class="words word6">
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
  height: 100px;
}

$word-count: 6;
$angle: calc(360deg / $word-count);
$radius: 145px;

.words {
  position: absolute;
  animation: fadeInOut 4s ease-in-out infinite;
  height: 60px;
}

@for $i from 1 through $word-count {
  .word#{$i} {
    transform: rotate($angle * ($i - 1)) translateX($radius) rotate(-$angle * ($i - 1));
    animation-delay: if($i <= calc($word-count / 2), ($i - 1) * 1s, ($i - calc($word-count / 2) - 1) * 1s);
  }
}

@keyframes fadeInOut {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

</style>