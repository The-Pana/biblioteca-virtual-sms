
<?php 
    session_start()
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ingreso Biblioteca</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="view/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="view/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="view/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="view/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="view/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="view/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="view/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="view/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="view/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="view/css/util.css">
    <link rel="stylesheet" type="text/css" href="view/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<body>
    <?php 


        // require_once "paginas/login.php";

        if(isset($_GET['pagina'])) {
            if($_GET['pagina'] === "registro" ||
                $_GET['pagina'] === "login" ||
                $_GET['pagina'] === "inicio" ||
                $_GET['pagina'] === "salir") {
                    include "paginas/" . $_GET["pagina"] . ".php";
                } else {
                    // include "paginas/error404.php"; 
                }
        } else {
            include "paginas/login.php";
        }

     ?>
</body>
</html>