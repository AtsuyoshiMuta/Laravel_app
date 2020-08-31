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
        @for($i = 0; $i < 10; $i++)
            <div class="col-6">
            @component('components.card')
                @slot('msg_title')
                    caution!
                @endslot

                @slot('msg_content')
                    本文
                @endslot
            @endcomponent
            </div>
        @endfor
    </div>
</div>
