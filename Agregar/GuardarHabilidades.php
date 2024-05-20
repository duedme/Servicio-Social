<?php
session_start();
if (isset($_SESSION["id_usuario"])) {
    $id_usuario = $_SESSION['id_usuario'];
    include_once('../Config/Conexion.php');

    $habilidad = $_POST['habilidad'];

    $sql = "INSERT INTO Habilidades (habilidad, id_usuario) VALUES ('$habilidad', $id_usuario)";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Datos de habilidades guardados correctamente.'); window.history.back();</script>";
    } else {
        echo "<script>alert('Error: " . $sql . " - " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
} else {
    header('location: ../Index.php');
}
?>
