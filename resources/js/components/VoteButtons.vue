<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="hmm btn mx-auto" @click="vote0">
                    hmm…
                </div>
            </div>
            <div class="col">
                <div class="agree btn mx-auto" @click="vote1">
                    agree!
                </div>
            </div>
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
.btn{
    width: 200px;
    height: 200px;
    border-radius: 50%;
    color: white;
    background-color: #1b4b72;
    margin: 20px 50px;
}
</style>
