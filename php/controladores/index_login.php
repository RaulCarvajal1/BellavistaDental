<?php
include('controlador_login.php');
$usuario=$_POST['txtusuario'];
$clave=$_POST['txtcontra'];

if(conexiones($usuario,$clave))
{

    header("location:../PrincipalPaciente.php");
}

else
{
    header("location:../../index.php");
}