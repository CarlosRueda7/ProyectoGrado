<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Detalles de {{ $dispositivo->nombre_planta }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        /* Estilos específicos para la página de detalles de la planta */
        .plantas-container {
            background-color: #f7f7fd;
            padding: 40px; /* Aumenta el padding para más espacio interior */
            margin-top: 40px; /* Aumenta el margen superior */
            font-family: "Open Sans", sans-serif;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); /* Sombra más pronunciada */
            max-width: 900px; /* Aumenta el ancho máximo del cuadro */
            margin-left: auto;
            margin-right: auto;
            display: flex; /* Añadimos flex para ordenar los elementos */
            flex-direction: column; /* Colocamos los elementos en columna */
            align-items: center; /* Centramos los elementos horizontalmente (opcional) */
        }

        .plantas-plant-header {
            display: flex;
            align-items: center;
            margin-bottom: 30px; /* Aumenta el margen inferior */
            border-bottom: 1px solid #eee;
            padding-bottom: 30px; /* Aumenta el padding inferior */
            width: 100%; /* Aseguramos que el header ocupe todo el ancho */
        }

        .plantas-plant-image {
            width: 180px; /* Aumenta el ancho de la imagen */
            height: 180px; /* Aumenta la altura de la imagen */
            border-radius: 10px;
            object-fit: cover;
            margin-right: 30px; /* Aumenta el margen derecho */
        }

        .plantas-plant-title h1 {
            font-family: "Poppins", sans-serif;
            font-size: 2.5rem; /* Aumenta el tamaño del título */
            color: #16161a;
            margin-bottom: 8px; /* Aumenta el margen inferior */
        }

        .plantas-plant-title p {
            font-size: 1.2rem; /* Aumenta el tamaño del texto */
            color: #777;
            margin-bottom: 8px; /* Aumenta el margen inferior */
        }

        .boxed-btn {
            font-family: "Poppins", sans-serif;
            font-size: 1.1rem; /* Aumenta el tamaño del botón */
            font-weight: 400;
            padding: 15px 30px; /* Aumenta el padding del botón */
            border: 1px solid #F067FF;
            color: #F067FF !important;
            background: #fff;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 20px; /* Espacio superior (opcional) */
            width: fit-content; /* Ajusta el ancho del botón al contenido */
        }

        .boxed-btn:hover {
            background: #F067FF;
            color: #fff !important;
        }

        .mb-3 {
            margin-bottom: 2rem; /* Aumenta el margen inferior del botón regresar */
        }
    </style>


</head>

<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/img/logo/loder.png') }}" alt="">
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
                                    <a href="{{ route('index') }}"><img src="{{ asset('assets/img/logo/logo.png') }}"
                                            alt=""></a>
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
                                                <li class="button-header margin-left "><a href="{{ route('perfil') }}"
                                                        class="btn">Mi Perfil</a></li>
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
                                <h1 data-animation="fadeInLeft" data-delay=".6s " id="nombrePlantaTitulo">
                                    {{ $dispositivo->nombre_planta }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="plantas-container">
            <div class="plantas-plant-header">
                <img src="{{ asset('assets/img/flores/aloe.jpeg') }}" alt="{{ $dispositivo->nombre_planta }}"
                    class="plantas-plant-image">
                <div class="plantas-plant-title">
                    <h1 id="nombrePlantaDetalle">{{ $dispositivo->nombre_planta }}</h1>
                    <p class="plantas-scientific-name">ID: {{ $dispositivo->id_dispositivo }}</p>
                    <p id="tipoPlantaDetalle">
                        Tipo de Planta: Aloe Vera
                    </p>
                </div>
                <iframe src="http://172.191.63.99:3000/d-solo/bekhr65jgftogf/visualizacion?orgId=1&from=1746986826408&to=1747008426408&timezone=browser&panelId=3&__feature.dashboardSceneSolo" width="450" height="200" frameborder="0"></iframe>
            </div>
            <button class="boxed-btn mb-3" onclick="location.href='{{ route('dispositivos.index') }}'">Regresar</button>
        </div>
    </main>
    <footer>
        <div class="footer-wrappr " data-background="{{ asset('assets/img/gallery/footer-bg.png') }}">
            <div class="footer-area footer-padding ">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-logo mb-25">
                                    <a href="{{ route('index') }}"><img
                                            src="{{ asset('assets/img/logo/logo2_footer.png') }}" alt=""></a>
                                </div>
                                <div class="footer-img">
                                    <img src="{{ asset('assets/img/footer/footer-img.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

    <script src="{{ asset('assets/js/gijgo.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.vide.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/hover-direction-snake.min.js') }}"></script>

    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- <script>
        $(document).ready(function () {
            // Obtener el ID del dispositivo de la URL
            const urlParams = new URLSearchParams(window.location.search);
            const dispositivoId = urlParams.get('dispositivoId');

            if (dispositivoId) {
                // Realizar una llamada AJAX para obtener los detalles del dispositivo desde el servidor
                $.ajax({
                    url: '/api/dispositivos/' + dispositivoId, // Ajusta esta URL a la ruta de tu API
                    method: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        if (data.success && data.dispositivo) {
                            // Actualizar el HTML con los datos del dispositivo
                            $('#nombrePlantaTitulo').text(data.dispositivo.nombre_planta);
                            $('#nombrePlantaDetalle').text(data.dispositivo.nombre_planta);
                            $('#tipoPlantaDetalle').text(`Tipo de Planta: Corona de Cristo`); // Texto fijo
                            // Aquí podrías también actualizar otros detalles de la planta si es necesario
                        } else {
                            // Manejar el caso en que no se encuentra el dispositivo
                            alert('Dispositivo no encontrado');
                            window.location.href = "{{ route('catalogo') }}"; // Redirigir a la página de catálogo
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("Error al obtener detalles del dispositivo:", error);
                        alert('Error al obtener detalles del dispositivo');
                        window.location.href = "{{ route('catalogo') }}"; // Redirigir a la página de catálogo
                    }
                });
            } else {
                // Si no hay ID de dispositivo en la URL, redirigir a la página de catálogo
                alert('ID de dispositivo no especificado');
                window.location.href = "{{ route('catalogo') }}";
            }
        });
    </script> --}}
</body>

</html>