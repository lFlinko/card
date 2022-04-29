<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Nosotros</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.jpeg" />
    <!-- Bootstrap icons-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
</head>

<body>
   
    <!-- Navigation-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Electric Zone</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <a href="index.php" class="nav-link" category="all">Tienda</a>
                        <a href="nosotros.php" class="nav-link" category="all">Nosotros</a>
                        <a href="servicios.php" class="nav-link" category="all">Servicios</a>
                        <a href="contacto.php" class="nav-link" category="all">Contacto</a>
                    </ul>
                    
                </div>
                <div style='text-align:right'>
                    <a href="admin/index.php" class="nav-link" category="all" style="color:BLACK" text-align="right">Entrar</a>
                        </div>
            </div>
        </nav>
    </div>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Nosotros</h1>
            </div>
        </div>
    </header>

    <div class="text-center">
    <img src="admin/img/acerca.png" alt="Acerca de Nosotros" width="600" height="300">
    <br><br>
    <p>
        Somos una empresa 100% Mexicana, Nacida en Ensenada, Baja California.
    </p>

    <p><b>Misión</b><br>
    Conformar un equipo de talento humano de alto nivel de calidad con el propósito
    de brindar un servicio eficiente y eficaz según las necesidades de nuestros
    clientes. Nos enfocamos en la excelenc</p>

    <p><b>Visión</b><br>
    Para el 2025 ser reconocidos como la mejor empresa de venta de televisores y
    accesorios, basados en el alto nivel de calidad y compromiso de nuestro equipo de
    trabajo.</p>

    </div>
    


    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Electric Zone 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>