@extends('layouts.default')

<?php $title = 'JustJ - Reel'; ?>

@section('content')
    
    <script>
        $(document).ready(function(){
            $(".inline").colorbox({inline:true, width:"50%"});
        });
    </script>

    @extends('layouts.header-index')

    <section id="banner-section">
        <section class="content">
            <h1>Reel</h1>
        </section>
    </section>

    <section id="reel">
        <ul id="categories">
            <li id="all-b">All</li>
            <li id="commercials-b">Commercials</li>
            <li id="tv-b">TV Shows</li>
            <li id="others-b">Others</li>
        </ul>

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

    <script>
        $('#all-b').addClass('active')
        $('#commercials-b').click(function(){
            $('.commercial').fadeIn(function() {
				$('.commercial').css('display', 'block')
            })
            $('.tv').fadeOut(function() {
				$('.tv').css('display', 'none')
            })
            $('.other').fadeOut(function() {
				$('.other').css('display', 'none')
            })
            $('#commercials-b').addClass('active')
            $('#others-b').removeClass('active')
            $('#all-b').removeClass('active')
            $('#tv-b').removeClass('active')
        });
        $('#others-b').click(function(){
            $('.commercial').fadeOut(function() {
				$('.commercial').css('display', 'none')
            })
            $('.tv').fadeOut(function() {
				$('.tv').css('display', 'none')
            })
            $('.other').fadeIn(function() {
				$('.other').css('display', 'block')
            })
            $('#commercials-b').removeClass('active')
            $('#others-b').addClass('active')
            $('#all-b').removeClass('active')
            $('#tv-b').removeClass('active')
        });
        $('#tv-b').click(function(){
            $('.commercial').fadeOut(function() {
				$('.commercial').css('display', 'none')
            })
            $('.tv').fadeIn(function() {
				$('.tv').css('display', 'block')
            })
            $('.other').fadeOut(function() {
				$('.other').css('display', 'none')
            })
            $('#commercials-b').removeClass('active')
            $('#others-b').removeClass('active')
            $('#all-b').removeClass('active')
            $('#tv-b').addClass('active')
        });
        $('#all-b').click(function(){
            $('.commercial').fadeIn(function() {
				$('.commercial').css('display', 'block')
            })
            $('.tv').fadeIn(function() {
				$('.tv').css('display', 'block')
            })
            $('.other').fadeIn(function() {
				$('.other').css('display', 'block')
            })
            $('#commercials-b').removeClass('active')
            $('#others-b').removeClass('active')
            $('#all-b').addClass('active')
            $('#tv-b').removeClass('active')
        });
    </script>

@endsection