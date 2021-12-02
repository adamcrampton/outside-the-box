<template>
<div class="mt-5">
    <img class="img-responsive" :src="fingerImage">
</div>
</template>

<script>
import EventBus from './event-bus.js';

export default {
    methods: {
        generateRandom(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);

            return Math.floor(Math.random() * (max - min) + min);
        }
    },
    mounted () {
        // Get random count.
        this.fingerCount = this.generateRandom(1, 5);

        // Update main component.
        this.$nextTick(() => {
                EventBus.$emit('update', {
                component: 'left',
                count: this.fingerCount
            });
        });
    },
    computed: {
        fingerImage() {
            return '/img/hand-' + this.generateRandom(1, 5) + '.jpeg';
        }
    }
}
</script>