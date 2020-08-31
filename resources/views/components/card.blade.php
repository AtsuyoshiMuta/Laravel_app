<style>
    .card{
        border: solid 2px #ccc;
        border-radius: 10px;
        margin:10px;
        padding: 10px;
        background-color: #fafafa;
    }
    .msg_title{
        margin: 10px 20px;
        color: #999;
        font-size: 16pt;
        font-weight: bold;
    }
    .msg_content{
        margin: 10px 20px ;
        color: #aaa;
        font-size: 12pt;
    }
</style>
<div class="card">
    <p class="msg_title">{{$msg_title}}</p>
    <p class="msg_content">{{$msg_content}}</p>
</div>
