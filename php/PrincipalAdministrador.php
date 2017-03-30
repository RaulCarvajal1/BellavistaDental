<?php error_reporting(E_ERROR | E_PARSE); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido Administrador</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="../CSS/menuVerticalAdminitrador.css">
    <link type="text/css" rel="stylesheet" href="../CSS/styleIcons.css">
    <link type="text/css" rel="stylesheet" href="../CSS/imagen.css">
</head>
<body>
<?php
    include ('php/Mensaje.php');
?>
<h1>Opciones de administración<span><img src="../IMG/logo.jpg" class="imagen"></span></h1>
<nav>
    <ul>
        <li><a href=""><span><i class="icon icon-home"></i></span> Inicio </a></li>
        <li> <a href="PrincipalAdministrador.php?action=verPacientes"><span><i class="icon icon-user"></i></span>Pacientes</a> </li>
        <li> <a href="#"><span><i class="icon icon-mug"></i></span> Recepcionistas </a></li>
        <li><a href="#"><span><i class="icon icon-aid-kit"></i></span> Dentistas</a></li>
        <li> <a href="#"><span><i class="icon icon-cancel-circle"></i></span> Cerrar Sesión</a></li>
    </ul>
</nav>
<div id="areaFuncion">
    <?php
    switch ($_GET['action'])
    {
        case 'verPacientes':
            echo("<h2>Pacientes Registrados</h2>");
            include('consultas/plantillas/tabla.php');
            break;

        case 'modificar_paciente':
            echo("<h2>Modifica un paciente</h2>");
            include('consultas/plantillas/modifica_paciente.php');
            break;

        default:
            # code...
            break;
    }
    ?>

</div>

</body>
</html>