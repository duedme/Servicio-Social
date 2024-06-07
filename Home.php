<?php
session_start();
if (isset($_SESSION['id_usuario']) && isset($_SESSION['correo_usuario']) && $_SESSION['rol_usuario'] == 2) {
    $correo_usuario = $_SESSION['correo_usuario'];
    $id_usuario = $_SESSION['id_usuario'];
    include_once('Config/Conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* Estilos básicos para el menú */
        #menu {
            background-color: #f2f2f2;
            overflow: hidden;
        }
        #menu a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        #menu a:hover {
            background-color: #ddd;
        }
        /* Estilos para la sección de consultas */
        #consulta {
            margin-top: 20px;
        }
        /* Estilos para formularios */
        form {
            display: none;
            margin-top: 20px;
        }
        form div {
            margin-bottom: 10px;
        }
        form label {
            display: inline-block;
            width: 150px;
        }
    </style>
</head>
<body>
    <div id="menu">
        <a href="CV/Harvard.php" id="cv">CV</a>
        <a href="#" id="datos_personales">Datos personales</a>
        <a href="#" id="educacion">Educación</a>
        <a href="#" id="experiencia">Experiencia</a>
        <a href="#" id="habilidades">Habilidades</a>
        <a href="#" id="idiomas">Idiomas</a>
        <a href="#" id="cursos">Cursos</a>
        <a href="Login/CerrarSesion.php">Cerrar Sesión</a>
    </div>

    <div id="consulta">
        <!-- Aquí se mostrarán las consultas según la opción seleccionada -->
    </div>

    <!-- Formularios -->
    <form id="form_datos_personales" method="POST" action="Agregar/GuardarDatosPersonales.php">
        <h2>Agregar Datos Personales</h2>
        <div>
            <label for="nombre_datos">Nombre:</label>
            <input type="text" id="nombre_datos" name="nombre_datos" required>
        </div>
        <div>
            <label for="licenciatura_datos">Licenciatura:</label>
            <input type="text" id="licenciatura_datos" name="licenciatura_datos" required>
        </div>
        <div>
            <label for="matricula_datos">Matrícula:</label>
            <input type="text" id="matricula_datos" name="matricula_datos" required>
        </div>
        <div>
            <label for="ciudad_datos">Ciudad:</label>
            <input type="text" id="ciudad_datos" name="ciudad_datos" required>
        </div>
        <div>
            <label for="telefono_datos">Teléfono:</label>
            <input type="text" id="telefono_datos" name="telefono_datos" required>
        </div>
        <div>
            <label for="correo_datos">Correo:</label>
            <input type="email" id="correo_datos" name="correo_datos" required>
        </div>
        <button type="submit">Guardar</button>
    </form>

    <form id="form_educacion" method="POST" action="Agregar/GuardarEducacion.php">
        <h2>Agregar Educación</h2>
        <div>
            <label for="nombre_institucion">Nombre de la Institución:</label>
            <input type="text" id="nombre_institucion" name="nombre_institucion" required>
        </div>
        <div>
            <label for="nivel_institucion">Nivel:</label>
            <input type="text" id="nivel_institucion" name="nivel_institucion" required>
        </div>
        <div>
            <label for="especialidad_institucion">Especialidad:</label>
            <input type="text" id="especialidad_institucion" name="especialidad_institucion" required>
        </div>
        <div>
            <label for="mes_inicio_institucion">Mes de Inicio:</label>
            <input type="text" id="mes_inicio_institucion" name="mes_inicio_institucion" required>
        </div>
        <div>
            <label for="anio_inicio_institucion">Año de Inicio:</label>
            <input type="text" id="anio_inicio_institucion" name="anio_inicio_institucion" required>
        </div>
        <div>
            <label for="mes_finalizacion_institucion">Mes de Finalización:</label>
            <input type="text" id="mes_finalizacion_institucion" name="mes_finalizacion_institucion" required>
        </div>
        <div>
            <label for="anio_finalizacion_institucion">Año de Finalización:</label>
            <input type="text" id="anio_finalizacion_institucion" name="anio_finalizacion_institucion" required>
        </div>
        <button type="submit">Guardar</button>
    </form>

    <form id="form_experiencia" method="POST" action="Agregar/GuardarExperiencia.php">
        <h2>Agregar Experiencia</h2>
        <div>
            <label for="nombre_empresa">Nombre Empresa:</label>
            <input type="text" id="nombre_empresa" name="nombre_empresa" required>
        </div>
        <div>
            <label for="puesto_empresa">Puesto:</label>
            <input type="text" id="puesto_empresa" name="puesto_empresa" required>
        </div>
        <div>
            <label for="mes_inicio_empresa">Mes de Inicio:</label>
            <input type="text" id="mes_inicio_empresa" name="mes_inicio_empresa" required>
        </div>
        <div>
            <label for="anio_inicio_empresa">Año de Inicio:</label>
            <input type="text" id="anio_inicio_empresa" name="anio_inicio_empresa" required>
        </div>
        <div>
            <label for="mes_finalizacion_empresa">Mes de Finalización:</label>
            <input type="text" id="mes_finalizacion_empresa" name="mes_finalizacion_empresa" required>
        </div>
        <div>
            <label for="anio_finalizacion_empresa">Año de Finalización:</label>
            <input type="text" id="anio_finalizacion_empresa" name="anio_finalizacion_empresa" required>
        </div>
        <div>
            <label for="descripcion_empresa">Descripción:</label>
            <textarea id="descripcion_empresa" name="descripcion_empresa" required></textarea>
        </div>
        <button type="submit">Guardar</button>
    </form>

    <form id="form_habilidades" method="POST" action="Agregar/GuardarHabilidades.php">
        <h2>Agregar Habilidades</h2>
        <div>
            <label for="habilidad">Habilidad:</label>
            <input type="text" id="habilidad" name="habilidad" required>
        </div>
        <button type="submit">Guardar</button>
    </form>

    <form id="form_idiomas" method="POST" action="Agregar/GuardarIdiomas.php">
        <h2>Agregar Idiomas</h2>
        <div>
            <label for="nombre_idioma">Idioma:</label>
            <input type="text" id="nombre_idioma" name="nombre_idioma" required>
        </div>
        <div>
            <label for="nivel_idioma">Nivel:</label>
            <input type="text" id="nivel_idioma" name="nivel_idioma" required>
        </div>
        <button type="submit">Guardar</button>
    </form>

    <form id="form_cursos" method="POST" action="Agregar/GuardarCursos.php">
        <h2>Agregar Cursos</h2>
        <div>
            <label for="nombre_curso">Nombre del Curso:</label>
            <input type="text" id="nombre_curso" name="nombre_curso" required>
        </div>
        <div>
            <label for="institucion_curso">Institución:</label>
            <input type="text" id="institucion_curso" name="institucion_curso" required>
        </div>
        <div>
            <label for="duracion_curso">Duración:</label>
            <input type="text" id="duracion_curso" name="duracion_curso" required>
        </div>
        <div>
            <label for="mes_finalizacion_curso">Mes de Finalización:</label>
            <input type="text" id="mes_finalizacion_curso" name="mes_finalizacion_curso" required>
        </div>
        <div>
            <label for="anio_finalizacion_curso">Año de Finalización:</label>
            <input type="text" id="anio_finalizacion_curso" name="anio_finalizacion_curso" required>
        </div>
        <button type="submit">Guardar</button>
    </form>

    <!-- Formularios de edición   -->
    <form id="form_editar_datos_personales" method="POST" action="Actualizar/ActualizarDatosPersonales.php">
        <h2>Editar Datos Personales</h2>
        <input type="hidden" id="id_datos_editar" name="id_datos">
        <div>
            <label for="nombre_datos_editar">Nombre:</label>
            <input type="text" id="nombre_datos_editar" name="nombre_datos" required>
        </div>
        <div>
            <label for="licenciatura_datos_editar">Licenciatura:</label>
            <input type="text" id="licenciatura_datos_editar" name="licenciatura_datos" required>
        </div>
        <div>
            <label for="matricula_datos_editar">Matrícula:</label>
            <input type="text" id="matricula_datos_editar" name="matricula_datos" required>
        </div>
        <div>
            <label for="ciudad_datos_editar">Ciudad:</label>
            <input type="text" id="ciudad_datos_editar" name="ciudad_datos" required>
        </div>
        <div>
            <label for="telefono_datos_editar">Teléfono:</label>
            <input type="text" id="telefono_datos_editar" name="telefono_datos" required>
        </div>
        <div>
            <label for="correo_datos_editar">Correo:</label>
            <input type="email" id="correo_datos_editar" name="correo_datos" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>

    <form id="form_editar_educacion" method="POST" action="Actualizar/ActualizarEducacion.php">
        <h2>Editar Educación</h2>
        <input type="hidden" id="id_educacion_editar" name="id_educacion">
        <div>
            <label for="nombre_institucion_editar">Nombre de la Institución:</label>
            <input type="text" id="nombre_institucion_editar" name="nombre_institucion" required>
        </div>
        <div>
            <label for="nivel_institucion_editar">Nivel:</label>
            <input type="text" id="nivel_institucion_editar" name="nivel_institucion" required>
        </div>
        <div>
            <label for="especialidad_institucion_editar">Especialidad:</label>
            <input type="text" id="especialidad_institucion_editar" name="especialidad_institucion" required>
        </div>
        <div>
            <label for="mes_inicio_institucion_editar">Mes de Inicio:</label>
            <input type="text" id="mes_inicio_institucion_editar" name="mes_inicio_institucion" required>
        </div>
        <div>
            <label for="anio_inicio_institucion_editar">Año de Inicio:</label>
            <input type="text" id="anio_inicio_institucion_editar" name="anio_inicio_institucion" required>
        </div>
        <div>
            <label for="mes_finalizacion_institucion_editar">Mes de Finalización:</label>
            <input type="text" id="mes_finalizacion_institucion_editar" name="mes_finalizacion_institucion" required>
        </div>
        <div>
            <label for="anio_finalizacion_institucion_editar">Año de Finalización:</label>
            <input type="text" id="anio_finalizacion_institucion_editar" name="anio_finalizacion_institucion" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>

    <form id="form_editar_experiencia" method="POST" action="Actualizar/ActualizarExperiencia.php">
        <h2>Editar Experiencia</h2>
        <input type="hidden" id="id_experiencia_editar" name="id_experiencia">
        <div>
            <label for="nombre_empresa_editar">Nombre Empresa:</label>
            <input type="text" id="nombre_empresa_editar" name="nombre_empresa" required>
        </div>
        <div>
            <label for="puesto_empresa_editar">Puesto:</label>
            <input type="text" id="puesto_empresa_editar" name="puesto_empresa" required>
        </div>
        <div>
            <label for="mes_inicio_empresa_editar">Mes de Inicio:</label>
            <input type="text" id="mes_inicio_empresa_editar" name="mes_inicio_empresa" required>
        </div>
        <div>
            <label for="anio_inicio_empresa_editar">Año de Inicio:</label>
            <input type="text" id="anio_inicio_empresa_editar" name="anio_inicio_empresa" required>
        </div>
        <div>
            <label for="mes_finalizacion_empresa_editar">Mes de Finalización:</label>
            <input type="text" id="mes_finalizacion_empresa_editar" name="mes_finalizacion_empresa" required>
        </div>
        <div>
            <label for="anio_finalizacion_empresa_editar">Año de Finalización:</label>
            <input type="text" id="anio_finalizacion_empresa_editar" name="anio_finalizacion_empresa" required>
        </div>
        <div>
            <label for="descripcion_empresa_editar">Descripción:</label>
            <textarea id="descripcion_empresa_editar" name="descripcion_empresa" required></textarea>
        </div>
        <button type="submit">Actualizar</button>
    </form>

    <form id="form_editar_habilidades" method="POST" action="Actualizar/ActualizarHabilidad.php">
        <h2>Editar Habilidades</h2>
        <input type="hidden" id="id_habilidades_editar" name="id_habilidades">
        <div>
            <label for="habilidad_editar">Habilidad:</label>
            <input type="text" id="habilidad_editar" name="habilidad" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>

    <form id="form_editar_idiomas" method="POST" action="Actualizar/ActualizarIdioma.php">
        <h2>Editar Idiomas</h2>
        <input type="hidden" id="id_idioma_editar" name="id_idioma">
        <div>
            <label for="nombre_idioma_editar">Idioma:</label>
            <input type="text" id="nombre_idioma_editar" name="nombre_idioma" required>
        </div>
        <div>
            <label for="nivel_idioma_editar">Nivel:</label>
            <input type="text" id="nivel_idioma_editar" name="nivel_idioma" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>

    <form id="form_editar_cursos" method="POST" action="Actualizar/ActualizarCursos.php">
        <h2>Editar Cursos</h2>
        <input type="hidden" id="id_curso_editar" name="id_curso">
        <div>
            <label for="nombre_curso_editar">Nombre del Curso:</label>
            <input type="text" id="nombre_curso_editar" name="nombre_curso" required>
        </div>
        <div>
            <label for="institucion_curso_editar">Institución:</label>
            <input type="text" id="institucion_curso_editar" name="institucion_curso" required>
        </div>
        <div>
            <label for="duracion_curso_editar">Duración:</label>
            <input type="text" id="duracion_curso_editar" name="duracion_curso" required>
        </div>
        <div>
            <label for="mes_finalizacion_curso_editar">Mes de Finalización:</label>
            <input type="text" id="mes_finalizacion_curso_editar" name="mes_finalizacion_curso" required>
        </div>
        <div>
            <label for="anio_finalizacion_curso_editar">Año de Finalización:</label>
            <input type="text" id="anio_finalizacion_curso_editar" name="anio_finalizacion_curso" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>

    <script>
        // Obtener referencias a los elementos del menú y la sección de consultas
        var cvLink = document.getElementById('cv');
        var datosPersonalesLink = document.getElementById('datos_personales');
        var educacionLink = document.getElementById('educacion');
        var experienciaLink = document.getElementById('experiencia');
        var habilidadesLink = document.getElementById('habilidades');
        var idiomasLink = document.getElementById('idiomas');
        var cursosLink = document.getElementById('cursos');
        var consultaDiv = document.getElementById('consulta');

        // Obtener referencias a los formularios
        var formDatosPersonales = document.getElementById('form_datos_personales');
        var formEducacion = document.getElementById('form_educacion');
        var formExperiencia = document.getElementById('form_experiencia');
        var formHabilidades = document.getElementById('form_habilidades');
        var formIdiomas = document.getElementById('form_idiomas');
        var formCursos = document.getElementById('form_cursos');

        var formEditarDatosPersonales = document.getElementById('form_editar_datos_personales');
        var formEditarEducacion = document.getElementById('form_editar_educacion');
        var formEditarExperiencia = document.getElementById('form_editar_experiencia');
        var formEditarHabilidades = document.getElementById('form_editar_habilidades');
        var formEditarIdiomas = document.getElementById('form_editar_idiomas');
        var formEditarCursos = document.getElementById('form_editar_cursos');

        // Función para ocultar todos los formularios
        function ocultarFormularios() {
            formDatosPersonales.style.display = 'none';
            formEducacion.style.display = 'none';
            formExperiencia.style.display = 'none';
            formHabilidades.style.display = 'none';
            formIdiomas.style.display = 'none';
            formCursos.style.display = 'none';
            formEditarDatosPersonales.style.display = 'none';
            formEditarEducacion.style.display = 'none';
            formEditarExperiencia.style.display = 'none';
            formEditarHabilidades.style.display = 'none';
            formEditarIdiomas.style.display = 'none';
            formEditarCursos.style.display = 'none';
        }

        // Función para mostrar el formulario de edición con los datos actuales
        function mostrarFormularioEdicion(formulario, datos) {
            for (var campo in datos) {
                var elemento = formulario.querySelector('[name="' + campo + '"]');
                if (elemento) {
                    elemento.value = datos[campo];
                }
            }
            formulario.style.display = 'block';
        }

        // Agregar eventos de clic para cada opción del menú
        cvLink.addEventListener('click', function() {
            ocultarFormularios();
            consultaDiv.innerHTML = "<p>Aquí se mostrará la consulta del CV.</p>";
        });

        datosPersonalesLink.addEventListener('click', function() {
            ocultarFormularios();
            formDatosPersonales.style.display = 'block';
            // Consulta para obtener los datos personales del usuario
            <?php
            $sql = "SELECT * FROM DatosPersonales WHERE id_usuario = $id_usuario";
            $result = $conexion->query($sql);
            ?>
            // Mostrar los datos personales como una lista
            var datosPersonales = "<h2>Datos Personales</h2><ul>";
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $rowJSON = json_encode($row, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
                    echo "datosPersonales += '<li><strong>Nombre:</strong> " . $row["nombre_datos"] . "</li>';";
                    echo "datosPersonales += '<li><strong>Licenciatura:</strong> " . $row["licenciatura_datos"] . "</li>';";
                    echo "datosPersonales += '<li><strong>Matrícula:</strong> " . $row["matricula_datos"] . "</li>';";
                    echo "datosPersonales += '<li><strong>Ciudad:</strong> " . $row["ciudad_datos"] . "</li>';";
                    echo "datosPersonales += '<li><strong>Correo:</strong> " . $row["correo_datos"] . "</li>';";
                    echo "datosPersonales += '<li><strong>Teléfono:</strong> " . $row["telefono_datos"] . "</li>';";
                    echo "datosPersonales += \"<form method='POST' action='Eliminar/EliminarDatosPersonales.php' style='display:inline;'>\";";
                    echo "datosPersonales += \"<input type='hidden' name='id_datos' value='" . $row["id_datos"] . "'>\";";
                    echo "datosPersonales += \"<button type='submit'>Eliminar</button>\";";
                    echo "datosPersonales += \"</form>\";";
                    echo "datosPersonales += '<button onclick=\'editarDatosPersonales(" . $rowJSON . ")\'>Editar</button>';";
                    echo "datosPersonales += '<br>';";
                    echo "datosPersonales += '<br>';";
                }
            } else {
                echo "datosPersonales += '<li>No se encontraron datos personales.</li>';";
            }
            ?>
            datosPersonales += "</ul>";
            consultaDiv.innerHTML = datosPersonales;
            formDatosPersonales.style.display = 'block';
        });

        educacionLink.addEventListener('click', function() {
            ocultarFormularios();
            formEducacion.style.display = 'block';
            // Consulta para obtener la educación del usuario
            <?php
            $sql = "SELECT * FROM Educacion WHERE id_usuario = $id_usuario";
            $result = $conexion->query($sql);
            ?>
            // Mostrar la educación como una lista
            var educacion = "<h2>Educación</h2><ul>";
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $rowJSON = json_encode($row, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
                    echo "educacion += '<li><strong>Nombre de la Institución:</strong> " . $row["nombre_institucion"] . "</li>';";
                    echo "educacion += '<li><strong>Nivel:</strong> " . $row["nivel_institucion"] . "</li>';";
                    echo "educacion += '<li><strong>Especialidad:</strong> " . $row["especialidad_institucion"] . "</li>';";
                    echo "educacion += '<li><strong>Mes de Inicio:</strong> " . $row["mes_inicio_institucion"] . "</li>';";
                    echo "educacion += '<li><strong>Año de Inicio:</strong> " . $row["anio_inicio_institucion"] . "</li>';";
                    echo "educacion += '<li><strong>Mes de Finalización:</strong> " . $row["mes_finalizacion_institucion"] . "</li>';";
                    echo "educacion += '<li><strong>Año de Finalización:</strong> " . $row["anio_finalizacion_institucion"] . "</li>';";
                    echo "educacion += \"<form method='POST' action='Eliminar/EliminarEducacion.php' style='display:inline;'>\";";
                    echo "educacion += \"<input type='hidden' name='id_educacion' value='" . $row["id_educacion"] . "'>\";";
                    echo "educacion += \"<button type='submit'>Eliminar</button>\";";
                    echo "educacion += \"</form>\";";
                    echo "educacion += '<button onclick=\'editarEducacion(" . $rowJSON . ")\'>Editar</button>';";
                    echo "educacion += '<br>';";
                    echo "educacion += '<br>';";
                }
            } else {
                echo "educacion += '<li>No se encontraron datos de educación.</li>';";
            }
            ?>
            educacion += "</ul>";
            consultaDiv.innerHTML = educacion;
            formEducacion.style.display = 'block';
        });

        experienciaLink.addEventListener('click', function() {
            ocultarFormularios();
            formExperiencia.style.display = 'block';
            // Consulta para obtener la experiencia del usuario
            <?php
            $sql = "SELECT * FROM ExperienciaL WHERE id_usuario = $id_usuario";
            $result = $conexion->query($sql);
            ?>
            // Mostrar la experiencia como una lista
            var experiencia = "<h2>Experiencia</h2><ul>";
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $rowJSON = json_encode($row, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
                    echo "experiencia += '<li><strong>Nombre Empresa:</strong> " . $row["nombre_empresa"] . "</li>';";
                    echo "experiencia += '<li><strong>Puesto:</strong> " . $row["puesto_empresa"] . "</li>';";
                    echo "experiencia += '<li><strong>Mes de Inicio:</strong> " . $row["mes_inicio_empresa"] . "</li>';";
                    echo "experiencia += '<li><strong>Año de Inicio:</strong> " . $row["anio_inicio_empresa"] . "</li>';";
                    echo "experiencia += '<li><strong>Mes de Finalización:</strong> " . $row["mes_finalizacion_empresa"] . "</li>';";
                    echo "experiencia += '<li><strong>Año de Finalización:</strong> " . $row["anio_finalizacion_empresa"] . "</li>';";
                    echo "experiencia += '<li><strong>Descripción:</strong> " . $row["descripcion_empresa"] . "</li>';";
                    echo "experiencia += \"<form method='POST' action='Eliminar/EliminarExperiencia.php' style='display:inline;'>\";";
                    echo "experiencia += \"<input type='hidden' name='id_experiencia' value='" . $row["id_experiencia"] . "'>\";";
                    echo "experiencia += \"<button type='submit'>Eliminar</button>\";";
                    echo "experiencia += \"</form>\";";
                    echo "experiencia += '<button onclick=\'editarExperiencia(" . $rowJSON . ")\'>Editar</button>';";
                    echo "experiencia += '<br>';";
                    echo "experiencia += '<br>';";
                }
            } else {
                echo "experiencia += '<li>No se encontraron datos de experiencia.</li>';";
            }
            ?>
            experiencia += "</ul>";
            consultaDiv.innerHTML = experiencia;
            formExperiencia.style.display = 'block';
        });

        habilidadesLink.addEventListener('click', function() {
            ocultarFormularios();
            formHabilidades.style.display = 'block';
            // Consulta para obtener las habilidades del usuario
            <?php
            $sql = "SELECT * FROM Habilidades WHERE id_usuario = $id_usuario";
            $result = $conexion->query($sql);
            ?>
            // Mostrar las habilidades como una lista
            var habilidades = "<h2>Habilidades</h2><ul>";
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $rowJSON = json_encode($row, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
                    echo "habilidades += '<li><strong>Habilidad:</strong> " . $row["habilidad"] . "</li>';";
                    echo "habilidades += \"<form method='POST' action='Eliminar/EliminarHabilidades.php' style='display:inline;'>\";";
                    echo "habilidades += \"<input type='hidden' name='id_habilidades' value='" . $row["id_habilidades"] . "'>\";";
                    echo "habilidades += \"<button type='submit'>Eliminar</button>\";";
                    echo "habilidades += \"</form>\";";
                    echo "habilidades += '<button onclick=\'editarHabilidad(" . $rowJSON . ")\'>Editar</button>';";
                    echo "habilidades += '<br>';";
                    echo "habilidades += '<br>';";
                }
            } else {
                echo "habilidades += '<li>No se encontraron datos de habilidades.</li>';";
            }
            ?>
            habilidades += "</ul>";
            consultaDiv.innerHTML = habilidades;
            formHabilidades.style.display = 'block';
        });

        idiomasLink.addEventListener('click', function() {
            ocultarFormularios();
            formIdiomas.style.display = 'block';
            // Consulta para obtener los idiomas del usuario
            <?php
            $sql = "SELECT * FROM Idiomas WHERE id_usuario = $id_usuario";
            $result = $conexion->query($sql);
            ?>
            // Mostrar los idiomas como una lista
            var idiomas = "<h2>Idiomas</h2><ul>";
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $rowJSON = json_encode($row, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
                    echo "idiomas += '<li><strong>Idioma:</strong> " . $row["nombre_idioma"] . "</li>';";
                    echo "idiomas += '<li><strong>Nivel:</strong> " . $row["nivel_idioma"] . "</li>';";
                    echo "idiomas += \"<form method='POST' action='Eliminar/EliminarIdiomas.php' style='display:inline;'>\";";
                    echo "idiomas += \"<input type='hidden' name='id_idioma' value='" . $row["id_idioma"] . "'>\";";
                    echo "idiomas += \"<button type='submit'>Eliminar</button>\";";
                    echo "idiomas += \"</form>\";";
                    echo "idiomas += '<button onclick=\'editarIdioma(" . $rowJSON . ")\'>Editar</button>';";
                    echo "idiomas += '<br>';";
                    echo "idiomas += '<br>';";
                }
            } else {
                echo "idiomas += '<li>No se encontraron datos de idiomas.</li>';";
            }
            ?>
            idiomas += "</ul>";
            consultaDiv.innerHTML = idiomas;
            formIdiomas.style.display = 'block';
        });

        cursosLink.addEventListener('click', function() {
            ocultarFormularios();
            formCursos.style.display = 'block';
            // Consulta para obtener los cursos del usuario
            <?php
            $sql = "SELECT * FROM Cursos WHERE id_usuario = $id_usuario";
            $result = $conexion->query($sql);
            ?>
            // Mostrar los cursos como una lista
            var cursos = "<h2>Cursos</h2><ul>";
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $rowJSON = json_encode($row, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
                    echo "cursos += '<li><strong>Nombre del Curso:</strong> " . $row["nombre_curso"] . "</li>';";
                    echo "cursos += '<li><strong>Institución:</strong> " . $row["institucion_curso"] . "</li>';";
                    echo "cursos += '<li><strong>Duración:</strong> " . $row["duracion_curso"] . "</li>';";
                    echo "cursos += '<li><strong>Mes de Finalización:</strong> " . $row["mes_finalizacion_curso"] . "</li>';";
                    echo "cursos += '<li><strong>Año de Finalización:</strong> " . $row["anio_finalizacion_curso"] . "</li>';";
                    echo "cursos += \"<form method='POST' action='Eliminar/EliminarCursos.php' style='display:inline;'>\";";
                    echo "cursos += \"<input type='hidden' name='id_curso' value='" . $row["id_curso"] . "'>\";";
                    echo "cursos += \"<button type='submit'>Eliminar</button>\";";
                    echo "cursos += \"</form>\";";
                    echo "cursos += '<button onclick=\'editarCurso(" . $rowJSON . ")\'>Editar</button>';";
                    echo "cursos += '<br>';";
                    echo "cursos += '<br>';";
                }
            } else {
                echo "cursos += '<li>No se encontraron datos de cursos.</li>';";
            }
            ?>
            cursos += "</ul>";
            consultaDiv.innerHTML = cursos;
            formCursos.style.display = 'block';
        });

        // Funciones para editar cada sección
        function editarDatosPersonales(datos) {
            ocultarFormularios();
            mostrarFormularioEdicion(formEditarDatosPersonales, datos);
        }

        function editarEducacion(datos) {
            ocultarFormularios();
            mostrarFormularioEdicion(formEditarEducacion, datos);
        }

        function editarExperiencia(datos) {
            ocultarFormularios();
            mostrarFormularioEdicion(formEditarExperiencia, datos);
        }

        function editarHabilidad(datos) {
            ocultarFormularios();
            mostrarFormularioEdicion(formEditarHabilidades, datos);
        }

        function editarIdioma(datos) {
            ocultarFormularios();
            mostrarFormularioEdicion(formEditarIdiomas, datos);
        }

        function editarCurso(datos) {
            ocultarFormularios();
            mostrarFormularioEdicion(formEditarCursos, datos);
        }
    </script>

</body>
</html>

<?php 
} else {
    header('location: ../Login/Index.php');
}
?>
