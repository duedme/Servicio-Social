<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login</title>
</head>
<body>
    <div class="contenedor">
        <h1><ins>Iniciar sesión</ins></h1>
        <br>

        <form action="Login/LoginAuth.php" method="POST" >

            <?php if (isset($_GET['error'])) {?>
                <p>  <?php echo $_GET['error']?> </p>
            <?php } ?>

            <label for="">
            <img width="25px" src="ICONS/USER.png" alt="">
            Correo
            </label>
            <input type="text" placeholder="Ingrese Correo" name="Correo" autocomplete="off">
            
            <label for="">
            <img width="20px" src="ICONS/KEY.png" alt="">
            Contraseña
            </label>
        
            <input type="password" placeholder="Ingrese Contraseña" name="Contrasena" autocomplete="off">
            <br><br>

            <button class="button">
                Ingrese
            </button>
            <a href="Registrarse.php" class="button">
                Registrarse
            </a>    
        </form>

    </div>

    <?php
   

    // Comprobar si hay una sesión activa
    session_start();
    if(isset($_SESSION["id_usuario"]) && isset($_SESSION['correo_usuario']) && isset($_SESSION['rol_usuario'])) {
        // Obtener el rol del usuario
        $rol_usuario = $_SESSION['rol_usuario'];
        // Redireccionar según el rol del usuario
        if ($rol_usuario == 1) {
            header('Location: HomeAdmin.php');
            exit(); // Agregar esta línea para detener la ejecución
        } elseif ($rol_usuario == 2) {
            header('Location: Home.php');
            exit(); // Agregar esta línea para detener la ejecución
        }
    }
    

    ?>

</body>
</html>
