<template>
    <div class="position-relative w-100 d-flex justify-content-center align-items-center">
        <img src="../../img/about-icons/logo_subty.svg" alt="" class="img_subty" id="astronaut">
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

#coin{
  animation-duration: 10s;
  animation-name: slide_one;
  animation-direction: alternate;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
}
#coin-2{
  animation-duration: 7s;
  animation-name: slide_two;
  animation-direction: alternate;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
}
#coin-3{
  animation-duration: 10s;
  animation-name: slide_three;
  animation-direction: alternate;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;

}
#_35012c391e45504ed25b07ace461d74e{
  animation-duration: 10s;
  animation-name: rotateIn;
  animation-direction: alternate;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
  transform-origin: center center;
}
// desk

#coin-desk{
  animation-duration: 10s;
  animation-name: slide_one-desk;
  animation-direction: alternate;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
}
#coin-2-desk{
  animation-duration: 7s;
  animation-name: slide_two-desk;
  animation-direction: alternate;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
}
#coin-3-desk{
  animation-duration: 10s;
  animation-name: slide_three-desk;
  animation-direction: alternate;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;

}
#astronaut{
  animation-duration: 2s;
  animation-name: slide_three-desk;
  animation-direction: alternate;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
  transform-origin: center center;
}

@keyframes rotateIn{
  0% {
    -webkit-transform: translate(120px, 30px) rotate(8deg);
    -moz-transform: translate(120px, 30px) rotate(8deg);
    -ms-transform: translate(120px, 30px) rotate(8deg);
    -o-transform: translate(120px, 30px) rotate(8deg);
    transform: translate(120px, 30px) rotate(8deg);
  }
  100% {
      -webkit-transform: translate(120px, 30px) rotate(15deg);
      -moz-transform: translate(120px, 30px) rotate(15deg);
      -ms-transform: translate(120px, 30px) rotate(15deg);
      -o-transform: translate(120px, 30px) rotate(15deg);
      transform: translate(120px, 30px) rotate(15deg);
  }
}

@keyframes slide_one{
  0% {
    -webkit-transform: translate(150px, 0) ;
    -moz-transform: translate(150px, 0) ;
    -ms-transform: translate(150px, 0) ;
    -o-transform: translate(150px, 0) ;
    transform: translate(150px, 0) ;
  }
  100% {
    transform: translate(150px, 30px);
    -webkit-transform: translate(150px, 30px);
    -moz-transform: translate(150px, 30px);
    -ms-transform: translate(150px, 30px);
    -o-transform: translate(150px, 30px);
    transform: translate(150px, 30px);
  }
}

@keyframes slide_two{
  0% {
    -webkit-transform: translate(-30px, 0);
    -moz-transform: translate(-30px, 0);
    -ms-transform: translate(-30px, 0);
    -o-transform: translate(-30px, 0);
    transform: translate(-30px, 0);
  }
  100% {
    -webkit-transform:translate(-30px, 30px);
    -moz-transform: translate(-30px, 30px);
    -ms-transform: translate(-30px, 30px);
    -o-transform: translate(-30px, 30px);
    transform: translate(-30px, 30px);
  }
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
@keyframes rotateIn-desk{
  0% {
    transform:translate(1px, 0) rotate(8deg);
    -webkit-transform: translate(1px, 0) rotate(8deg);
    -moz-transform: translate(1px, 0) rotate(8deg);
    -ms-transform: translate(1px, 0) rotate(8deg);
    -o-transform: translate(1px, 0) rotate(8deg);
  }
  100% {
      transform:translate(1px, 0) rotate(15deg);
      -webkit-transform: translate(1px, 0) rotate(15deg);
    -moz-transform: translate(1px, 0) rotate(15deg);
    -ms-transform: translate(1px, 0) rotate(15deg);
    -o-transform: translate(1px, 0) rotate(15deg);
  }
}

@keyframes slide_one-desk{
  0% {
    transform: translate(130px, 0) ;
    -webkit-transform:translate(130px, 0) ;
    -moz-transform: translate(130px, 0) ;
    -ms-transform: translate(130px, 0) ;
    -o-transform: translate(130px, 0) ;
  }
  100% {
    transform: translate(150px, 30px);
    -webkit-transform:translate(150px, 30px);
    -moz-transform: translate(150px, 30px);
    -ms-transform: translate(150px, 30px);
    -o-transform: translate(150px, 30px);
  }
}

@keyframes slide_two-desk{
  0% {
    transform: translate(-40px, 0);
    -webkit-transform:translate(-40px, 0);
    -moz-transform: translate(-40px, 0);
    -ms-transform: translate(-40px, 0);
    -o-transform: translate(-40px, 0);
  }
  100% {
    transform: translate(-30px, 40px);
    -webkit-transform:translate(-30px, 40px);
    -moz-transform: translate(-30px, 40px);
    -ms-transform: translate(-30px, 40px);
    -o-transform: translate(-30px, 40px);
    
  }
}
@keyframes slide_three-desk{
  from {
    transform: translate(20px, 0%);
    -webkit-transform: translate(20px, 0%);
    -moz-transform:  translate(20px, 0%);
    -ms-transform:  translate(20px, 0%);
    -o-transform:  translate(20px, 0%);
    
  }
  to {
    transform: translate(20px, 70px);
    -webkit-transform: translate(20px, 70px);
    -moz-transform:  translate(20px, 70px);
    -ms-transform:  translate(20px, 70px);
    -o-transform:  translate(20px, 70px);
    
  }
}


</style>