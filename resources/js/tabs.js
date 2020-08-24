// Import component
import Loading from 'vue-loading-overlay';
// Import stylesheet
import 'vue-loading-overlay/dist/vue-loading.css';

const tabs = new Vue({
    el: '#tabs_container',
    components: {
        Loading
    },
    data: {
        settings: {},
        questions: {},
        polls: {},
        isAnswering: false,
        isPolling: false,
        answered: false,
        polled: false,
    },
    created(){
        setInterval(()=> {
            this.loadData()
        }, 1000)
    },
    methods: {
        loadData(){
            axios.get('/settings').then(res => {
                if(res.data.poll_tab && (this.settings.poll_tab != res.data.poll_tab)){
                    this.$toasted.show('The speaker opened the poll tab')
                    document.getElementById('poll_button').click()
                }else if(res.data.question_tab && (this.settings.question_tab != res.data.question_tab)){
                    this.$toasted.show('The speaker opened the question tab')
                    document.getElementById('question_button').click()
                }
                this.settings= res.data
            })
        },
        submitQuestions(){
            this.$toasted.show('Submitting.....')
            if(!this.isAnswering){
                this.isAnswering= true
                axios.post('/submit_questions', this.questions).then(res => {
                    console.log(res.data)
                    this.$toasted.success('The form was submitted successfully')
                    this.answered= true
                    this.isAnswering= false
                }).catch(err => {
                    console.log(err)
                    this.isAnswering= false
                })
            }
        },
        submitPolls(id){
            console.log(id)
            this.$toasted.show('Submitting.....')
            if(!this.isPolling){
                this.isPolling= true
                axios.get('/submit_polls/'+id).then(res => {
                    this.$toasted.success('Your vote was recorded successfully')
                    this.$refs["poll_"+id].parentNode.remove();
                    this.polled= true
                    this.isPolling= false
                }).catch(err => {
                    console.log(err)
                    this.isPolling= false
                })
            }
        }
    }
});
