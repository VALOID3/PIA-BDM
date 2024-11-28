<?php
header('Content-Type: application/json');

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conexión a la base de datos
    $conn = new mysqli('localhost', 'root', '', 'skillhive');

    if ($conn->connect_error) {
        die(json_encode(['success' => false, 'message' => 'Error de conexión']));
    }

    // Obtener los datos enviados
    $data = json_decode(file_get_contents('php://input'), true);
    
    $nivel = $data['nivel'];
    $nombre = $data['nombre'];
    $descripcion = $data['descripcion'];
    $detalles = $data['detalles'];
    $categoria = $data['categoria'];
    $costo = $data['costo'];
    $id_instructor = $_SESSION['id_usuario'];

    // Preparar la consulta para agregar el curso
    $sql = "CALL AgregarCurso('$nombre', '$descripcion', '$detalles', $categoria, $id_instructor, $costo, 'Activo')";
    //echo json_encode(['success' => false, 'message' => $sql]);
    //die();

    if ($conn->query($sql)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al crear el curso']);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
}
?>
