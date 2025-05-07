<!DOCTYPE html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mis Dispositivos | Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
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
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
    /* Estilos generales (sin cambios) */
    body {
        color: #333;
    }

    #about-us-page {
        background-color: #f7f7fd;
        padding: 50px;
        margin-top: 30px;
        font-family: "Open Sans", sans-serif;
    }

    #listaDispositivos {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Valor por defecto para pantallas pequeñas */
        gap: 30px;
    }

    /* Estilos específicos para las tarjetas (sin cambios) */
    #listaDispositivos .card {
        background-color: #fff;
        border: none;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    #listaDispositivos .card .card-body {
        padding: 30px;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    #listaDispositivos .card .card-title {
        font-family: "Poppins", sans-serif;
        font-size: 1.5rem;
        font-weight: 600;
        color: #16161a;
        margin-bottom: 1.25rem;
    }

    #listaDispositivos .card .card-subtitle {
        font-size: 1.1rem;
        color: #777;
        margin-bottom: 1.5rem;
    }

    #listaDispositivos .card .card-text {
        font-size: 1.2rem;
        color: #555;
        margin-bottom: 1.5rem;
        flex-grow: 1;
    }

    #listaDispositivos .card .card-actions {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: auto;
        padding-top: 30px;
        border-top: 1px solid #eee;
        flex-wrap: nowrap;
    }

    /* Estilos comunes para todos los botones */
    .common-btn {
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
        margin: 10px; /* Added margin */
    }

    .common-btn:hover {
        background: #F067FF;
        color: #fff !important;
    }

    /* Estilos específicos para los botones de la tarjeta */
    #listaDispositivos .card .btn {
        /* Usamos la clase común */
    }

    #listaDispositivos .card .btn-danger {
        border-color: #dc3545;
        color: #dc3545 !important;
        margin-left: 10px; /* Modified margin (or 0 if you prefer) */
    }

    #listaDispositivos .card .btn-danger:hover {
        background-color: #dc3545;
        color: #fff !important;
    }

    /* Estilos para el formulario */
    #formularioAgregarDispositivo {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    #formularioAgregarDispositivo h3 {
        font-family: "Poppins", sans-serif;
        font-size: 1.3rem;
        color: #16161a;
        margin-bottom: 50px;
    }

    #formularioAgregarDispositivo .form-label {
        font-weight: 600;
        color: #333;
    }

    #formularioAgregarDispositivo .form-control,
    #formularioAgregarDispositivo .form-select {
        border: 1px solid #ccc;
        border-radius: 6px;
        padding: 12px;
        font-size: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        text-align: left;
    }

    #formularioAgregarDispositivo .form-actions {
        display: flex;
        justify-content: flex-start;
        margin-top: 40px;
    }

    #formularioAgregarDispositivo .btn-success {
        /* Usamos la clase común */
        background-color: #28a745;
        color: #fff;
        border: none;
        padding: 15px 30px;
        margin-right: 10px;
        margin-top: 50px;
        font-size: 1rem;
        margin: 10px; /* Added margin */
    }

    #formularioAgregarDispositivo .btn-success:hover {
        background-color: #218838;
    }

    #formularioAgregarDispositivo .btn-secondary {
        /* Usamos la clase común */
        background-color: #6c757d;
        color: #fff;
        border: none;
        padding: 15px 30px;
        margin-left: 10px;
        margin-top: 50px;
        font-size: 1rem;
        margin: 10px; /* Added margin */
    }

    #formularioAgregarDispositivo .btn-secondary:hover {
        background-color: #545b62;
    }

    /* Media query para pantallas medianas y grandes (tablets y escritorios) */
    @media (min-width: 768px) {
        #listaDispositivos {
            grid-template-columns: repeat(2, minmax(300px, 1fr)); /* Fuerza 2 columnas */
        }
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
                                    <a href="{{ route('index') }}"><img src="{{ asset('assets/img/logo/logo.png') }}" alt=""></a>
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
                                <h1 data-animation="fadeInLeft" data-delay=".6s ">MIS DISPOSITIVOS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="about-us-page">
            <div class="container">
                <button id="agregarDispositivoBtn" class="btn btn-primary mb-3" onclick="mostrarFormularioAgregar()">
                    <i class="fas fa-plus"></i> Añadir Dispositivo
                </button>

                <div id="formularioAgregarDispositivo" style="display: none;">
                    <h3>Añadir Nuevo Dispositivo</h3>
                    <form id="formNuevoDispositivo">
                        <div class="mb-3">
                            <label for="id_dispositivo" class="form-label">ID del Dispositivo:</label>
                            <input type="text" class="form-control" id="id_dispositivo" name="id_dispositivo" required>
                        </div>
                        <div class="mb-3">
                            <label for="nombre_planta" class="form-label">Nombre para la Planta:</label>
                            <input type="text" class="form-control" id="nombre_planta" name="nombre_planta" required>
                        </div>
                        <div class="mb-3">
                            <label for="planta_seleccionada" class="form-label">Planta:</label>
                            <select class="form-select" id="planta_seleccionada" name="planta_seleccionada" required>
                                <option value="">Seleccionar Planta</option>
                                <option value="Sansevieria">Sansevieria</option>
                                <option value="Corona de Cristo">Corona de Cristo</option>
                                <option value="Aloe Vera">Aloe Vera</option>
                                <option value="Cóleo">Cóleo</option>
                                <option value="Crotón de Jardín">Crotón de Jardín</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Guardar Dispositivo
                        </button>
                        <button type="button" class="btn btn-secondary" onclick="ocultarFormularioAgregar()">
                            <i class="fas fa-times"></i> Cancelar
                        </button>
                    </form>
                    <div id="mensajeResultado" class="mt-3"></div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="listaDispositivos">
                    </div>
            </div>
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
                                    <a href="{{ route('index') }}"><img src="{{ asset('assets/img/logo/logo2_footer.png') }}" alt=""></a>
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
        <div id="back-top" >
            <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>
    </footer>

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

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            cargarDispositivos();

            $('#formNuevoDispositivo').submit(function(event) {
                event.preventDefault();
                agregarNuevoDispositivo();
            });
        });

        function cargarDispositivos() {
    $.ajax({
        url: '/dispositivos/data',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#listaDispositivos').empty();
            if (data.success && data.dispositivos.length > 0) {
                $.each(data.dispositivos, function(index, dispositivo) {
                    $('#listaDispositivos').append(`
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div class="mb-3">
                                        <h5 class="card-title">${dispositivo.nombre_planta}</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Planta: ${dispositivo.planta_seleccionada}</h6>
                                        <p class="card-text small">ID: ${dispositivo.id_dispositivo}</p>
                                    </div>
                                    <div class="card-actions mt-2">
                                        <a href="/dispositivos/${dispositivo.id}" class="btn btn-sm btn-primary me-2"><i class="fas fa-eye"></i> Ver Detalles</a>
                                        <button class="btn btn-danger btn-sm" onclick="eliminarDispositivo(${dispositivo.id})"><i class="fas fa-trash-alt"></i> Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);
                });
            } else {
                $('#listaDispositivos').append('<div class="col"><div class="alert alert-info">No hay dispositivos registrados.</div></div>');
            }
        },
        error: function(xhr, status, error) {
            console.error("Error al cargar dispositivos:", error);
            $('#listaDispositivos').append('<div class="col"><div class="alert alert-danger">Error de conexión con el servidor.</div></div>');
        }
    });
}

        function mostrarFormularioAgregar() {
            $('#formularioAgregarDispositivo').show();
        }

        function ocultarFormularioAgregar() {
            $('#formularioAgregarDispositivo').hide();
            $('#mensajeResultado').empty();
            $('#formNuevoDispositivo')[0].reset();
        }

        function agregarNuevoDispositivo() {
            $.ajax({
                url: '/dispositivos',
                method: 'POST',
                dataType: 'json',
                data: $('#formNuevoDispositivo').serialize(),
                success: function(data) {
                    if (data.success) {
                        $('#mensajeResultado').removeClass('alert-danger').addClass('alert-success').text(data.message);
                        console.log('Cargando dispositivos después de guardar');
                        cargarDispositivos();
                        $('#formNuevoDispositivo')[0].reset();
                        setTimeout(ocultarFormularioAgregar, 2000);
                    } else {
                        $('#mensajeResultado').removeClass('alert-success').addClass('alert-danger').text(data.message);
                        if (data.errors) {
                            console.error("Errores de validación:", data.errors);
                            // Aquí podrías mostrar los errores de validación específicos en el formulario
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error al agregar dispositivo:", error);
                    $('#mensajeResultado').removeClass('alert-success').addClass('alert-danger').text('Error al comunicar con el servidor.');
                }
            });
        }

        function eliminarDispositivo(id) {
    if (confirm('¿Estás seguro de que quieres eliminar este dispositivo?')) {
        $.ajax({
            url: '/dispositivos/' + id,
            method: 'DELETE',
            dataType: 'json',
            success: function(data) {
                if (data.success) {
                    $('#mensajeResultado').removeClass('alert-danger').addClass('alert-success').text(data.message);
                    cargarDispositivos(); // Recargar la lista después de eliminar
                } else {
                    $('#mensajeResultado').removeClass('alert-success').addClass('alert-danger').text(data.message);
                }
            },
            error: function(xhr, status, error) {
                console.error("Error al eliminar dispositivo:", error);
                $('#mensajeResultado').removeClass('alert-success').addClass('alert-danger').text('Error al comunicar con el servidor.');
            }
        });
    }
}
    </script>

</body>
</html>

                            
                            