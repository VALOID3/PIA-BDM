<?php 

require_once "conexion.php";

$db = new db();
$conexion = $db->conectar();

//$conexion

$params = [
    'titulo'       => $_POST['titulo'],
    'creador'    => $_POST['usuario'],
    'creador'    => $_POST['categoria'],
    'fecha1'    => $_POST['fecha_inicio'],
    'fecha2'    => $_POST['fecha_fin']
];

//var_dump($params);

if(is_null($params['titulo']) == false){
    $sql = "
    SELECT * FROM cursos 
    WHERE nombre = '{$params['titulo']}' 
    LIMIT 1
";

$stmt = $conexion->query($sql);
$registro = $stmt->fetch(PDO::FETCH_ASSOC);


    //aqui la ruta de la pagina principal
    //header('Location: Busqueda.php');

}
else{

}


?>