<footer>
    <section id="footer-content">
        <div class="content">
            <div class="about">
                <img src="/img/logo21.png" alt="">
                <p>
                    Producciones del Volga nació en 2011 y hasta la fecha ha realizado producciones originales para The History Channel, Discovery H&H, Biography Channel y Yahoo! Argentina. Lentamente, pero a paso firme queremos que nuestros proyectos hablen por nosotros mismos. Nuestra especialidad es la realización de producciones latinoamericanas, ya que contamos con equipos locales y con productores y guionistas especializados en este tipo de fusiones panregionales.
                </p>
            </div>
            <div class="links">
                <h3>Links</h3>
                <ul>
                    <li><a href="/index" target="_blank">Inicio</a></li>
                    <li><a href="/about" target="_blank">Sobre Nosotros</a></li>
                    <li><a href="/reel" target="_blank">Reel</a></li>
                    <li><a href="http://www.betaplus.tv" target="_blank">Betaplus RM</a></li>
                    <li><a href="/contact" target="_blank">Contacto</a></li>
                </ul>
            </div>
            <div class="contact">
                <h3>CONTACTO</h3>
                <ul>
                    <li>produccion@delvolga.com.ar</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="footer-copy">
        <div class="content">
            <p>© 2018 VOLGA PRODUCCIONES. ALL RIGHTS RESERVED</p>
            <ul>
                <li><a href="https://www.linkedin.com/in/jorge-luis-sucksdorf-74a56215/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </section>
</footer>

<script>
    $('.boton-responsive').click(function() {
        if( $('.menu-responsive').css('display') == 'none') {
            $('.menu-responsive').fadeIn(function(){
                $('.menu-responsive').css('display', 'block')
            })
        } else {
            $('.menu-responsive').fadeOut(function(){
                $('.menu-responsive').css('display', 'none')
            })
        }
    });
</script>

<script>
    $(document).ready(function(){
	   $(window).bind('scroll', function() {
            var navHeight = 150;
            if ($(window).scrollTop() > navHeight) {
                $('nav').addClass('navEffect');
                $('.menu-responsive').addClass('ef');
                $('.b').addClass('bi');
                $('.logo').addClass('logoEffect');
                $('.item').addClass('menuEffect');
            }
            else {
                $('nav').removeClass('navEffect');
                $('.logo').removeClass('logoEffect');
                $('.item').removeClass('menuEffect');
                $('.menu-responsive').removeClass('ef');
                $('.b').removeClass('bi');
            }
		});
	});
</script>