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
                hmm: 0,
                agree: 0,
                url: '', //DBにpostするための名前付きルートのurl
        },
        created() {
            console.log('Component mounted.')
        },
        methods: {
            vote0() {
                this.hmm += 1;
                axios.post(this.url, {
                    hmm: this.hmm,
                    agree: this.agree,
                }).then((response)=>{

                }) //親要素からphp変数を展開して名前付きルートのurlを受け取っておくこと
            },
            vote1() {
                this.agree += 1;
                axios.post(this.url, {
                    hmm: this.hmm,
                    agree: this.agree,
                }).then((response)=>{

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
