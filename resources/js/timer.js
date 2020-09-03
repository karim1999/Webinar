const chat = new Vue({
    el: '#timer',
    data: {
    },
    created(){
    },
    methods: {
        handleCountdownEnd(){
            console.log('done')
            location.reload()
        }
    }
});
