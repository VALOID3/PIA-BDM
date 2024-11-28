<?php 

require_once "conexion.php";

$db = new db();
$conexion = $db->conectar();

$sql = "
SELECT * FROM ()cursos 
WHERE nombre = '{$params['titulo']}' 
LIMIT 3
";