<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Información del Sensor DHT11</title>
    <meta name="description" content="Detalles y datos del sensor DHT11 de temperatura y humedad.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
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
    <header>
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{ route('index') }}"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="{{ route('index') }}">Home</a></li>
                                                <li><a href="{{ route('catalogo') }}">Catálogo</a></li>
                                                <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                                                <li><a href="{{ route('dispositivos.index') }}">Mis Dispositivos</a></li>
                                                <li class="button-header margin-left "><a href="{{ route('perfil') }}" class="btn">Mi Perfil</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>
    <main>
<div class="slider-area slider-bg ">
    <div class="single-slider d-flex align-items-center slider-height3">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-12 ">
                    <div class="hero__caption hero__caption3 text-center">
                        <h1 data-animation="fadeInLeft" data-delay=".6s ">Sensor DHT11</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="plantas-container">
    <div class="plantas-plant-header">
        <img src="{{ asset('assets/img/sensores/dth11.jpeg') }}" alt="Sansevieria" class="plantas-plant-image">
        <div class="plantas-plant-title">
            <h1>Sensor DHT11</h1>
            <p class="plantas-scientific-name">Sensor Digital de Temperatura y Humedad</p>
            <p>El DHT11 es un sensor básico de temperatura y humedad digital, ideal para proyectos de electrónica y robótica debido a su bajo costo y facilidad de uso.</p>
        </div>
    </div>

    <div class="plantas-plant-info">
        <div class="plantas-info-section">
            <h2>Características Principales</h2>
            <ul>
                <li><strong>Tipo:</strong> Sensor digital de temperatura y humedad.</li>
                <li><strong>Rango de Medición de Temperatura:</strong> 0°C a 50°C.</li>
                <li><strong>Precisión de Temperatura:</strong> ±2°C.</li>
                <li><strong>Rango de Medición de Humedad:</strong> 20% a 90% RH.</li>
                <li><strong>Precisión de Humedad:</strong> ±5% RH.</li>
                <li><strong>Voltaje de Funcionamiento:</strong> 3V a 5.5V.</li>
                <li><strong>Consumo de Corriente:</strong> 2.5mA (en conversión), 100uA (en reposo).</li>
                <li><strong>Interfaz:</strong> Un solo cable digital (bus de datos).</li>
            </ul>
        </div>

        <div class="plantas-info-section">
            <h2>Uso y Conexión</h2>
            <ul>
                <li><strong>Pines:</strong> VCC (alimentación), GND (tierra), DATA (datos).</li>
                <li><strong>Conexión:</strong> Generalmente se conecta a un microcontrolador (Arduino, ESP32, Raspberry Pi) a través de su pin DATA.</li>
                <li><strong>Librerías:</strong> Requiere librerías específicas (ej. DHT sensor library para Arduino) para interpretar los datos.</li>
                <li><strong>Aplicaciones Comunes:</strong> Estaciones meteorológicas caseras, sistemas de monitoreo de invernaderos, proyectos de domótica.</li>
            </ul>
        </div>

        <div class="plantas-info-section">
            <h2>Consideraciones Adicionales</h2>
            <p>Aunque el DHT11 es muy popular por su simplicidad, es importante tener en cuenta que el DHT22 ofrece mayor precisión y un rango de medición más amplio para aplicaciones donde se requiere mayor exactitud.</p>
        </div>
    </div>

    <button class="boxed-btn" onclick="location.href='{{ route('catalogo') }}'">Regresar</button>

</div>
</main>
    <footer>
    <div class="footer-wrappr " data-background="assets/img/gallery/footer-bg.png">
            <div class="footer-area footer-padding ">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-logo mb-25">
                                    <a href="{{ route('index') }}"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
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

      <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <script src="./assets/js/gijgo.min.js"></script>

    <script src="./assets/js/jquery.vide.js"></script>

    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.barfiller.js"></script>

    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>
</html>