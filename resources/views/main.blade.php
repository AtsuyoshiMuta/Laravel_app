<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    input{
        border-width: 1px;
        border-color: #ccc;
        border:none;
        /*background:none;*/
    }
</style>

<form class="mx-auto">
    @csrf
    <input class="rounded-pill" type="text">
    <input class="rounded-pill" type="submit" value="search">
</form>

<div class="container-fluid">
    <div class="row">
        @foreach($items as $item)
{{--            @php--}}
{{--            dd($item);--}}
{{--            @endphp--}}
        <p>{{$item->maintext}}</p>
        @endforeach
    </div>
</div>
