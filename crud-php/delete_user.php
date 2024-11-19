<?php
include('connection.php');
$con = connection();

// Verificar si el ID fue enviado como parámetro
if (isset($_GET['id'])) {
    // Obtener la ide enviada como parameter id
    $id = $_GET['id'];

    // Verificar si el ID es válido
    if (is_numeric($id)) {
        $sql = "DELETE FROM users WHERE id='$id'";
        $query = mysqli_query($con, $sql);

        if ($query) {
            Header("Location: index.php");
        } else {
            // Mostrar error si la consulta falla
            echo "Error al eliminar el usuario: " . mysqli_error($con);
        }
    } else {
        echo "ID no válido.";
    }
} else {
    echo "No se proporcionó el ID.";
}
?>