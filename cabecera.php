<?php 
#session_start();// -> esto se muestra si esta logeado
// print_r ($_SESSION); 
#if( isset($_SESSION['Usuario'])!="Alan Zablosky"){ //isset busca que tiene adentro de $_SESSION y dentro de Usuario
#    header("location:login.php");  // si no esta logeado o no es "Alan Zablosky" te devuelve a login
#} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Style.css">
    <style>
    #scrollToTopBtn {
        display: none; 
        position: fixed; 
        bottom: 20px; 
        right: 20px; 
        z-index: 99; 
        border: none; 
        outline: none; 
        background-color: #007bff; 
        color: white; 
        cursor: pointer; 
        padding: 10px; 
        border-radius: 5px; 
    }

    #scrollToTopBtn:hover {
        background-color: #0056b3;
    }
</style>
    <title>portafolio - Alan Zablosky</title>
</head>
<body data-bs-theme="dark">
    <header class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary " >
        <div class="container-fluid mx-5" >
            <a class="navbar-brand " href="#SobreMi">- Portfolio -</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav flex-row flex-wrap mx-5 ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#project">Proyectos</a>
                    </li>
                    <li class="nav-item  py-2 py-lg-1 col-12 col-lg-auto">
                        <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                        <hr class="d-lg-none my-2 text-white-50">
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#contacto">Contactame</a>
                    </li>
                    <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
                        <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                        <hr class="d-lg-none my-2 text-white-50">
                    </li>
                </ul>
                <ul class="navbar-nav flex-row flex-wrap ms-auto ">
                    <li class="nav-item col-6 col-lg-auto">
                        <a href="https://www.linkedin.com/in/alan-zablosky-6b702b230/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-linkedin mx-2" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
                        <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                        <hr class="d-lg-none my-2 text-white-50">
                    </li> 
                    <li class="nav-item col-6 col-lg-auto">
                        <a href="https://github.com/AlanZablosky" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github mx-2" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                            </svg>
                        </a>
                    </li>
                </ul>
                    <!--  
                    <ul class="navbar-nav position-absolute end-0 mx-3">
                            <p class="nav-link" href=""><strong>Hola, <?php echo htmlspecialchars($_SESSION['Usuario']); ?></strong>
                                </p>
                            <a class="nav-link" href="cerrar.php">Salir</a> 
                    </ul>-->
            </div>
        </div>
    </nav> 
    <!-- Botón de "Subir" -->
    <button id="scrollToTopBtn" onclick="scrollToTop()">Subir</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript para manejar el desplazamiento
        var prevScrollpos = window.pageYOffset;
        var navbar = document.querySelector('.navbar');
        var scrollToTopBtn = document.getElementById("scrollToTopBtn");

        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                navbar.style.top = "0";
            } else {
                navbar.style.top = "-70px"; // Ajusta esta altura según el tamaño de tu navbar
            }
            prevScrollpos = currentScrollPos;

            // Mostrar el botón de "Subir" al desplazarse hacia abajo
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTopBtn.style.display = "block";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        };

        // Función para desplazarse hacia arriba
        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    </header>   
