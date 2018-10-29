@extends('layouts.default')

<?php $title = 'JustJ - Contacto'; ?>

@section('content')
    
    @extends('layouts.header-index')

    <section id="banner-section">
        <section class="content">
            <h1>Contact Us</h1>
        </section>
    </section>

    <section id="contact">
        <section class="content">
            <section class="info">
                <ul>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div>
                            <p>Our location</p>
                            <h3 style="font-size:20px">Tuxpan 42, Roma Sur, Cuauhtémoc, CP 06760, Ciudad de México, México.   <br><br>

2100 Van Buren St, Unit 103, Hollywood, FL33020, USA</h3>
                        </div>
                    </li>
                <ul>
                    <li>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <div>
                            <p>Email</p>
                            <h3>hello@justj.tv</h3>
                        </div>
                    </li>
                </ul>
            </section>
            <form action="/send" method="POST">
                {{ csrf_field() }}
                <div>
                    <input type="text" name='name' placeholder='Name' required>
                    <input type="Email" name='email' placeholder='Email' required>
                </div>
                <textarea name="text" placeholder='Message' required></textarea>
                <button class='boton'>SEND</button>
            </form>
        </section>
    </section>

    

    @include('layouts.footer')

@endsection