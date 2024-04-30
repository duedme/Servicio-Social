<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Registrarse</title>
</head>
<body>
    
    <div class="contenedor">
        <h1><ins>Registrarse</ins></h1>
        <br>

        <form action="Login/Registrarse.php" method="POST">

            <?php if(isset($_GET['error'])){ ?>
                <p class= "error"> <?php echo $_GET['error']?></p>
            <?php } ?>
            <br>
            
            <?php if(isset($_GET['success'])){ ?>
                <p class= "success"> <?php echo $_GET['success']?></p>
            <?php } ?>
            <br>

            <label for="">
            <img width="25px" src="ICONS/USER.png" alt="">
            Correo
            </label>  
            <input type="text" placeholder="Ingrese Correo" name="Correo">
            
            <label for="">
            <img width="20px" src="ICONS/KEY.png" alt="">
            Contraseña
            </label>
            <input type="password" placeholder="Ingrese Contraseña" name="Contrasena">

            <label for="">
            <img width="20px" src="ICONS/KEY.png" alt="">
            Repetir Contraseña
            </label>
            <input type="password" placeholder="Repite tu Contraseña" name="Rcontrasena">
            <br><br>
    
            <input type="submit" class="button" value="Registrarse">

            <a href="Index.php" class="Boton_ingresar">
            Ingresar
            </a>
        </form>

    </div>


</body>
</html>