<?php
session_start();
if (isset($_SESSION["id_usuario"])) {
    include_once('../Config/Conexion.php');

    $id_habilidades = $_POST['id_habilidades'];

    $sql = "DELETE FROM Habilidades WHERE id_habilidades = $id_habilidades";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Datos de habilidades eliminados correctamente.'); window.history.back();</script>";
    } else {
        echo "<script>alert('Error: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
} else {
    header('location: ../Index.php');
}
?>
