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
    <div class="row justify-content-center">
        <div>May I delete this post?</div>
        <div class="w-100"> </div>
        <div class="maintext">
            {{$item->maintext}}
        </div>
        <div class="w-100"> </div>
        <form action="{{route('delete', $item->id)}}" method="post">
            @csrf
            <input type="submit" value="Delete">
        </form>
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>


