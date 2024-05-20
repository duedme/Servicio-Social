<?php
session_start();
if (isset($_SESSION["id_usuario"])) {
    include_once('../Config/Conexion.php');

    $id_experiencia = $_POST['id_experiencia'];

    $sql = "DELETE FROM ExperienciaL WHERE id_experiencia = $id_experiencia";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Datos de experiencia eliminados correctamente.'); window.history.back();</script>";
    } else {
        echo "<script>alert('Error: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
} else {
    header('location: ../Index.php');
}
?>
