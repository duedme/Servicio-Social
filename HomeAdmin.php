<?php
session_start();
if(isset($_SESSION["id_usuario"]) && isset($_SESSION['correo_usuario']) && $_SESSION['rol_usuario'] == 1) {
    $correo_usuario = $_SESSION['correo_usuario'];

    // Incluir el archivo de conexión a la base de datos
    include_once('Config/Conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="right-align">
        <a href="Login/CerrarSesion.php">Cerrar Sesión</a>
    </div>
    <h2>Bienvenido, Administrador <?php echo $correo_usuario; ?></h2> 

    <!-- Formulario de búsqueda -->
    <input type="text" id="searchInput" placeholder="Buscar por nombre, matrícula o correo">
    <br><br><br>

    <table id="userTable">
        <tr>
            <th>Nombre</th>
            <th>Matrícula</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
        <?php
        // Consultar todos los registros de las tablas pertinentes
        $sql = "SELECT DatosPersonales.nombre_datos, DatosPersonales.matricula_datos, DatosPersonales.correo_datos, DatosPersonales.telefono_datos, Usuarios.id_usuario, Usuarios.correo_usuario, Usuarios.contrasena_usuario, Usuarios.rol_usuario 
        FROM Usuarios 
        LEFT JOIN DatosPersonales ON Usuarios.id_usuario = DatosPersonales.id_usuario
        ORDER BY Usuarios.rol_usuario = 1 DESC";
        $result = $conexion->query($sql);
        // Iterar sobre los resultados y mostrar cada registro en una fila de la tabla
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['nombre_datos'] . "</td>";
            echo "<td>" . $row['matricula_datos'] . "</td>";
            echo "<td>" . $row['correo_datos'] . "</td>";
            echo "<td>" . $row['telefono_datos'] . "</td>";
            echo "<td>" . $row['correo_usuario'] . "</td>";
            echo "<td>" . $row['contrasena_usuario'] . "</td>";
            echo "<td>" . $row['rol_usuario'] . "</td>";
            echo "<td><a href='EliminarUsuario.php?id_usuario=" . $row['id_usuario'] . "'>Eliminar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>

    <script>
        // Obtener la referencia al campo de búsqueda
        var searchInput = document.getElementById('searchInput');
        // Obtener la referencia a la tabla de usuarios
        var userTable = document.getElementById('userTable');

        // Agregar un evento de escucha para detectar cambios en el campo de búsqueda
        searchInput.addEventListener('input', function() {
            // Obtener el valor del campo de búsqueda
            var searchTerm = searchInput.value.toLowerCase();

            // Iterar sobre las filas de la tabla y mostrar/ocultar según el término de búsqueda
            for (var i = 1; i < userTable.rows.length; i++) {
                var rowData = userTable.rows[i].innerText.toLowerCase();
                if (rowData.includes(searchTerm)) {
                    userTable.rows[i].style.display = '';
                } else {
                    userTable.rows[i].style.display = 'none';
                }
            }
        });
    </script>

</body>
</html>

<?php 
} else {
    header('location: ../Login/Index.php');
}
?>
