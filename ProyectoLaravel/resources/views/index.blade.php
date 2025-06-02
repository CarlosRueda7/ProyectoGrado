<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Hosting | Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{ route('index') }}"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                            <li><a href="{{ route('index') }}">Home</a></li>
                                                <li><a href="{{ route('catalogo') }}">Catálogo</a></li>
                                                <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                                                <li><a href="{{ route('dispositivos.index') }}">Mis Dispositivos</a></li>
                                                <!-- Button -->
                                                <li class="button-header margin-left "><a href="{{ route('perfil') }}" class="btn">Mi Perfil</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!-- Slider Area Start-->
        <div class="slider-area slider-bg ">
    <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider d-flex align-items-center slider-height ">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-9 ">
                        <div class="hero__caption">
                            <span data-animation="fadeInLeft" data-delay=".3s">🌿 Bienvenido al futuro del cuidado de tus plantas 🌱</span>
                            <h1 data-animation="fadeInLeft" data-delay=".6s">Sistema IoT para el cuidado de tus plantas</h1>
                            <p data-animation="fadeInLeft" data-delay=".8s">Descubre cómo nuestro prototipo IoT revoluciona el monitoreo y optimización del cuidado de tus plantas domésticas, mejorando su salud y tu bienestar.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="hero__img d-none d-lg-block f-right">
                            <img src="assets/img/hero/planta2.png" alt="Sistema IoT para plantas" data-animation="fadeInRight" data-delay="1s" class="reduced-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>      
        <!-- Single Slider -->

    <!-- Slider Shape -->
    <div class="slider-shape d-none d-lg-block">
        <img class="slider-shape1" src="assets/img/hero/top-left-shape.png" alt="">
    </div>
</div>
        <!-- Slider Area End -->
        <!-- Domain-search start -->
        <div class="domain-search-area section-bg1">
           <div class="container">
               <div class="row">
                   <div class="col-xl-8 col-lg-7">
                    <!--Hero form -->
                    <form action="#" class="search-box">
                    </form>	
                    <!-- Domain List -->
                    <!-- Domain List  End-->
                </div>
            </div>
        </div>
    </div>
    <!-- Domain-search End -->
    <!--? Team -->
    <section class="team-area section-padding40 section-bg1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="section-tittle text-center mb-105">
                    <h2>CATÁLOGO DE PLANTAS</h2>
                </div>
            </div>
        </div>
            <div class="container section-padding">
        <div class="plants-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="plant-card white-bg shadow-md rounded-lg overflow-hidden hover:translate-y-[-5px] transition">
                <img src="{{ asset('assets/img/flores/suegra.jpg') }}" alt="Sansevieria" class="plant-image">
                <div class="plant-info p-6 text-center">
                    <h2 class="plant-name theme-color text-2xl mb-4">Sansevieria</h2>
                    <button class="info-button" onclick="location.href='{{ route('suegra') }}'">Más información</button>
                </div>
            </div>

            <div class="plant-card white-bg shadow-md rounded-lg overflow-hidden hover:translate-y-[-5px] transition">
                <img src="{{ asset('assets/img/flores/corona.jpg') }}" alt="Corona de Cristo" class="plant-image">
                <div class="plant-info p-6 text-center">
                    <h2 class="plant-name theme-color text-2xl mb-4">Corona de Cristo</h2>
                    <button class="info-button" onclick="location.href='{{ route('corona') }}'">Más información</button>
                </div>
            </div>


            <div class="plant-card white-bg shadow-md rounded-lg overflow-hidden hover:translate-y-[-5px] transition">
                <img src="{{ asset('assets/img/flores/aloe.jpeg') }}" alt="Aloe Vera" class="plant-image">
                <div class="plant-info p-6 text-center">
                    <h2 class="plant-name theme-color text-2xl mb-4">Aloe Vera</h2>
                    <button class="info-button" onclick="location.href='{{ route('aloe') }}'">Más información</button>
                </div>
            </div>

            <div class="plant-card white-bg shadow-md rounded-lg overflow-hidden hover:translate-y-[-5px] transition">
                <img src="{{ asset('assets/img/flores/coleo.jpg') }}" alt="Cóleo" class="plant-image">
                <div class="plant-info p-6 text-center">
                    <h2 class="plant-name theme-color text-2xl mb-4">Cóleo</h2>
                    <button class="info-button" onclick="location.href='{{ route('coleo') }}'">Más información</button>
                </div>
            </div>

            <div class="plant-card white-bg shadow-md rounded-lg overflow-hidden hover:translate-y-[-5px] transition">
                <img src="{{ asset('assets/img/flores/croton.jpeg') }}" alt="Crotón de Jardín" class="plant-image">
                <div class="plant-info p-6 text-center">
                    <h2 class="plant-name theme-color text-2xl mb-4">Crotón de Jardín</h2>
                    <button class="info-button" onclick="location.href='{{ route('croton') }}'">Más información</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>

    <!-- ask questions -->
    <section class="ask-questions section-bg1 section-padding30 fix"> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-10 ">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-90">
                    <h2>Preguntas más frecuentes</h2>
                    <p>Optimice el cuidado de sus plantas con nuestro sistema de monitoreo basado en IoT. Le ayudamos a optimizar y personalizar el cuidado de sus plantas.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-question d-flex mb-50">
                    <span> Q.</span>
                    <div class="pera">
                        <h2>¿A quién está dirigido este prototipo?</h2>
                        <p>Está dirigido a personas con poca o nula experiencia en jardinería que deseen mejorar el cuidado de sus plantas en el área metropolitana de Bucaramanga.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-question d-flex mb-50">
                    <span> Q.</span>
                    <div class="pera">
                        <h2>¿Cómo funciona el sistema IoT para el cuidado de plantas?</h2>
                        <p>El sistema utiliza una red de sensores que monitorean parámetros como la humedad, temperatura, luz y pH del suelo. Los datos recolectados son analizados en tiempo real para proporcionar recomendaciones personalizadas y alertas.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-question d-flex mb-50">
                    <span> Q.</span>
                    <div class="pera">
                        <h2>¿Qué tipo de plantas pueden ser monitoreadas con este sistema?</h2>
                        <p>El prototipo está diseñado para las cinco especies de plantas domésticas más comunes en el área metropolitana de Bucaramanga, identificadas a través de encuestas y consultas especializadas.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-question d-flex mb-50">
                    <span> Q.</span>
                    <div class="pera">
                        <h2>¿Qué tecnología utiliza el prototipo?</h2>
                        <p>Utiliza sensores IoT para medir variables ambientales, una red de comunicación para enviar datos y una plataforma digital para visualizar la información en tiempo real.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 ">
                <div class="more-btn text-center mt-20">
                    <a href="{{ route('nosotros') }}" class="btn">Más Información</a>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- End ask questions -->

    <!--? Testimonial Area End -->
</main>

<footer>
    <div class="footer-wrappr " data-background="assets/img/gallery/footer-bg.png">
            <div class="footer-area footer-padding ">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo mb-25">
                                    <a href="{{ route('index') }}"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <!-- imagen debajo del logo -->
                                <div class="footer-img">
                                    <img src="assets/img/footer/footer-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>

<!-- Video bg -->
<script src="./assets/js/jquery.vide.js"></script>

<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="./assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>