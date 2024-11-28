<?php

session_start();
require_once "../conexion.php";

$db = new db();
$conexion = $db->conectar();

//$conexion

$params = [
    'nombre'       => $_POST['input_fullname'],
    'genero'    => $_POST['input-state'],
    'dob'    => $_POST['input_fechaNac'],
    'id'  =>  $_SESSION['id_usuario']
];

//var_dump($params);
//exit();

$sql = "
    UPDATE usuarios SET nombre = '{$params['nombre']}',
    genero = '{$params['genero']}',
    fecha_nacimiento = '{$params['dob']}' WHERE  id = '{$params['id']}';
"; 

$stmt = $conexion->query($sql);

$_SESSION['nombre'] = $params['nombre'];
$_SESSION['fechaNac'] = $params['dob'];
$_SESSION['genero'] = $params['genero'];

header('Location: ../Perfil.php');