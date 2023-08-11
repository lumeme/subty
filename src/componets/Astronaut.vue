<template>
    <div class="position-relative w-100 d-flex justify-content-center align-items-center container">
      <img src="../../img/about-icons/dialog-red.svg" alt="" class="element elementA">
      <img src="../../img/about-icons/logo_subty.svg" alt="" class="img_subty" id="astronaut">
      <img src="../../img/about-icons/dialog-white.svg" alt="" class="element elementB">
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>
#astronaut{
  animation-duration: 2s;
  animation-name: slide_three-desk;
  animation-direction: alternate;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
  transform-origin: center center;
}

@keyframes slide_three{
  from {
    transform: translate(20px, 0%);
    -webkit-transform: translate(20px, 0%);
    -moz-transform: translate(20px, 0%);
    -ms-transform: translate(20px, 0%);
    -o-transform: translate(20px, 0%);
  }
  to {
    transform: translate(20px, 70px);
    -webkit-transform: translate(20px, 70px);
    -moz-transform: translate(20px, 70px);
    -ms-transform: translate(20px, 70px);
    -o-transform: translate(20px, 70px);
  }
}

//DESK
@keyframes slide_three-desk{
  from {
    transform: translate(0px, 0%);
    -webkit-transform: translate(0px, 0%);
    -moz-transform:  translate(0px, 0%);
    -ms-transform:  translate(0px, 0%);
    -o-transform:  translate(0px, 0%);
    
  }
  to {
    transform: translate(0px, 70px);
    -webkit-transform: translate(0px, 70px);
    -moz-transform:  translate(0px, 70px);
    -ms-transform:  translate(0px, 70px);
    -o-transform:  translate(0px, 70px);
    
  }
}

.container {
  width: 100%;
  height: 200px;
  position: relative;
}

.element {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  position: absolute;
}

.elementA {
  animation: rotateA 7s linear infinite alternate;
  animation-timing-function: ease-in-out;
}

.elementB {
  animation: rotateB 7s linear infinite alternate;
  animation-timing-function: ease-in-out;
  animation-delay: 2s;
}

@keyframes rotateA {
  0% {
    transform-origin: left center;
    transform: rotate(0deg) translateX(200px) rotate(-0deg);
    opacity: 1;
  }
  45%{
    opacity: 0;
  }
  50% {
    transform-origin: right center;
    transform: rotate(180deg) translateX(200px) rotate(-180deg);
    opacity: 0;
  }
  100% {
    transform-origin: right center;
    transform: rotate(360deg) translateX(200px) rotate(-360deg);
    opacity: 0;
  }
}

@keyframes rotateB {
  0% {
    transform-origin: right center;
    transform: rotate(180deg) translateX(-200px) rotate(-180deg);
    opacity: 0;
  }
  45%{
    opacity: 0;
  }
  50% {
    transform-origin: left center;
    transform: rotate(360deg) translateX(-200px) rotate(-360deg);
    opacity: 0;
  }
  100% {
    transform-origin: left center;
    transform: rotate(540deg) translateX(-200px) rotate(-540deg);
    opacity: 1;
  }
}



</style>