<template>
    
</template>

<script>
import EventBus from './event-bus.js';

export default {
    data() {
        return {
            left: 0,
            right: 0,
            buttons: 0
        }
    },
    mounted () {
        EventBus.$on('update', (data) => {
            this[data.component] = data.count;
        });
    },
}
</script>