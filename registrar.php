<?php 
    include("conexion.php");

    if(isset($_POST['register'])) {
        if (
            strlen($_POST['correo_usuario']) >= 1 &&
            strlen($_POST['contrasena_usuario']) >= 1 &&
            strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['apellido_paterno']) >= 1 &&
            strlen($_POST['apellido_materno']) >= 1 &&
            strlen($_POST['licenciatura']) >= 1 &&
            strlen($_POST['matricula_usuario']) >= 1 &&
            strlen($_POST['estado']) >= 1 &&
            strlen($_POST['telefono']) >= 1 &&
            strlen($_POST['correo']) >= 1 &&
            strlen($_POST['habilidad']) >= 1 &&
            strlen($_POST['idioma']) >= 1 &&
            strlen($_POST['nivel_idioma']) >= 1 &&
            strlen($_POST['nombre_curso']) >= 1 &&
            strlen($_POST['institucion_curso']) >= 1 &&
            strlen($_POST['duracion_curso']) >= 1 &&
            strlen($_POST['mes_finalizacion_curso']) >= 1 &&
            strlen($_POST['anio_finalizacion_curso']) >= 1 &&
            strlen($_POST['nombre_empresa']) >= 1 &&
            strlen($_POST['puesto_empresa']) >= 1 &&
            strlen($_POST['mes_inicio_empresa']) >= 1 &&
            strlen($_POST['anio_inicio_empresa']) >= 1 &&
            strlen($_POST['mes_finalizacion_empresa']) >= 1 &&
            strlen($_POST['anio_finalizacion_empresa']) >= 1 &&
            strlen($_POST['descripcion_empresa']) >= 1 &&
            strlen($_POST['nombre_institucion']) >= 1 &&
            strlen($_POST['nivel_institucion']) >= 1 &&
            strlen($_POST['mes_inicio_institucion']) >= 1 &&
            strlen($_POST['anio_inicio_institucion']) >= 1 &&
            strlen($_POST['mes_finalizacion_institucion']) >= 1 &&
            strlen($_POST['anio_finalizacion_institucion']) >= 1
        ) {
            $correo_usuario = $_POST['correo_usuario'];
            $contrasena_usuario = $_POST['contrasena_usuario'];
            $nombre = $_POST['nombre'];
            $segundo_nombre = $_POST['segundo_nombre'];
            $apellido_paterno = $_POST['apellido_paterno'];
            $apellido_materno = $_POST['apellido_materno'];
            $licenciatura = $_POST['licenciatura'];
            $matricula_usuario = $_POST['matricula_usuario'];
            $estado = $_POST['estado'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $habilidad = $_POST['habilidad'];
            $habilidadd = $_POST['habilidad'];
            $idioma = $_POST['idioma'];
            $nivel_idioma = $_POST['nivel_idioma'];
            $nombre_curso = $_POST['nombre_curso'];
            $institucion_curso = $_POST['institucion_curso'];
            $duracion_curso = $_POST['duracion_curso'];
            $mes_finalizacion_curso = $_POST['mes_finalizacion_curso'];
            $anio_finalizacion_curso = $_POST['anio_finalizacion_curso'];
            $nombre_empresa = $_POST['nombre_empresa'];
            $puesto_empresa = $_POST['puesto_empresa'];
            $mes_inicio_empresa = $_POST['mes_inicio_empresa'];
            $anio_inicio_empresa = $_POST['anio_inicio_empresa'];
            $mes_finalizacion_empresa = $_POST['mes_finalizacion_empresa'];
            $anio_finalizacion_empresa = $_POST['anio_finalizacion_empresa'];
            $descripcion_empresa = $_POST['descripcion_empresa'];
            $nombre_institucion = $_POST['nombre_institucion'];
            $nivel_institucion = $_POST['nivel_institucion'];
            $especialidad_institucion = $_POST['especialidad_institucion'];
            $mes_inicio_institucion = $_POST['mes_inicio_institucion'];
            $anio_inicio_institucion = $_POST['anio_inicio_institucion'];
            $mes_finalizacion_institucion = $_POST['mes_finalizacion_institucion'];
            $anio_finalizacion_institucion = $_POST['anio_finalizacion_institucion'];

            $consulta_usuario = "INSERT INTO Usuarios (correo_usuario, contrasena_usuario) VALUES ('$correo_usuario', '$contrasena_usuario')";
            $resultado_usuario = mysqli_query($conexion, $consulta_usuario);

            if ($resultado_usuario) {
                $id_usuario = mysqli_insert_id($conexion);

                $consulta_datos_personales = "INSERT INTO DatosPersonales (nombre_datos, segundo_nombre_datos, apellido_paterno_datos, apellido_materno_datos, licenciatura_datos, matricula_datos, ciudad_datos, telefono_datos, correo_datos, id_usuario) VALUES ('$nombre', '$segundo_nombre', '$apellido_paterno', '$apellido_materno', '$licenciatura', '$matricula_usuario', '$estado', '$telefono', '$correo', '$id_usuario')";
                $resultado_datos_personales = mysqli_query($conexion, $consulta_datos_personales);

                $consulta_habilidad = "INSERT INTO Habilidades (habilidad, id_usuario) VALUES ('$habilidad[2]', '$id_usuario')";
                $resultado_habilidad = mysqli_query($conexion, $consulta_habilidad);

                $consulta_habilidad = "INSERT INTO Habilidades (habilidad, id_usuario) VALUES ('$habilidadd', '$id_usuario')";
                $resultado_habilidad = mysqli_query($conexion, $consulta_habilidad);

                $consulta_idioma = "INSERT INTO Idiomas (nombre_idioma, nivel_idioma, id_usuario) VALUES ('$idioma', '$nivel_idioma', '$id_usuario')";
                $resultado_idioma = mysqli_query($conexion, $consulta_idioma);

                $consulta_curso = "INSERT INTO Cursos (nombre_curso, institucion_curso, duracion_curso, mes_finalizacion_curso, anio_finalizacion_curso, id_usuario) VALUES ('$nombre_curso', '$institucion_curso', '$duracion_curso', '$mes_finalizacion_curso', '$anio_finalizacion_curso', '$id_usuario')";
                $resultado_curso = mysqli_query($conexion, $consulta_curso);

                $consulta_experiencia = "INSERT INTO ExperienciaL (nombre_empresa, puesto_empresa, mes_inicio_empresa, anio_inicio_empresa, mes_finalizacion_empresa, anio_finalizacion_empresa, descripcion_empresa, id_usuario) VALUES ('$nombre_empresa', '$puesto_empresa', '$mes_inicio_empresa', '$anio_inicio_empresa', '$mes_finalizacion_empresa', '$anio_finalizacion_empresa', '$descripcion_empresa', '$id_usuario')";
                $resultado_experiencia = mysqli_query($conexion, $consulta_experiencia);

                $consulta_educacion = "INSERT INTO Educacion (nombre_institucion, nivel_institucion, especialidad_institucion, mes_inicio_institucion, anio_inicio_institucion, mes_finalizacion_institucion, anio_finalizacion_institucion, id_usuario) VALUES ('$nombre_institucion', '$nivel_institucion', '$especialidad_institucion', '$mes_inicio_institucion', '$anio_inicio_institucion', '$mes_finalizacion_institucion', '$anio_finalizacion_institucion', '$id_usuario')";
                $resultado_educacion = mysqli_query($conexion, $consulta_educacion);

                if ($resultado_datos_personales && $resultado_habilidad && $resultado_idioma && $resultado_curso && $resultado_experiencia && $resultado_educacion) {
?>
                    <h3 class="success">Tu registro se ha completado "$habilidad"</h3>
                    <h1>Bienvenido, <?php echo $habilidad; ?>!</h1>
<?php
                } else {
?>
                    <h3 class="error">Ocurrió un error</h3>
<?php
                }
            } else {
?>
                <h3 class="error">Ocurrió un error</h3>
<?php
            }
        } else {
?>
            <h3 class="error">Llenar todos los campos</h3>
<?php
        }
    }
?>