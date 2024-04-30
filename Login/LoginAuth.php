<?php
session_start();
include_once('../Config/Conexion.php');

if (isset($_POST['Correo']) && isset($_POST['Contrasena'])) {

    function validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $correo = validar($_POST['Correo']);
    $contrasena = validar($_POST['Contrasena']);

    if (empty($correo) || empty($contrasena)) {
        header('Location: ../Index.php?error=El correo y la contraseña son requeridos');
        exit();
    } else {
        $sql = "SELECT * FROM usuarios WHERE correo_usuario ='$correo'";
        $query = $conexion->query($sql);

        if ($query->num_rows == 1) {
            $usuario = $query->fetch_assoc();

            // Verificar si la contraseña coincide
            if ($contrasena === $usuario['contrasena_usuario']) {
                $_SESSION['id_usuario'] = $usuario['id_usuario'];
                $_SESSION['correo_usuario'] = $usuario['correo_usuario'];
                $_SESSION['rol_usuario'] = $usuario['rol_usuario'];
                header('Location: ../Index.php');
                exit();
            } else {
                // Contraseña incorrecta
                header('Location: ../Index.php?error=Usuario o contraseña incorrecta');
                exit();
            }
        } else {
            // Usuario no encontrado
            header('Location: ../Index.php?error=Usuario o contraseña incorrecta');
            exit();
        }
    }
} else {
    // Redirigir si no hay datos de correo y contraseña
    header('Location: ../Index.php');
    exit();
}
?>
