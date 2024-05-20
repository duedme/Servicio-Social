<?php
session_start();
if (isset($_SESSION["id_usuario"])) {
    include_once('../Config/Conexion.php');

    $id_datos = $_POST['id_datos'];

    $sql = "DELETE FROM DatosPersonales WHERE id_datos = $id_datos";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Datos personales eliminados correctamente.'); window.history.back();</script>";
    } else {
        echo "<script>alert('Error: " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
} else {
    header('location: ../Index.php');
}
?>
