<template>
    <div class="wrapper-stepper">
        <div class="stepper">
            <div class="stepper-progress">
                <div class="stepper-progress-bar" :style="'width:' + stepperProgress"></div>
            </div>

            <div class="stepper-item" :class="{ 'current': step == item, 'success': step > item }" v-for="item in 4"
                :key="item">
                <div class="stepper-item-counter">
                    <img class="icon-success"
                        src="https://www.seekpng.com/png/full/1-10353_check-mark-green-png-green-check-mark-svg.png"
                        alt="">
                    <span class="number">
                        {{ item }}
                    </span>
                </div>
                <span class="stepper-item-title">
                    {{ item }}
                </span>
            </div>
        </div>

        <div class="stepper-content" v-for="item in 4" :key="item">
            <div class="stepper-pane" v-if="step == item">
                Estas en el paso <span class="tx-green-1">{{ item }}</span> aqui mostrarás el contenido :D
            </div>
        </div>

        <div class="controls">
            <button class="btn" @click="step--" :disabled="step == 1">
                Anterior
            </button>
            <button class="btn btn--green-1" @click="step++" :disabled="step == 4">
                Siguiente
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: 'StepperComponent',
    data: () => ({
        step: 1
    }),
    computed: {
        stepperProgress() {
            return (100 / 3) * (this.step - 1) + '%'
        }
    }
}
</script>

<style lang="scss">
@import "../scss/components/stepper_component.scss";
</style>