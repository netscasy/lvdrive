<template>
    <div>
        <button class="my-button" :type="type" v-text="ftext"></button>
    </div>
</template>
<script>
export default {
    mounted() {
        console.log('Component mounted.');
        axios.post('api/vue', {})
            .then(response => {
                this.test = response.data.name;
            });
    },
    data: function() {
        return {
            type: 'Submit',
            ftext: 'DefaultF',
        }
    },
    props: [
        'type',
        'ftext',
    ]
}

</script>
<style>
.my-button {
    background-color: #333;
    color: #fff;
    padding: 10px 15px;
}

</style>
