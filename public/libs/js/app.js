new Vue({
    el: "#app",
    data: {
        skills: []
    },
    // methods: {
    //     onSubmit: function() {
    //         axios.get('/skills')
    //             .then(function(response) {
    //                 skills = response.data;
    //             });
    //     }
    // }
    mounted() {
        axios.get('/skills')
            .then(function(response) {
                this.skills = response.data;
            });
    }
    // mounted() {
    //     axios.get('skills')
    //         .then(response => this.skills = response.data);
    // }
});
