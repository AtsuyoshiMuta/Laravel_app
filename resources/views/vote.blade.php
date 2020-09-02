<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
    .maintext{
        width: 400px;
        height: 400px;
        background-color: #eee;
        margin-top: 60px;
    }
    a:hover{
        text-decoration: none;
    }
</style>

<div class="container">
    <a href="{{route('main')}}">back</a>
    <div class="row justify-content-center">
        <div class="maintext">
        {{$items[$id-1]->maintext}}
        </div>
    </div>
    <div id="app">
        <vote-buttons
            url0="{{route('update0', ['id'=>$id])}}"
            url1="{{route('update1', ['id'=>$id])}}">
        </vote-buttons>
    </div>

</div>

<script src="{{ mix('js/app.js') }}"></script>


