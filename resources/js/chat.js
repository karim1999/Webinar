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
            axios.get('/messages').then(res => {
                if(this.messages.length != res.data.length){
                    this.messages= res.data
                    let elem= document.getElementById('chat_box');
                    elem.scrollTop = elem.scrollHeight;
                }
            })
        },
        addMessage(){
            axios.post('/messages', {
                message: this.message,
                guest_id: this.$refs.guest_id.value
            }).then(res => {
                this.message= ""
                console.log(res.data)
            })
        }
    }
});
