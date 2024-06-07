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

    $conexion->query($sql);
    $conexion->close();
    header('Location: ../Home.php');
} else {
    header('location: ../Index.php');
}
?>
