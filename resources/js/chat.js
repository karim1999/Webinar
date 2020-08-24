const chat = new Vue({
    el: '#chat',
    data: {
        messages: [],
        message: "",
    },
    created(){
        setInterval(()=> {
            this.loadData()
        }, 1000)
    },
    methods: {
        loadData(){
            return axios.get('/messages').then(res => {
                if(this.messages.length != res.data.length){
                    this.messages= res.data
                    setTimeout(()=> {
                        this.scrollBottom()
                    }, 1000)
                }
            })
        },
        addMessage(){
            return axios.post('/messages', {
                message: this.message,
                guest_id: this.$refs.guest_id.value
            }).then(res => {
                this.message= ""
                this.messages= res.data
                this.scrollBottom()
            })
        },
        scrollBottom(){
            let elem= document.getElementById('chat_box');
            elem.scrollTop = elem.scrollHeight;
        }
    }
});
