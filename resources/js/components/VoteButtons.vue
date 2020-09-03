<template>
    <div class="row">
        <div class="btn mx-auto" @click="vote(0)">
            hmm…
        </div>
        <div class="btn mx-auto" @click="vote(1)">
            agree!
        </div>
    </div>
</template>

<script>
    export default {
        name: "vote-buttons",
        props: {
                url: '',
        },
        created() {
            console.log('Component mounted.')
        },
        methods: {
            vote(val) {
                const data = {
                    'vote' : val
                };
                axios.post(this.url, data).then((response)=>{
                    if (response.data['error'] === '') {
                        alert('Your vote is accepted!');
                    }else{
                        alert(response.data['error']);
                    }
                });
            },
        }
    }
</script>

<style scoped>
.hmm{
    margin-left: 50px;
}

.agree{
    margin-right: 50px;
}

.btn{
    font-size: 50px;
    line-height: 180px;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    color: white;
    background-color: #1b4b72;
    border-width: 3px;
    margin: 20px 100px;
}

.btn:hover{
    background-color: white;
    border-color: #1b4b72;
    border-width: 3px;
    color: #1b4b72;
}
</style>
