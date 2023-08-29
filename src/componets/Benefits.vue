<template>
    <div class="row justify-content-center" id="benefits">
        <div class="col-12 col-lg-11 d-flex justify-content-center align-items-center section">
            <div class="row justify-content-center justify-content-lg-between w-100">
                <!--  -->
                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center card-grey-container">
                    <div class="row justify-content-center h-100 w-100 card-grey benefits">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <h2>{{ $t('message.investmentReturn') }}</h2>
                        </div>
                        <div class="col-12 d-flex jImage justify-content-center px-0">
                            <!-- <img :src="benefit.image" alt="" style="width: 100%;"> -->
                            <lord-icon 
                                src="https://cdn.lordicon.com/yeallgsa.json"
                                trigger="hover"
                                colors="primary:#dd0000,secondary:#494347"
                                style="width:200px;height:200px">
                            </lord-icon>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center card-grey-container">
                    <div class="row justify-content-center h-100 w-100 card-grey benefits">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <h2>{{ $t('message.speed') }}</h2>
                        </div>
                        <div class="col-12 d-flex jImage justify-content-center px-0">
                            <lord-icon
                                src="https://cdn.lordicon.com/kbtmbyzy.json"
                                trigger="hover"
                                colors="primary:#494347,secondary:#dd0000"
                                style="width:200px;height:200px">
                            </lord-icon>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-12 col-md-4 d-flex justify-content-center align-items-center card-grey-container">
                    <div class="row justify-content-center h-100 w-100 card-grey benefits">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <h2>{{ $t('message.securityComfy') }}</h2>
                        </div>
                        <div class="col-12 d-flex jImage justify-content-center px-0">
                            <lord-icon
                                src="https://cdn.lordicon.com/yyecauzv.json"
                                trigger="hover"
                                colors="primary:#494347,secondary:#dd0000"
                                style="width:200px;height:200px">
                            </lord-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>