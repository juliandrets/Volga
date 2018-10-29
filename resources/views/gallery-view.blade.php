@extends('layouts.default')

<?php $title = 'JustJ - '; ?>

@section('content')

    <script>
        $(document).ready(function(){
            $(".group2").colorbox({rel:'group2', transition:"fade"});
        });
    </script>
    
    @extends('layouts.header-index')

    <section id="banner-section">
        <section class="content">
            <h1>Gallery</h1>
        </section>
    </section>

    <section id="gallery-view">
        <div class="content">
            <h2>{{$gallery->name}}</h2>
            <div class="points-bar">...</div>

            <ul class="photos">
            @foreach($photos as $photo)
            <li>
                <figure>
                    <img src="/uploads/gallery/{{$photo->picture}}" alt="">
                </figure>
                <section>
                    <a class="group2" href="/uploads/gallery/{{$photo->picture}}"><i class="fa fa-search" aria-hidden="true"></i></a>
                </section>
            </li>
            @endforeach
            </ul>

            {{$photos->links()}}
        </div>
    </section>

    

    @include('layouts.footer')

@endsection