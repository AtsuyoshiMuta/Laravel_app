<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
    .title{
        width: 400px;
        margin-top: 100px;
    }

    .title::placeholder{
        color: #cccccc;
    }

    .text{
        width: 400px;
        height: 400px;
    }

    .submit{
        width: 400px;
    }
</style>

<div class="container">
    <a href="{{route('main')}}">back</a>
    <form action="/post" class="row justify-content-center" method="post">
        @csrf
        <input class="title" type="text" name="title" placeholder="title">
        <div class="w-100"> </div>
        <textarea class="text" row="5" cols="28" type="text" maxlength="140" name="maintext"></textarea>
        <div class="w-100"> </div>
        <input class="submit" type="submit" value="p o s t !">
    </form>
</div>
