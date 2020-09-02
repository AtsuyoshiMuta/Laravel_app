<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
    .maintext{
        width: 400px;
        height: 400px;
        background-color: #eee;
        margin-top: 60px;
    }
</style>

<div class="container">
    <a>back</a>
    <div class="row justify-content-center">
        <div class="maintext">
        {{$items[$id-1]->maintext}}
        </div>
    </div>
    <div id="app">
        <vote-buttons v-bind:hmm="{{$items[$id-1]->hmm}}" v-bind:hmm="{{$items[$id-1]->agree}}"></vote-buttons>
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>


