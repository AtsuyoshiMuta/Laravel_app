<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    .box{
        margin-top: 50px;
    }

    input{
        border-width: 1px;
        border-color: #cccccc;
        border:none;
        /*background:none;*/
    }

    .btn{
        color: #5a6268;!important;
        border: solid 1px;
        border-radius: 5px;
    }

    .card{
        border: solid 1px;
        margin: 10px;
    }

    .btn > a{
        color: #5a6268;
    }

    a:hover{
        text-decoration: none;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 row box">
            <form class="col-4" action="/main" method="get">
                <input class="rounded-pill" type="text" name="query">
                <input class="rounded-pill" type="submit" value="search">
            </form>
            <div class="col"></div>
            <div class="col-3 btn">
                <a href="{{route('post')}}">New post.</a>
            </div>
        </div>
        <div class="w-100"> </div>
        @foreach($items as $item)
            <div class="col-5 card">
                <a href="{{route('vote',['id' => $item->id])}}"><strong>{{$item->title}}</strong></a>
                <p>{{$item->maintext}}</p>
            </div>
        @endforeach
    </div>
</div>
