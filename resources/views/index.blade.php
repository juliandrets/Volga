@extends('layouts.default')

<?php $title = 'Volga - Inicio'; ?>

@section('content')


    <script>
        $(document).ready(function(){
            $(".inline").colorbox({inline:true, width:"50%"});
        });
    </script>
    
    @include('layouts.header-index')

    

    <section id="banner-index">
        
        <div id="wowslider-container1">
            <div class="ws_images">
                <ul>
                    <li><img src="/img/banner/1.jpg" alt="" title="" id="wows1_0"/></li>
                    <li><img src="/img/banner/2.jpg" alt="" title="" id="wows1_1"/></li>
                </ul>
            </div>
        </div>	
        <script type="text/javascript" src="{{asset('/plugins/wow/wowslider.js')}}"></script>
        <script type="text/javascript" src="{{asset('/plugins/wow/script.js')}}"></script>

    </section>

    <section id="who-i-am">
        <div class="content">
            <h2>Quiénes Somos</h2>
            <div class="points-bar">...</div>

            <h3>Volga Producciones</h3>
            <h4></h4>

            <ul class="redes">
                <a href="https://ar.linkedin.com/in/jorge-luis-sucksdorf-74a56215" target="_blank"><li><i class="fa fa-linkedin" aria-hidden="true"></i></li></a>
            </ul>

            <div class="text">
                <p>
                    Somos una productora de contenidos audiovisuales. Desarrollamos productos a medida para diferentes plataformas y producimos nuestras propias ideas.

                    Creemos que la clave del éxito son los contenidos y hacia allí enfocamos nuestros mayores esfuerzos.

                    Desarrollamos formatos y guiones, realizamos script doctors y buscamos que siempre las ideas se transformen en historias.
                </p>
                <p>
                    Nuestro equipo de realizadores y postproductores se aboca constantemente a la tarea de que esas historias sean plasmadas con vuelo propio y belleza estética.

                    Estamos pensando y planteándonos todos los días nuevos desafíos. Eso es Producciones del Volga.
                </p>
            </div>
            <div class="buttons">
                <a href="/reel"><div class="boton">Ver Reel</div></a>
                <!--<a href=""> <div class="boton">Download CV</div></a>-->
            </div>
        </div>
    </section>


    <section id="recent-projects">
        <h2>Recent Projects</h2>
        <div class="points-bar">...</div>

        <ul class="gallery">
            @foreach($reel as $reel_item)
            <li>
                <img src="/uploads/reel/{{$reel_item->picture}}" alt="">
                <div class="cn">
                    <section>
                        <h3>{{$reel_item->name}}</h3>
                        <a href="#{{$reel_item->id}}" class='inline'><div class="boton">View project</div></a>
                    </section>
                </div>
            </li>
            @endforeach
        </ul>
        <a href="/reel"><div class="b">Ver todos</div></a>
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