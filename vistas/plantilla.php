<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Web</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container-fluid">
        <h1 class="text-center py-3">My First Bootstrap Page</h1>
    </div> 
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <?php if(isset($_GET["pagina"])): ?>
                    <?php if($_GET["pagina"] == "registro"): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                        </li>
                    <?php endif ?>
                    <?php if($_GET["pagina"] == "ingreso"): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                        </li>
                    <?php endif ?>
                    <?php if($_GET["pagina"] == "inicio"): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                        </li>
                    <?php endif ?>
                    <?php if($_GET["pagina"] == "salir"): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                        </li>
                    <?php endif ?>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
    <div class="container mt-3">
        <?php 
        if(isset($_GET["pagina"])){
            if($_GET["pagina"] == "registro" ||
            $_GET["pagina"] == "ingreso" ||
            $_GET["pagina"] == "inicio" ||
            $_GET["pagina"] == "salir"){
                include "paginas/".$_GET["pagina"].".php";
            }else{
                include "paginas/404.php";
            }
        }else{
            include "paginas/ingreso.php";
        }?>
    </div>
</body>
</html>