<?php
session_start();
if (isset($_SESSION["id_usuario"])) {
    $id_usuario = $_SESSION['id_usuario'];
    include_once('../Config/Conexion.php');

    $nombre_datos = $_POST['nombre_datos'];
    $licenciatura_datos = $_POST['licenciatura_datos'];
    $matricula_datos = $_POST['matricula_datos'];
    $ciudad_datos = $_POST['ciudad_datos'];
    $telefono_datos = $_POST['telefono_datos'];
    $correo_datos = $_POST['correo_datos'];

    $sql = "INSERT INTO DatosPersonales (nombre_datos, licenciatura_datos, matricula_datos, ciudad_datos, telefono_datos, correo_datos, id_usuario) 
            VALUES ('$nombre_datos', '$licenciatura_datos', '$matricula_datos', '$ciudad_datos', '$telefono_datos', '$correo_datos', $id_usuario)";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Datos personales guardados correctamente.'); window.history.back();</script>";
    } else {
        echo "<script>alert('Error: " . $sql . " - " . $conexion->error . "'); window.history.back();</script>";
    }

    $conexion->close();
} else {
    header('location: ../Index.php');
}
?>
