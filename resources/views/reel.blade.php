@extends('layouts.default')

<?php $title = 'Volga - Reel'; ?>

@section('content')


    @extends('layouts.header-index')

    <script>
        $(document).ready(function(){
            $(".inline").colorbox({inline:true, width:"50%"});
        });
    </script>

    <section id="banner-section">
        <section class="content">
            <h1>Reel</h1>
        </section>
    </section>

    <section id="reel">
        <h3>Algunas de nuestras producciones</h3>

        <ul id="reel-ul">
            @foreach($reel as $reel_item)
            <a href="#{{$reel_item->id}}" class='inline {{$reel_item->category}}'><li>
                <figure>
                    <img src="/uploads/reel/{{$reel_item->picture}}" alt="">
                </figure>
                <section class="cn">
                    <section>
                        <h3>{{$reel_item->name}}</h3>
                    </section>
                </section>
            </li></a>
            @endforeach
        </ul>
    </section>

    @foreach($reel as $reel_item)
    <div style='display:none'>
        <div id='{{$reel_item->id}}' class="iframebody">
            <iframe src="{{$reel_item->iframe}}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen scrolling="no"></iframe>
        </div>
    </div>
    @endforeach

    

    @include('layouts.footer')

@endsection