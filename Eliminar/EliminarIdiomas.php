<?php
session_start();
if (isset($_SESSION["id_usuario"])) {
    include_once('../Config/Conexion.php');

    $id_idioma = $_POST['id_idioma'];

    $sql = "DELETE FROM Idiomas WHERE id_idioma = $id_idioma";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Datos de idiomas eliminados correctamente.'); window.history.back();</script>";
    } else {
        echo "<script>alert('Error: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
} else {
    header('location: ../Index.php');
}
?>
