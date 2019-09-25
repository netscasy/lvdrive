<template>
    <p> {{greeting}} World!</p>
    <other-component />
</template>
<script>
import OtherComponent from './OtherComponent';
export default {
    data() {
        return {
            greeting: 'Hello',
        }
    }
}
components: {
    OtherComponent
}

</script>
<style scoped>
p {
    font-size: 2em;
    text-align: center;
}

</style>
