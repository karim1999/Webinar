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
        allQuestions: [],
        allPolls: [],
        isAnswering: false,
        isPolling: false,
        answered: false,
        polled: false,
        answeredQuestions: [],
        answeredPolls: [],
    },
    mounted(){
        this.loadData()
        setInterval(()=> {
            this.loadData()
        }, 2000)
        this.getQuestionsAndPolls()
        setInterval(()=> {
            this.getQuestionsAndPolls()
        }, 10000)
    },
    computed: {
        current_question(){
            if(this.allQuestions.length === 0)
                return null;

            if(this.settings.question_tab === 0){
                for (let question of Object.keys(this.allQuestions)) {
                    if(!this.answeredQuestions[question])
                        return this.allQuestions[question]
                }
                return null;
            }else if(!this.answeredQuestions[this.settings.question_tab]){
                return this.allQuestions[this.settings.question_tab]
            } else{
                return null;
            }
        },
        current_poll(){
            if(this.allPolls.length === 0)
                return null;

            if(this.settings.poll_tab === 0){
                for (let poll of Object.keys(this.allPolls)) {
                    if(!this.answeredPolls[poll])
                        return this.allPolls[poll]
                }
                return null;
            }else if(!this.answeredPolls[this.settings.poll_tab]){
                return this.allPolls[this.settings.poll_tab]
            } else{
                return null;
            }
        }
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
            }).catch(error => {
                console.log(error)
            })
        },
        getQuestionsAndPolls(){
            axios.get('/all_q_p').then(res => {
                if(res.data.polls.length !== this.allPolls.length){
                    this.allPolls= res.data.polls
                }
                if(res.data.questions.length !== this.allQuestions.length){
                    this.allQuestions= res.data.questions
                }
                if(res.data.answers.length !== this.answeredQuestions.length){
                    this.answeredQuestions= res.data.answers
                }
                if(res.data.options.length !== this.answeredPolls.length){
                    this.answeredPolls= res.data.options
                }
            }).catch(error => {
                console.log(error)
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
                    this.answeredQuestions[this.current_question.id]= {}
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
                    // this.$refs["poll_"+id].parentNode.remove();
                    this.answeredPolls[this.current_poll.id]= {}
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
