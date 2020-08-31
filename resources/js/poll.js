// Import component
import Loading from 'vue-loading-overlay';
// Import stylesheet
import 'vue-loading-overlay/dist/vue-loading.css';

const tabs = new Vue({
    el: '#real_time_poll',
    components: {
        Loading
    },
    data: {
        results: null,
        id: 0,
        isLoading: false
    },
    mounted(){
        this.id= this.$refs.poll_id.value
        this.loadData()
        setInterval(()=> {
            this.loadData()
        }, 2000)
    },
    methods: {
        loadData(){
            axios.get('/poll/api/'+this.id).then(res => {
                console.log(res.data)
                this.results= res.data
            }).catch(error => {
                console.log(error)
            })
        },
    }
});
