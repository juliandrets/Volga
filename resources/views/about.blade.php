@extends('layouts.default')

<?php $title = 'Volga - Sobre Nosotros'; ?>

@section('content')
    
    @include('layouts.header-index')

    <section id="banner-section">
        <section class="content">
            <h1>Sobre Nosotros</h1>
        </section>
    </section>

    <div id="cv">
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
    </div>


    <section id="who-i-am">
        <div class="content">
            <h2>Nuestra Historia</h2>
            <div class="points-bar">...</div>
            <div class="text">
                <p>
                    A fines del siglo XIX y Principios del XX las tranquilas aldeas alemanas que vivían en tierras rusas, a orillas del río Volga, se vieron alteradas. Habían pasado más de un siglo desde que Catalina La Grande había invitado a sus ancestros a poblar esas apacibles y heladas praderas.

                    Debían abandonarlas y continuar su camino, comenzar a migrar por segunda vez.
                </p>
                <p>
                    Así, cruzaron el Atlántico y llegaron a Estados Unidos, Canadá, Brasil y Argentina.

                    En Argentina, la mayoría de los descendientes alemanes proviene de estos hombres que siempre llevaron su cultura y su fuerza a cuestas sin importar las dificultades con las que se hallaran y que jamás se rindieron ante sus propios sueños, por más lejos que se hallaran.
                </p>
            </div>
        </div>
    </section>

    <section id="about">
        <section id="values">
            <div class="content">
                <h2>Valores</h2>
                <div class="points-bar">...</div>

                <ul>
                    <li>
                        <i class="fa fa-battery" aria-hidden="true"></i>
                        <h3>Energía</h3>
                        <p> un grupo de personas que hacen lo mismo al mismo tiempo, todos completamente convencidos de lo que están haciendo, es una impresionante cantidad de energía, un poder mágico y maravilloso. Es muy difícil de lograr y conduce a una satisfacción que siempre se refleja en el producto final, sin impor</p>
                    </li>
                    <li>
                        <i class="fa fa-cloud" aria-hidden="true"></i>
                        <h3>Confiabilidad</h3>
                        <p>Prepárate para crecer, aumentar, dar más. Estar calificado para apoyar la calidad de los servicios a través del tiempo y además de las dificultades. </p>
                    </li>
                    </li>
                    <li>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <h3>Identidad</h3>
                        <p>Soluciones creativas para lograr una optimización efectiva. Una forma propia de hacer las cosas, optimizar las experiencias existentes, aprender y mejorar.</p>
                    </li>
                    </li>
                    <li>
                        <i class="fa fa-calculator" aria-hidden="true"></i>
                        <h3>Transparencia & Costo Efeciente</h3>
                        <p>Trabajamos para hacer rendir cada centavo del presupuesto priorizando siempre la calidad del producto en pantalla. Estamos acostumbrados a trabajar de igual a igual con el cliente abriendo costos, discutiendo presupuestos y tomando las mejores decisiones en conjunto.</p>
                    </li>
                    </li>
                    <li>
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        <h3>Alto estándar de calidad</h3>
                        <p>Con una capacitación constante y una investigación ardua buscamos estar siempre en la vanguardia de las innovaciones tecnológicas y los planteos de estándar de calidad mundial. Para ello tenemos asociaciones estratégicas con las compañías de soluciones técnicas más confiables de América Latina.</p>
                    </li>
                    </li>
                    <li>
                        <i class="fa fa-umbrella" aria-hidden="true"></i>
                        <h3>Flexibilidad</h3>
                        <p>El trabajo en conjunto y el desarrollo de etapas logra que generemos proyectos a medida para la necesidad de cada cliente.</p>
                    </li>
                </ul>
            </div>
        </section>

        <section id="facts">
            <div class="content">
                <h2>Hechos y Cifras</h2>
                <div class="points-bar">...</div>

                <article class="industry">
                    <h3>Con 7 años en la industria Producciones del Volga se ha fortalecido como una compañía narradora de la historia y de la actualidad.</h3>
                </article>

                <article class="paises">
                    <h3>Países</h3>
                    <ul class="pais">
                        <li>
                            <img src="/img/paises/latam.jpg" alt="">
                            <h4>LATAM</h4>
                        </li>
                        <li>
                            <img src="/img/paises/francia.jpg" alt="">
                            <h4>France</h4>
                        </li>
                        <li>
                            <img src="/img/paises/alemania.jpg" alt="">
                            <h4>Germany</h4>
                        </li>
                        <li>
                            <img src="/img/paises/espania.jpg" alt="">
                            <h4>Spain</h4>
                        </li>
                        <li>
                            <img src="/img/paises/reinounido.jpg" alt="">
                            <h4>United Kingdom</h4>
                        </li>
                        <li>
                            <img src="/img/paises/eeuu.jpg" alt="">
                            <h4>United States of America</h4>
                        </li>
                    </ul>
                </article>

            </div>
        </section>

    </section>

    

    @include('layouts.footer')

@endsection