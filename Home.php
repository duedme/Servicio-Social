
<?php
session_start();
if(isset($_SESSION["id_usuario"]) && isset($_SESSION['correo_usuario'])) {
    $correo_usuario = $_SESSION['correo_usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <p>Bienvenido, <?php echo $correo_usuario; ?></p>
    <a href="Login/CerrarSesion.php">Cerrar Sesion</a>

</body>
</html>
<?php 
} else {
    header('location: ../Index.php');
}
?>

