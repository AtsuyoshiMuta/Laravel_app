<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    .maintext{
        width: 400px;
        height: 400px;
        background-color: #95c5ed;
        margin-top: 100px;
    }

    .btn{
        background-color: #1b4b72;
    }
</style>

<div class="container">
    <a>back</a>
    <div class="row justify-content-center">
        <div class="maintext">
        {{$item}}
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="Hmm col-3 btn">
            hmm…
        </div>
        <div class="agree col-3 btn">
            agree!
        </div>
    </div>
</div>
