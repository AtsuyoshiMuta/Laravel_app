<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    form{
        margin-top: 50px;
    }

    input{
        border-width: 1px;
        border-color: #ccc;
        border:none;
        /*background:none;*/
    }

    .btn{
        color: #5a6268;!important;
        margin: 40px 0px 0px 350px;
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
    <div class="row">
        <form class="col-6">
            @csrf
            <input class="rounded-pill" type="text">
            <input class="rounded-pill" type="submit" value="search">
        </form>
        <div class="col">
            <div class="btn">
                <a href="{{route('post')}}">New post.</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        @foreach($items as $item)
            <div class="col-5 card">
                <a href="{{route('vote',['id' => $item->id])}}"><strong>{{$item->title}}</strong></a>
                <p>{{$item->maintext}}</p>
            </div>
        @endforeach
    </div>
</div>
