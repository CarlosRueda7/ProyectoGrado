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
    /* Estilos generales */
    body { color: #333; }
    #about-us-page {
        background-color: #f7f7fd;
        padding: 50px;
        margin-top: 30px;
        font-family: "Open Sans", sans-serif;
    }
    #listaDispositivos {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    /* Estilos de las tarjetas */
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
        font-size: 1rem;
        color: #555;
        margin-bottom: 0.5rem;
    }
     #listaDispositivos .card .card-text.small {
         font-size: 0.9rem;
         color: #777;
     }

    /* Estilos para las acciones dentro de las tarjetas */
    #listaDispositivos .card .card-actions {
        display: flex;
        align-items: center;
        margin-top: auto;
        padding-top: 20px;
        border-top: 1px solid #eee;
        flex-wrap: wrap;
        gap: 10px; /* Espacio entre botones en la tarjeta */
    }
    /* Estilos de diseño para los elementos dentro de card-actions (presumiblemente botones) */
     #listaDispositivos .card .card-actions > * {
         flex-grow: 1;
         margin: 0 !important;
         /* white-space: nowrap; - Ya incluido en el estilo unificado */
         /* Los estilos visuales se aplican por el selector combinado de abajo */
     }

    /* --- ESTILO UNIFICADO PARA TODOS LOS BOTONES --- */
    /* Aplicamos estas propiedades a todos los selectores de botones */
    .common-btn,
    #listaDispositivos .card .btn-primary,
    #listaDispositivos .card .btn-danger,
    #agregarDispositivoBtn,
    #formularioAgregarDispositivo .btn-success,
    #formularioAgregarDispositivo .btn-secondary,
    .alert-button {
        font-family: "Poppins", sans-serif; /* Familia de fuente unificada */
        font-size: 1rem; /* Tamaño de letra unificado (tomado de #agregarDispositivoBtn) */
        font-weight: 400; /* Peso de fuente unificado */
        padding: 12px 24px; /* Padding unificado (tomado de #agregarDispositivoBtn/form buttons) */
        border: 1px solid #F067FF; /* Borde unificado (color rosa original) */
        color: #fff !important; /* Color de texto unificado (blanco) */
        background-color: #F067FF; /* Color de fondo unificado (rosa original) */
        border-radius: 6px; /* Borde radio unificado */
        cursor: pointer; /* Cursor unificado */
        transition: all 0.3s ease; /* Transición unificada */
        text-transform: uppercase; /* Texto en mayúsculas unificado */
        letter-spacing: 1px; /* Espaciado de letra unificado (tomado de common-btn) */
        text-align: center; /* Alineación de texto unificada */
        white-space: nowrap; /* Evita que el texto se rompa */
        display: inline-block; /* Asegura comportamiento consistente, útil para <a> */
        text-decoration: none; /* Elimina subrayado en links */
    }

    /* Estilo Hover Unificado para todos los botones */
    .common-btn:hover,
    #listaDispositivos .card .btn-primary:hover,
    #listaDispositivos .card .btn-danger:hover,
    #agregarDispositivoBtn:hover,
    #formularioAgregarDispositivo .btn-success:hover,
    #formularioAgregarDispositivo .btn-secondary:hover,
    .alert-button:hover {
        background: #d05ce6; /* Un color rosa ligeramente más oscuro para hover */
        border-color: #d05ce6;
        color: #fff !important;
    }
    /* --- FIN ESTILO UNIFICADO --- */


    /* Estilos para el botón "Añadir Dispositivo" - Mantiene solo su margen específico */
    #agregarDispositivoBtn {
        margin-bottom: 30px; /* Mantiene solo este margen específico */
        /* El resto de estilos visuales son sobrescritos por el selector unificado de arriba */
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
        font-size: 1.3rem; color: #16161a; margin-bottom: 30px;
    }
    #formularioAgregarDispositivo .form-label {
        font-weight: 600; color: #333; margin-bottom: 5px;
    }
    #formularioAgregarDispositivo .form-control,
    #formularioAgregarDispositivo .form-select { /* Esta regla se mantiene intacta */
        border: 1px solid #ccc; border-radius: 6px; margin-bottom: 20px;
        font-size: 1rem; width: 100%; box-sizing: border-box; display: block;
    }
     #formularioAgregarDispositivo .mb-3 {
         margin-bottom: 1rem !important;
     }

    /* Estilos para el contenedor de acciones del formulario (los botones Guardar y Cancelar) */
    #formularioAgregarDispositivo .form-actions {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: flex-start; /* Alinea a la izquierda por defecto */
        gap: 15px; /* Espacio entre botones */
        margin-top: 30px;
        width: 100%;
        box-sizing: border-box;
    }

    /* Estilos de diseño para los elementos dentro de form-actions (presumiblemente botones) */
    #formularioAgregarDispositivo .form-actions .btn {
        flex-grow: 0;
        flex-shrink: 0;
        width: auto;
        margin: 0 !important;
        /* white-space: nowrap; - Ya incluido en el estilo unificado */
        /* Los estilos visuales se aplican por el selector combinado de arriba */
    }


    /* Media query para pantallas medianas y grandes */
    @media (min-width: 768px) {
        #listaDispositivos { grid-template-columns: repeat(2, minmax(300px, 1fr)); }
         #listaDispositivos .card .card-actions { flex-direction: row; align-items: center; }
         #listaDispositivos .card .card-actions > * { margin: 0 !important; }


        /* En pantallas más grandes */
        #formularioAgregarDispositivo .form-actions .btn {
             flex-grow: 0;
             flex-shrink: 0;
             width: auto;
        }
         /* Asegúrate de que sigan alineados a la derecha en pantallas grandes */
         #formularioAgregarDispositivo .form-actions {
              justify-content: flex-end; /* Alinea a la derecha en sm+ */
         }
    }

    /* Media query para 3 columnas en pantallas grandes */
    @media (min-width: 992px) {
        #listaDispositivos { grid-template-columns: repeat(3, minmax(300px, 1fr)); }
    }

    /* Estilos para el modal de alerta personalizado */
    #customAlert {
        display: none; /* Se maneja con JS para mostrar */
        position: fixed; top: 0; left: 0; width: 100%; height: 100%;
        background-color: rgba(0, 0, 0, 0.5); display: flex; justify-content: center;
        align-items: center; z-index: 1050;
    }
    .alert-content {
        background-color: #fefefe; padding: 20px; border: 1px solid #888;
        width: 90%; max-width: 400px; border-radius: 5px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        text-align: left;
    }
    .alert-header {
        padding: 10px 0; margin-bottom: 15px; border-bottom: 1px solid #eee;
    }
    .alert-header h4 {
        margin: 0; color: #d9534f; font-weight: bold; font-size: 1.2rem;
    }
    .alert-body { padding: 15px 0; }
    .alert-body p { margin: 0; font-size: 1rem; color: #333; }
    .alert-footer {
        padding: 15px 0 0 0; border-top: 1px solid #eee; text-align: right;
    }
    /* El botón del modal de alerta ya está incluido en el selector combinado único arriba */


    /* Estilo para el indicador de carga en los botones */
     .regar-planta-btn .fa-spinner,
      #formularioAgregarDispositivo button[type="submit"] .fa-spinner
      {
         margin-right: 5px;
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
                <div class="header-bottom header-sticky">
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
                        @csrf <div class="mb-3">
                            <label for="id_dispositivo" class="form-label">ID del Dispositivo Hardware:</label>
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
                                <option value="aloeOpcion">Aloe Vera</option>
                                <option value="coleoOpcion">Cóleo</option>
                                <option value="coronaOpcion">Corona de Cristo</option>
                                <option value="crotonOpcion">Crotón de Jardín</option>
                                <option value="suegraOpcion">Sansevieria</option>
                            </select>
                        </div>
                        <div class="form-actions">
                             <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Guardar Dispositivo
                            </button>
                            <button type="button" class="btn btn-secondary" onclick="ocultarFormularioAgregar()">
                                <i class="fas fa-times"></i> Cancelar
                            </button>
                        </div>
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

    <div id="customAlert" class="custom-alert">
        <div class="alert-content">
            <div class="alert-header">
                <h4>¡Error!</h4>
            </div>
            <div class="alert-body">
                <p id="alertMessage"></p>
            </div>
            <div class="alert-footer">
                <button id="alertOkButton" class="alert-button">Aceptar</button>
            </div>
        </div>
    </div>

 <script>
    // Configuración global de AJAX para incluir el token CSRF
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Código que se ejecuta cuando el documento está listo
    $(document).ready(function() {
        // Cargar los dispositivos al iniciar la página
        cargarDispositivos();

        // Manejar el envío del formulario para añadir nuevo dispositivo
        $('#formNuevoDispositivo').submit(function(event) {
            event.preventDefault(); // Evitar el envío normal del formulario
            agregarNuevoDispositivo();
        });

        // --- ESCUCHADOR DE EVENTOS PARA EL BOTÓN REGAR ---
        // Usar delegación de eventos en el contenedor de las tarjetas (#listaDispositivos)
        // Esto es eficiente porque solo se añade un escuchador al padre, no a cada botón.
        $('#listaDispositivos').on('click', '.regar-planta-btn', function() {
            // Obtener el ID primario del dispositivo del atributo data-device-id del botón clickeado
            const dispositivoDbId = $(this).data('device-id');
            // Llamar a la función para registrar el riego
            regarPlanta(dispositivoDbId);
        });
        // --- FIN ESCUCHADOR DE EVENTOS ---


        // Asegurarse de que el modal de alerta personalizado esté oculto al inicio
        $('#customAlert').hide();

        // Escuchador de eventos para el botón "Aceptar" del modal de alerta personalizado
        $('#alertOkButton').click(function() {
            $('#customAlert').fadeOut(); // Ocultar el modal con efecto fade
        });
    });

    /**
     * Carga la lista de dispositivos desde el backend y los muestra en la página.
     */
    function cargarDispositivos() {
        console.log("Cargando dispositivos...");
        $.ajax({
            url: '/dispositivos/data', // URL de la ruta que devuelve los datos JSON de los dispositivos
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#listaDispositivos').empty(); // Limpiar la lista actual de dispositivos
                console.log("Datos de dispositivos recibidos:", data);

                if (data.success && data.dispositivos && data.dispositivos.length > 0) {
                    // Iterar sobre cada dispositivo recibido
                    $.each(data.dispositivos, function(index, dispositivo) {
                        // Mapear el valor almacenado de 'planta_seleccionada' a un nombre legible
                        const nombrePlanta = {
                            'aloeOpcion': 'Aloe Vera',
                            'coleoOpcion': 'Cóleo',
                            'coronaOpcion': 'Corona de Cristo',
                            'crotonOpcion': 'Crotón de Jardín',
                            'suegraOpcion': 'Sansevieria'
                        }[dispositivo.planta_seleccionada] || 'Nombre no encontrado'; // Nombre por defecto si no coincide

                        // Construir el HTML para la tarjeta del dispositivo
                        $('#listaDispositivos').append(`
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div class="mb-3">
                                            <h5 class="card-title">${dispositivo.nombre_planta}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Planta: ${nombrePlanta}</h6>
                                            <p class="card-text small">ID Dispositivo Hardware: ${dispositivo.id_dispositivo}</p>
                                            <p class="card-text small mt-2">
                                                Último riego: <span id="last-watered-${dispositivo.id}">
                                                    ${dispositivo.last_watered_at ? new Date(dispositivo.last_watered_at).toLocaleString() : 'Nunca'}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="card-actions mt-2 d-flex flex-column flex-sm-row align-items-stretch">
                                             <button class="btn common-btn flex-grow-1 mb-2 mb-sm-0 me-sm-2 regar-planta-btn" data-device-id="${dispositivo.id}">
                                                <i class="fas fa-tint"></i> Regar Planta
                                            </button>
                                             <a href="/dispositivos/${dispositivo.id}" class="btn btn-sm btn-primary flex-grow-1 mb-2 mb-sm-0 me-sm-2"><i class="fas fa-eye"></i> Ver Detalles</a>
                                             <button class="btn btn-danger btn-sm flex-grow-1" onclick="eliminarDispositivo(${dispositivo.id})"><i class="fas fa-trash-alt"></i> Eliminar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `);
                    });
                } else {
                    // Mostrar mensaje si no hay dispositivos
                    $('#listaDispositivos').append('<div class="col"><div class="alert alert-info">No hay dispositivos registrados.</div></div>');
                }
            },
            error: function(xhr, status, error) {
                console.error("Error al cargar dispositivos:", status, error);
                // Mostrar mensaje de error si la carga falla
                $('#listaDispositivos').empty().append('<div class="col"><div class="alert alert-danger">Error al cargar los dispositivos.</div></div>');
                 // No mostrar alerta personalizada global aquí, solo en acciones de usuario fallidas.
            }
        });
    }

    /**
     * Muestra el formulario para añadir un nuevo dispositivo.
     */
    function mostrarFormularioAgregar() {
        $('#formularioAgregarDispositivo').show();
        $('#agregarDispositivoBtn').hide(); // Ocultar el botón "Añadir Dispositivo" al mostrar el formulario
         // Limpiar cualquier mensaje previo
        $('#mensajeResultado').empty().hide();
    }

    /**
     * Oculta el formulario para añadir un nuevo dispositivo y limpia los campos.
     */
    function ocultarFormularioAgregar() {
        $('#formularioAgregarDispositivo').hide();
        $('#agregarDispositivoBtn').show(); // Mostrar el botón "Añadir Dispositivo"
        $('#mensajeResultado').empty().hide(); // Limpiar y ocultar mensajes de resultado
        $('#formNuevoDispositivo')[0].reset(); // Resetear el formulario
    }

    /**
     * Muestra la alerta personalizada con un mensaje dado.
     * @param {string} mensaje - El mensaje a mostrar en la alerta.
     */
    function mostrarAlertaPersonalizada(mensaje) {
        console.log("Mostrando alerta:", mensaje);
        $('#alertMessage').text(mensaje); // Establece el texto del mensaje en la alerta
        $('#customAlert').fadeIn(); // Muestra el modal de alerta con efecto fade
    }

    /**
     * Envía la solicitud para añadir un nuevo dispositivo al backend.
     */
    function agregarNuevoDispositivo() {
        console.log("Intentando añadir nuevo dispositivo...");
        // Limpiar mensajes previos antes de la nueva solicitud
        $('#mensajeResultado').empty().hide();
        const submitButton = $('#formularioAgregarDispositivo button[type="submit"]');
        const originalButtonContent = submitButton.html();

        // Deshabilitar botón y mostrar spinner
        submitButton.attr('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Guardando...');


        $.ajax({
            url: '/dispositivos', // URL de la ruta para guardar dispositivos (POST)
            method: 'POST',
            dataType: 'json',
            data: $('#formNuevoDispositivo').serialize(), // Serializa los datos del formulario
            success: function(data) {
                console.log("Respuesta al añadir dispositivo:", data);
                if (data.success) {
                    // Si tiene éxito, mostrar mensaje de éxito y recargar la lista
                    $('#mensajeResultado').removeClass('alert-danger').addClass('alert-success').text(data.message).fadeIn();
                    console.log('Dispositivo añadido con éxito. Recargando lista.');
                    cargarDispositivos(); // Recargar la lista para mostrar el nuevo dispositivo
                    $('#formNuevoDispositivo')[0].reset(); // Limpiar el formulario
                    // Ocultar el formulario y el mensaje después de un breve retraso
                    setTimeout(function() {
                         $('#mensajeResultado').fadeOut();
                         ocultarFormularioAgregar();
                    }, 2000); // Esperar 2 segundos

                } else {
                    // Si el backend devuelve success: false, pero no es un error de validación (422)
                    console.error("Error desde el backend al añadir dispositivo:", data.message);
                    let errorMessage = data.message || 'Error desconocido al añadir dispositivo.';
                     // Mostrar el error usando la alerta personalizada
                     mostrarAlertaPersonalizada(errorMessage);
                    // $('#mensajeResultado').removeClass('alert-success').addClass('alert-danger').text(errorMessage).fadeIn(); // Opcional: mostrar también en el mensajeResultado
                }
            },
            error: function(xhr, status, error) {
                console.error("Error AJAX al añadir dispositivo:", status, error);
                let errorMessage = 'Error de comunicación con el servidor al añadir dispositivo.';

                if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
                    // Manejar errores de validación específicos devueltos por Laravel (status 422)
                    errorMessage = 'Errores de validación:<br>'; // <br> para saltos de línea en HTML
                    // Iterar sobre los errores devueltos por el backend
                    for (const field in xhr.responseJSON.errors) {
                         if (xhr.responseJSON.errors.hasOwnProperty(field)) {
                             // Agregar cada mensaje de error al mensaje final
                             errorMessage += `- ${xhr.responseJSON.errors[field].join(', ')}<br>`;
                         }
                    }
                     // Eliminar el último <br> si hay errores
                     if (errorMessage.endsWith('<br>')) {
                         errorMessage = errorMessage.slice(0, -4);
                     }

                 } else if (xhr.responseJSON && xhr.responseJSON.message) {
                     // Manejar otros errores del backend que devuelven un mensaje JSON
                     errorMessage = xhr.responseJSON.message;
                 } else if (error) {
                      // Manejar errores de red o del servidor sin respuesta JSON
                      errorMessage = 'Error del servidor o de red: ' + error;
                 }
                // Mostrar el error usando la alerta personalizada
                mostrarAlertaPersonalizada(errorMessage);
                 // $('#mensajeResultado').removeClass('alert-success').addClass('alert-danger').text(errorMessage).fadeIn(); // Opcional: mostrar también en el mensajeResultado
            },
            complete: function() {
                // Este código se ejecuta SIEMPRE al finalizar la solicitud (éxito o error)
                // Rehabilitar el botón y restaurar su contenido original
                submitButton.attr('disabled', false).html(originalButtonContent);
            }
        });
    }

    /**
     * Envía la solicitud para eliminar un dispositivo al backend.
     * @param {number} id - El ID primario del dispositivo a eliminar.
     */
    function eliminarDispositivo(id) {
        // Confirmar con el usuario antes de eliminar
        if (confirm('¿Estás seguro de que quieres eliminar este dispositivo? Esta acción no se puede deshacer.')) {
            console.log("Intentando eliminar dispositivo con ID:", id);
            // Limpiar mensajes previos antes de la nueva solicitud
            $('#mensajeResultado').empty().hide();

            $.ajax({
                url: '/dispositivos/' + id, // URL de la ruta para eliminar un dispositivo específico
                method: 'DELETE', // Método DELETE
                dataType: 'json',
                success: function(data) {
                    console.log("Respuesta al eliminar dispositivo:", data);
                    if (data.success) {
                        // Si tiene éxito, mostrar mensaje y recargar la lista
                        $('#mensajeResultado').removeClass('alert-danger').addClass('alert-success').text(data.message).fadeIn();
                        console.log('Dispositivo eliminado con éxito. Recargando lista.');
                        cargarDispositivos(); // Recargar la lista para que desaparezca el dispositivo eliminado
                         // Ocultar el mensaje después de un breve retraso
                         setTimeout(function() {
                            $('#mensajeResultado').fadeOut();
                         }, 2000);
                    } else {
                        // Si hay error (success: false), mostrar mensaje de error
                        console.error("Error al eliminar dispositivo:", data.message);
                        // Mostrar el error usando la alerta personalizada
                         mostrarAlertaPersonalizada(data.message || 'Error desconocido al eliminar el dispositivo.');
                       // $('#mensajeResultado').removeClass('alert-success').addClass('alert-danger').text(data.message).fadeIn(); // Opcional
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error AJAX al eliminar dispositivo:", status, error);
                     let errorMessage = 'Error de comunicación con el servidor al eliminar dispositivo.';
                     if (xhr.responseJSON && xhr.responseJSON.message) {
                         errorMessage = xhr.responseJSON.message;
                     } else if (error) {
                         errorMessage = 'Error del servidor o de red: ' + error;
                     }
                    // Mostrar el error usando la alerta personalizada
                    mostrarAlertaPersonalizada(errorMessage);
                    // $('#mensajeResultado').removeClass('alert-success').addClass('alert-danger').text(errorMessage).fadeIn(); // Opcional
                }
            });
        }
    }

    /**
     * Registra un evento de riego para un dispositivo específico vía AJAX.
     * Utiliza el ID primario del modelo Dispositivo (su campo 'id').
     * @param {number} dispositivoDbId - El ID primario del modelo Dispositivo.
     */
    function regarPlanta(dispositivoDbId) {
        console.log("Intentando registrar riego para el dispositivo (ID DB):", dispositivoDbId);

        // Seleccionar el botón específico de riego usando el atributo data-device-id
        const regarButton = $(`button[data-device-id="${dispositivoDbId}"].regar-planta-btn`);
        const originalButtonContent = regarButton.html(); // Guardar contenido original (incl. icono)
        // Deshabilitar el botón y mostrar indicador de carga
        regarButton.attr('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Regando...');

        $.ajax({
            url: '/dispositivos/regar', // URL de la ruta para registrar riego (POST)
            method: 'POST',
            dataType: 'json',
            data: {
                // Enviamos el ID primario del dispositivo al backend
                dispositivo_id: dispositivoDbId
            },
            success: function(data) {
                console.log('Respuesta al registrar riego:', data);
                if (data.success) {
                    console.log('Riego registrado con éxito. Fecha:', data.fecha);
                    // Encontrar el span que muestra la última fecha de riego para este dispositivo
                    const lastWateredMsgElement = $(`#last-watered-${dispositivoDbId}`);
                    // Parsear el string ISO de fecha recibido del backend y formatearlo para mostrar
                    const wateredTime = new Date(data.fecha); // Usa data.fecha que devuelve el backend
                    lastWateredMsgElement.text(wateredTime.toLocaleString()); // Actualizar el texto con la hora formateada

                    // Opcional: Puedes añadir un efecto visual temporal para confirmar el riego
                    // lastWateredMsgElement.css('color', 'green').fadeOut(400).fadeIn(400).css('color', '');

                } else {
                     console.error("Error desde el backend al registrar el riego:", data.message);
                     // Mostrar el error usando la alerta personalizada
                     mostrarAlertaPersonalizada(data.message || 'Error al registrar el riego.');
                }
            },
            error: function(xhr, status, error) {
                console.error("Error AJAX al registrar el riego:", status, error);
                let errorMessage = 'Error de comunicación con el servidor al registrar el riego.';
                 // Intentar obtener un mensaje de error más detallado de la respuesta
                 if (xhr.responseJSON && xhr.responseJSON.message) {
                     errorMessage = xhr.responseJSON.message;
                 } else if (error) {
                      errorMessage = 'Error de red o servidor: ' + error;
                 }
                mostrarAlertaPersonalizada(errorMessage);
            },
            complete: function() {
                // Este código se ejecuta SIEMPRE al finalizar la solicitud (éxito o error)
                // Rehabilitar el botón y restaurar su contenido original
                regarButton.attr('disabled', false).html(originalButtonContent);
            }
        });
    }


    // Función existente (parece que no se usa en la carga actual, pero la dejo)
    function generarEnlacePlanta(planta) {
        switch (planta) {
            case 'aloeOpcion':
                return '/aloeOpcion';
            case 'coleoOpcion':
                return '/coleoOpcion';
            case 'coronaOpcion':
                return '/coronaOpcion';
            case 'crotonOpcion':
                return '/crotonOpcion';
            case 'suegraOpcion':
                return '/suegraOpcion';
            default:
                return '#'; // O una ruta por defecto si la planta no coincide
        }
    }
</script>
</body>
</html>