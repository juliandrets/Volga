@extends('layouts.default')

<?php $title = 'Volga - Contacto'; ?>

@section('content')
    
    @include('layouts.header-index')

    <section id="banner-section">
        <section class="content">
            <h1>Contacto</h1>
        </section>
    </section>

    <section id="contact">
        <section class="content">
            <section class="info">
                <ul>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div>
                            <p>Locación</p>
                            <h3 style="font-size:20px">Cabrera 5849, 1º, Palermo, Buenos Aires, Argentina.</h3>
                        </div>
                    </li>
                <ul>
                    <li>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <div>
                            <p>Email</p>
                            <h3 style="font-size: 18px">produccion@delvolga.com.ar</h3>
                        </div>
                    </li>
                </ul>
            </section>
            <form action="/send" method="POST">
                {{ csrf_field() }}
                <div>
                    <input type="text" name='name' placeholder='Nombre *' required>
                    <input type="Email" name='email' placeholder='Email *' required>
                </div>
                <textarea name="text" placeholder='Mensaje' required></textarea>
                <button class='boton'>Enviar</button>
            </form>
        </section>
    </section>

    

    @include('layouts.footer')

@endsection