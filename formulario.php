<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario de Datos</title>
<link rel="stylesheet" href="style.css">
<style>
    /* Estilos para separar las secciones del formulario */
    .seccion {
        margin-bottom: 20px;
        border-bottom: 2px solid #ccc;
        padding-bottom: 20px;
    }
</style>
</head>
<body>
    <div class="container">
<form id="formulario" action="registrar.php" method="POST">

        <!-- Usuarios -->
    <div class="seccion" id="datos-usuario">
        <h2>Datos de Inicio de sesion</h2>
        <label for="correo_usuario">Correo Usuario:</label>
        <input type="email" id="correo_usuario" name="correo_usuario" maxlength="50" required><br><br>
        <label for="contrasena_usuario">Contraseña:</label>
        <input type="text" id="contrasena_usuario" name="contrasena_usuario" maxlength="20" required><br><br>
        
    </div>


   <!-- Datos Personales -->
<div class="seccion" id="datos-personales">
    <h2>Datos Personales</h2>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" maxlength="20" required><br><br>
    <label for="segundo_nombre">Segundo Nombre:</label>
    <input type="text" id="segundo_nombre" name="segundo_nombre" maxlength="15"><br><br>
    <label for="apellido_paterno">Apellido Paterno:</label>
    <input type="text" id="apellido_paterno" name="apellido_paterno" maxlength="20" required><br><br>
    <label for="apellido_materno">Apellido Materno:</label>
    <input type="text" id="apellido_materno" name="apellido_materno" maxlength="20" required><br><br>
    <label for="licenciatura">Licenciatura:</label>
    <input type="text" id="licenciatura" name="licenciatura" maxlength="50" required><br><br>
    <label for="matricula_usuario">Matrícula:</label>
        <input type="text" id="matricula_usuario" name="matricula_usuario" maxlength="10" required><br><br>
    <label for="estado">Estado:</label>
    <select id="estado" name="estado">
        <option value="Aguascalientes">Aguascalientes</option>
        <option value="Baja California">Baja California</option>
        <option value="Baja California Sur">Baja California Sur</option>
        <option value="Campeche">Campeche</option>
        <option value="Chiapas">Chiapas</option>
        <option value="Chihuahua">Chihuahua</option>
        <option value="Ciudad de México">Ciudad de México</option>
        <option value="Coahuila">Coahuila</option>
        <option value="Colima">Colima</option>
        <option value="Durango">Durango</option>
        <option value="Estado de México">Estado de México</option>
        <option value="Guanajuato">Guanajuato</option>
        <option value="Guerrero">Guerrero</option>
        <option value="Hidalgo">Hidalgo</option>
        <option value="Jalisco">Jalisco</option>
        <option value="Michoacán">Michoacán</option>
        <option value="Morelos">Morelos</option>
        <option value="Nayarit">Nayarit</option>
        <option value="Nuevo León">Nuevo León</option>
        <option value="Oaxaca">Oaxaca</option>
        <option value="Puebla">Puebla</option>
        <option value="Querétaro">Querétaro</option>
        <option value="Quintana Roo">Quintana Roo</option>
        <option value="San Luis Potosí">San Luis Potosí</option>
        <option value="Sinaloa">Sinaloa</option>
        <option value="Sonora">Sonora</option>
        <option value="Tabasco">Tabasco</option>
        <option value="Tamaulipas">Tamaulipas</option>
        <option value="Tlaxcala">Tlaxcala</option>
        <option value="Veracruz">Veracruz</option>
        <option value="Yucatán">Yucatán</option>
        <option value="Zacatecas">Zacatecas</option>
    </select><br><br>
    <label for="telefono">Teléfono(10 digitos):</label>
    <input type="text" id="telefono" name="telefono" maxlength="10" required><br><br>
    <label for="correo">Correo de contacto:</label>
    <input type="email" id="correo" name="correo" maxlength="50" required><br><br>
</div>



        <!-- Habilidades -->
    <div class="seccion" id="habilidades">
        <h2>Habilidades</h2>
        <div id="con_habilidades" name ="con_habilidades"  class="habilidad">
            <label for="habilidad">Habilidad:</label>
            <input type="text" id="habilidad" name="habilidad" maxlength="30">
        </div>
        <button type="button" id="eliminar-habilidad" class="eliminar-habilidad">Eliminar</button>
        <button type="button" id="agregar-habilidad" class="agregar-habilidad">Agregar otra habilidad</button>
    </div>
    



    <!-- Idiomas -->
    <div class="seccion" id="idiomas">
        <h2>Idiomas</h2>
        <div class="idioma">
            <label for="idioma">Idioma:</label>
            <input type="text" id="idioma" name="idioma" maxlength="20" required><br><br>
            <label for="nivel_idioma">Nivel:</label>
            <select id="nivel_idioma" name="nivel_idioma">
                <option value="Básico">Básico</option>
                <option value="Intermedio">Intermedio</option>
                <option value="Avanzado">Avanzado</option>
            </select><br><br>
        </div>
        <button type="button" class="eliminar-idioma">Eliminar</button>
        <button type="button" class="agregar-idioma">Agregar otro idioma</button>
    </div>
 



    <!-- Cursos -->
    <div class="seccion" id="cursos">
        <h2>Cursos y Certificaciones (Omitir si no cuentas con alguno)</h2>
        <div class="curso">
            <label for="nombre_curso">Nombre del Curso:</label>
            <input type="text" id="nombre_curso" name="nombre_curso" maxlength="100" required><br><br>
            <label for="institucion_curso">Institución:</label>
            <input type="text" id="institucion_curso" name="institucion_curso" maxlength="50" required><br><br>
            <label for="duracion_curso">Duración (horas):</label>
            <input type="text" id="duracion_curso" name="duracion_curso" maxlength="3" required><br><br>
            <label for="mes_finalizacion_curso">Mes de Finalización:</label>
            <input type="text" id="mes_finalizacion_curso" name="mes_finalizacion_curso" maxlength="10" required><br><br>
            <label for="anio_finalizacion_curso">Año de Finalización:</label>
            <input type="text" id="anio_finalizacion_curso" name="anio_finalizacion_curso" maxlength="4" required><br><br>
        </div>
        <button type="button" class="eliminar-curso">Eliminar</button>
        <button type="button" id="agregar-curso">Agregar otro curso</button>
    </div>
    

    <!-- Experiencia Laboral -->
    <div class="seccion" id="experiencia-laboral">
        <h2>Experiencia Laboral (Omitir si no cuentas con experiencia laboral)</h2>
        <div class="experiencia">
            <label for="nombre_empresa">Nombre de la Empresa:</label>
            <input type="text" id="nombre_empresa" name="nombre_empresa" maxlength="60" required><br><br>
            <label for="puesto_empresa">Puesto:</label>
            <input type="text" id="puesto_empresa" name="puesto_empresa" maxlength="70" required><br><br>
            <label for="mes_inicio_empresa">Mes de Inicio:</label>
            <input type="text" id="mes_inicio_empresa" name="mes_inicio_empresa" maxlength="10" required><br><br>
            <label for="anio_inicio_empresa">Año de Inicio:</label>
            <input type="text" id="anio_inicio_empresa" name="anio_inicio_empresa" maxlength="4" required><br><br>
            <label for="mes_finalizacion_empresa">Mes de Finalización (Si esta en curso, escriba PRESENTE e ignore Año de finalización):</label>
            <input type="text" id="mes_finalizacion_empresa" name="mes_finalizacion_empresa" maxlength="10" required><br><br>
            <label for="anio_finalizacion_empresa">Año de Finalización:</label>
            <input type="text" id="anio_finalizacion_empresa" name="anio_finalizacion_empresa" maxlength="4" required><br><br>
            <label for="descripcion_empresa">Descripción:</label>
            <textarea id="descripcion_empresa" name="descripcion_empresa" maxlength="200"></textarea><br><br>
        </div>
        <button type="button" class="eliminar-experiencia">Eliminar</button>
        <button type="button" class="agregar-experiencia">Agregar otra experiencia laboral</button>
    </div>



    <!-- Educación -->
<div class="seccion" id="educacion">
    <h2>Educación</h2>
    <label for="nombre_institucion">Nombre de la Institución:</label>
    <input type="text" id="nombre_institucion" name="nombre_institucion" maxlength="70" required><br><br>
    <label for="nivel_institucion">Nivel de Educación:</label>
    <select id="nivel_institucion" name="nivel_institucion" required>
        <option value="">Seleccione un nivel</option>
        <option value="Media Superior">Media Superior</option>
        <option value="Licenciatura">Licenciatura</option>
        <option value="Postgrado">Postgrado</option>
    </select><br><br>
    <label for="especialidad_institucion">Especialidad (p. ej. Ingeniería en Computación, Técnico Automotriz):</label>
    <input type="text" id="especialidad_institucion" name="especialidad_institucion" maxlength="50"><br><br>
    <label for="mes_inicio_institucion">Mes de Inicio:</label>
    <input type="text" id="mes_inicio_institucion" name="mes_inicio_institucion" maxlength="10" required><br><br>
    <label for="anio_inicio_institucion">Año de Inicio:</label>
    <input type="text" id="anio_inicio_institucion" name="anio_inicio_institucion" maxlength="4" required><br><br>
    <label for="mes_finalizacion_institucion">Mes de Finalización (Si esta en curso, escriba PRESENTE e ignore Año de finalización):</label>
    <input type="text" id="mes_finalizacion_institucion" name="mes_finalizacion_institucion" maxlength="10" required><br><br>
    <label for="anio_finalizacion_institucion">Año de Finalización:</label>
    <input type="text" id="anio_finalizacion_institucion" name="anio_finalizacion_institucion" maxlength="4" required><br><br>
    <button type="button" class="eliminar-educacion">Eliminar</button>
    <button type="button" class="agregar-educacion">Agregar otra educación</button>
</div>

</select><br><br>
</select><br><br>

     <!--  <input type = "submit" name = "register" value = "Enviar">   -->
    <button type="submit" name = "register" >Enviar</button>

</form>
</div>

<?php   
include("registrar.php");
?>


<script src="script.js"></script>

</body>
</html>