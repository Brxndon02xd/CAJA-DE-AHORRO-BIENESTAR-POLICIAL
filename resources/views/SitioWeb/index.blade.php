<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('SitioWeb/css/style.css')}}">
    <title>Maquetacion</title>
</head>
<body>
    <header id="inicio" class="header-formal">
        <div class="container">
            <nav class="navbar">
                <!-- Logo -->
                <div class="logo-container">
                    <img class="logo" src="{{asset('SitioWeb/img/poli.svg')}}" alt="Logo de la Cooperativa">
                </div>

                <!-- Botón hamburguesa -->
            <button class="hamburguesa" id="hamburguesa">
                <span class="linea"></span>
                <span class="linea"></span>
                <span class="linea"></span>
            </button>
    
            <!-- Menú de navegación -->
            <ul class="menu" id="menu">
                <li><a href="#inicio" class="nav-link">Inicio</a></li>
                <li><a href="#quienessomos" class="nav-link">Quiénes Somos</a></li>
                <li><a href="#proyser" class="nav-link">Productos y Servicios</a></li>
                <li><a href="#objetivos" class="nav-link">Objetivos</a></li>
                <li><a href="#nuestrosvalores" class="nav-link">Nuestros Valores</a></li>
            </ul>
    
                <!-- Redes sociales -->
                <div class="socials">
                    @foreach($getRedes as $getRedess)
                    <a href="https://wa.link/wapxvg" class="social-link" target="_blank">
                        <img src="{{asset('SitioWeb/img/icons8-whatsapp.svg')}}" alt="WhatsApp">
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61570093661516&mibextid=ZbWKwL" class="social-link" target="_blank">
                        <img src="{{asset('SitioWeb/img/icons8-facebook-nuevo.svg')}}" alt="Facebook">
                    </a>
                    <a href="#" class="social-link">
                        <img src="{{asset('SitioWeb/img/icons8-instagram.svg')}}" alt="Instagram">
                    </a>
                    @endforeach
                </div>
            </nav>
        </div>
    </header>

    <main>
    <div id="quienessomos" class="header-content container">
        <div class="swiper mySwiper-1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider">
                        <div class="slider-txt">
                            <h1>¿QUIÉNES SOMOS?</h1>
                            <p>
                                Es una sociedad civil de derecho privado, que se rige por las disposiciones de las Leyes de la,
                                 Superintendencia de Economía Popular y Solidaria (SEPS), Código Orgánico Monetario Financiero (COMYF) y demás normativas aplicables,
                                  así como por el Estatuto y los Reglamentos Internos.
                            </p>
                        </div>
                        <div class="slider-img">
                            <img src="{{asset('SitioWeb/img/a12w.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider">
                        <div class="slider-txt">
                            <h1>MISIÓN</h1>
                            <p>
                                Ofrecemos soluciones financieras innovadoras y personalizadas para la comunidad policial del Ecuador, 
                                promoviendo su bienestar económico, estabilidad y crecimiento. 
                                Nos comprometemos a ser un aliado de confianza, brindando ventajas competitivas mediante un enfoque dedicado al bienestar financiero de las familias policiales.
                            </p>
                        </div>
                        <div class="slider-img">
                            <img src="{{asset('SitioWeb/img/abced.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider">
                        <div class="slider-txt">
                            <h1>VISIÓN</h1>
                            <p>
                                Ser reconocidos como la institución financiera de elección para la comunidad policial en el Ecuador, 
                                líderes en confianza, crecimiento sostenible, comprometidos con la excelencia, calidad e innovación tecnológica, 
                                apoyo y bienestar económico para los servidores policiales técnicos operativos y sus familias. 
                            </p>
                        </div>
                        <div class="slider-img">
                            <img src="{{asset('SitioWeb/img/xzc.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
  
     <!-- Sección Producto y Servicios -->
<section id="proyser" class="productos-servicios">
    <h4>Productos y Servicios</h4>
    <div class="productos">
        <div class="producto">
            <img src="{{asset('SitioWeb/img/ahorro.png')}}" alt="Ahorro">
            <p>Ahorro</p>
        </div>
        <div class="producto">
            <img src="{{asset('SitioWeb/img/credito.png')}}" alt="Crédito">
            <p>Crédito</p>
        </div>
        <div class="producto">
            <img src="{{asset('SitioWeb/img/efinanciera.png')}}" alt="Educación Financiera">
            <p>Educación Financiera</p>
        </div>
    </div>
</section>

<section id="objetivos" class="seccion-objetivos">
    <div class="contenedor-objetivos">
        <h2 class="titulo-objetivos">OBJETIVOS</h2>
        <ul class="lista-objetivos">
            <li>Recibir de los Servidores policiales activos y pasivos, depósitos de ahorro a la vista, ahorro especial en la modalidad de inversión programada a plazo mayor, en moneda de curso legal.</li>
            <li>Conceder préstamos, en las condiciones, montos y plazos que se establezca en el manual de crédito.</li>
            <li>Desarrollar actividades de Educación, capacitación y beneficio social, conforme lo establezcan los Reglamentos;</li>
            <li>Realizar operaciones financieras en todo el territorio de la república del Ecuador mediante el nexo, convenio o vínculo empresarial con organizaciones, empresas, instituciones de la SEPS y otras que estén legalmente constituidas.</li>
        </ul>
    </div>
</section>


<section id="nuestrosvalores" class="Nuestro-Valores">
    <h4 class="titulo-seccion">Nuestros Valores</h4>
    <div class="planes">
        <div class="plan">
            <img src="{{asset('SitioWeb/img/Integridad.png')}}" alt="Integridad" class="icono">
            <h5 class="titulo-plan">Integridad</h5>
            <ul class="lista-detalles">
                <p>Operamos con transparencia
                    y honestidad, asegurando
                    que todas las transacciones
                    sean justas y responsables.
                    Mantenemos altos estándares
                    éticos para brindar un
                    ambiente seguro y confiable
                    a nuestros miembros</p>
            </ul>
        </div>
        <div class="plan">
            <img src="{{asset('SitioWeb/img/Excelencia.png')}}" alt="Exelencia" class="icono">
            <h5 class="titulo-plan">Excelencia</h5>
            <ul class="lista-detalles">
                <p>Nos esforzamos por ofrecer el
                    mejor servicio y gestión
                    financiera, garantizando
                    eficiencia y calidad en todas
                    nuestras operaciones para
                    satisfacer y superar las
                    expectativas de nuestros
                    miembros.</p>
            </ul>
        </div>
        <div class="plan">
            <img src="{{asset('SitioWeb/img/Cooperacion.png')}}" alt="Cooperacion" class="icono">
            <h5 class="titulo-plan">Cooperación</h5>
            <ul class="lista-detalles">
                <p>Trabajamos juntos para
                    apoyar y beneficiar a
                    todos nuestros
                    miembros, fomentando
                    un espíritu de ayuda
                    mutua y colaboración
                    en cada paso del
                    camino.</p>
            </ul>
        </div>
        <div class="plan">
            <img src="{{asset('SitioWeb/img/Innovacion.png')}}" alt="Innovacion" class="icono">
            <h5 class="titulo-plan">Innovación</h5>
            <ul class="lista-detalles">
                <p>Buscamos constantemente
                    nuevas y mejores maneras
                    de gestionar recursos y
                    ofrecer servicios
                    financieros avanzados que
                    beneficien a nuestros
                    miembros,
                    manteniéndonos a la
                    vanguardia del sector</p>
            </ul>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="footer-contenido">
      <!-- Sección de información -->
      <div class="footer-seccion">
        <h4>Sobre Nosotros</h4>
        <p>Somos una empresa dedicada a ofrecer soluciones innovadoras con un enfoque en la calidad y el profesionalismo.</p>
      </div>
  
      <!-- Sección de enlaces -->
      <div class="footer-seccion">
        <h4>Enlaces Útiles</h4>
        <ul class="enlaces">
          <li><a href="#inicio">Inicio</a></li>
          <li><a href="#servicios">Servicios</a></li>
          <li><a href="#contacto">Contacto</a></li>
          <li><a href="#politicas">Política de Privacidad</a></li>      
        </ul>
      </div>

      <!-- Sección de mapa -->
     <div class="footer-seccion">
     <h4>Encuéntranos</h4>
     <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3288.4622452542085!2d-78.50056072503541!3d-0.20342619979456952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMMKwMTInMTIuMyJTIDc4wrAyOSc1Mi44Ilc!5e1!3m2!1ses!2sec!4v1734097428552!5m2!1ses!2sec" 
            width="auto" 
            height="300" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
  
  
    <div class="footer-bottom">
      <p>&copy; 2024 Caja De Ahorro y Crédito Bienestar Policial. Todos los derechos reservados.</p>
    </div>
  </footer>
  
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="{{asset('SitioWeb/js/script.js')}}"></script>

</body>
</html>