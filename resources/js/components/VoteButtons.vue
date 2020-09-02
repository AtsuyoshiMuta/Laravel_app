<template>
    <div class="row">
        <div class="btn mx-auto" @click="vote0">
            hmm…
        </div>
        <div class="btn mx-auto" @click="vote1">
            agree!
        </div>
    </div>
</template>

<script>
    export default {
        name: "vote-buttons",
        props: {
                url0: '',
                url1: '',
        },
        created() {
            console.log('Component mounted.')
        },
        methods: {
            vote0() {
                axios.post(this.url0).then((response)=>{
                    alert('Your vote is accepted!');
                }) //親要素からphp変数を展開して名前付きルートのurlを受け取っておくこと
            },
            vote1() {
                axios.post(this.url1).then((response)=>{
                    alert('Your vote is accepted!');
                })
            }
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
