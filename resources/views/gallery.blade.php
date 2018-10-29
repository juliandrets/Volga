@extends('layouts.default')

<?php $title = 'JustJ - Gallery'; ?>

@section('content')
    @extends('layouts.header-index')

    <section id="banner-section">
        <section class="content">
            <h1>Gallery</h1>
        </section>
    </section>

    <section id="gallery">
        <ul id="gallery-ul">
            @foreach($galleries as $gallery)
            <a href="/gallery/{{$gallery->id}}"><li>
                <section>
                    <h3>{{$gallery->name}}</h3>
                </section>
            </li></a>
            @endforeach
        </ul>
    </section>

    

    

    @include('layouts.footer')

@endsection