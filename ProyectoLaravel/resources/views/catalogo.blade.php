<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Hosting | Teamplate</title>
    <meta name="description" content="">
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

    <style>
        /*CATALOGO*/
        .plants-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .plant-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            height: 350px;
        }

        .plant-card:hover {
            transform: translateY(-10px);
        }

        .plant-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .plant-info {
            padding: 1.5rem;
            text-align: center;
        }

        .plant-name {
            font-size: 1.8rem;
            color: #F067FF;
        }

        .info-button {
            font-family: "Poppins", sans-serif;
            font-size: 1rem;
            font-weight: 400;
            padding: 12px 24px;
            border: 1px solid #F067FF;
            color: #F067FF !important;
            background: #fff;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .info-button:hover {
            background-color: #F067FF;
            color: #fff !important;
        }

        .plantas-body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7fd;
            color: #646D77;
        }

        .plantas-header {
            background-color: #2D0A31;
            color: white;
            text-align: center;
            padding: 1rem;
        }

        .plantas-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .plantas-plant-header {
            display: flex;
            align-items: center;
            margin-bottom: 2.5rem;
        }

        .plantas-plant-image {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 2rem;
        }

        .plantas-plant-title h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.8rem;
            color: #F067FF;
            margin-bottom: 1rem;
        }

        .plantas-scientific-name {
            font-style: italic;
            color: #A5A7C5;
            margin-bottom: 1.5rem;
        }

        .plantas-info-section h2 {
            font-family: 'Poppins', sans-serif;
            color: #F067FF;
            border-bottom: 2px solid #F067FF;
            padding-bottom: 0.5rem;
            margin-bottom: 2rem;
        }

        .plantas-info-section ul {
            padding-left: 1.5rem;
        }

        .plantas-info-section li {
            margin-bottom: 1rem;
        }

        .plantas-back-button {
            background-color: white;
            color: #F067FF;
            border: 1px solid #F067FF;
            padding: 18px 28px; /* Aumentado el padding para hacer el botón más grande */
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.2rem; /* Aumentado el tamaño de letra */
            font-weight: 500;  /* Añadido un poco de peso a la fuente para destacar más */
            transition: background-color 0.3s ease, color 0.3s ease;
            text-decoration: none;
            display: inline-block;
            letter-spacing: 0.5px; /* Mejora la legibilidad */
        }

        .plantas-back-button:hover {
            background-color: #F067FF;
            color: white;
        }

        .plantas-footer {
            background-color: #2D0A31;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }
    </style>

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
                                <h1 data-animation="fadeInLeft" data-delay=".6s ">CATÁLOGO DE PLANTAS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
            <div class="slider-shape d-none d-lg-block">
                <img class="slider-shape1" src="assets/img/hero/top-left-shape.png" alt="">
            </div>
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