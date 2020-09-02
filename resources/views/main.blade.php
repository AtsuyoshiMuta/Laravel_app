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

    .card{
        boder: solid 1px;
        margin: 10px;
    }

    a:hover{
        text-decoration: none;
    }
</style>

<form class="">
    @csrf
    <input class="rounded-pill" type="text">
    <input class="rounded-pill" type="submit" value="search">
</form>

<div class="container-fluid">
    <div class="row justify-content-center">
        @foreach($items as $item)
            <div class="col-5 card">
                <a href="{{route('vote',['id' => $item->id])}}"><strong>{{$item->title}}</strong></a>
                <p>{{$item->maintext}}</p>
            </div>
        @endforeach
    </div>
</div>
