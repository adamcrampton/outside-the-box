<template>
<div class="row w-100">
    <div 
        class="col-3"
        v-for="(button, index) in buttons"
        :key="index"
        v-html="button"
    ></div>
</div>
</template>

<script>
import EventBus from './event-bus.js';

export default {
    data() {
        return {
            buttonCount: 0,
            buttons: [],
            colors: [
                'info', 'primary', 'danger', 'warning', 'dark', 'success'
            ]
        }
    },
    methods: {
        generateRandom(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);

            return Math.floor(Math.random() * (max - min) + min);
        }
    },
    mounted () {
        // Get random count.
        this.buttonCount = this.generateRandom(1, 10);

        // Generate buttons.
        for (let index = 1; index <= this.buttonCount; index++) {
            const buttonClass = this.colors[this.generateRandom(0, this.colors.length)];
            this.buttons.push('<button type="button" class="btn btn-lg btn-block btn-' + buttonClass + ' w-100 py-5 my-3"><strong>' + index + '</strong></button>');
        }

        // Update main component.
        this.$nextTick(() => {
                EventBus.$emit('update', {
                component: 'buttons',
                count: this.buttonCount
            });
        });
    },
}
</script>