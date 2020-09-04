<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
    .maintext{
        width: 400px;
        height: 400px;
        background-color: #eee;
        margin-top: 60px;
    }

    .btn{
        color: #5a6268;!important;
        margin: 40px 0px 0px 350px;
        border: solid 1px;
        border-radius: 5px;
    }

    .btn > a{
        color: #5a6268;
    }

    a:hover{
        text-decoration: none;
    }
</style>

<div class="container">
    <a href="{{route('main')}}">back</a>
    @if ($user_id === $item->poster_id)
        <div class="btn">
            <a href="/delete/{{$id}}">Dlete post.</a>
        </div>
    @endif

{{--    @php dd(strtotime($item->created_at) - time()) @endphp--}}
    @if ((time() - strtotime($item->created_at)) / 86400 < 7)
    <div>

    </div>
    <div class="row justify-content-center">
        <div class="maintext">
        {{$item->maintext}}
        </div>
    </div>
    <div id="app">
        <vote-buttons
            url="{{route('update', ['id'=>$id])}}">
        </vote-buttons>
    </div>
    @else
    <dis>This post has been closed. (7 days have passed.)</dis>
    <dis>Result</dis>
    <div class="maintext">
        {{$item->maintext}}
    </div>
    <div>
        hmm : {{$item->hmm}}
        agree : {{$item->agree}}
    </div>
    @endif
</div>

<script src="{{ mix('js/app.js') }}"></script>


