<?php
session_start();
if (isset($_SESSION["id_usuario"])) {
    include_once('../Config/Conexion.php');

    $id_educacion = $_POST['id_educacion'];

    $sql = "DELETE FROM Educacion WHERE id_educacion = $id_educacion";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Datos de educación eliminados correctamente.'); window.history.back();</script>";
    } else {
        echo "<script>alert('Error: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
} else {
    header('location: ../Index.php');
}
?>
