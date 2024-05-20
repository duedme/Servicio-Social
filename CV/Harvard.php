<?php
session_start();
if (isset($_SESSION["id_usuario"])) {
    $id_usuario = $_SESSION['id_usuario'];
    include_once('../Config/Conexion.php');

    // Consultar datos personales
    $sqlDatosPersonales = "SELECT * FROM DatosPersonales WHERE id_usuario = $id_usuario";
    $resultDatosPersonales = $conexion->query($sqlDatosPersonales);
    $datosPersonales = $resultDatosPersonales->fetch_assoc();

    // Consultar educación
    $sqlEducacion = "SELECT * FROM Educacion WHERE id_usuario = $id_usuario";
    $resultEducacion = $conexion->query($sqlEducacion);

    // Consultar experiencia
    $sqlExperiencia = "SELECT * FROM ExperienciaL WHERE id_usuario = $id_usuario";
    $resultExperiencia = $conexion->query($sqlExperiencia);

    // Consultar habilidades
    $sqlHabilidades = "SELECT * FROM Habilidades WHERE id_usuario = $id_usuario";
    $resultHabilidades = $conexion->query($sqlHabilidades);

    // Consultar idiomas
    $sqlIdiomas = "SELECT * FROM Idiomas WHERE id_usuario = $id_usuario";
    $resultIdiomas = $conexion->query($sqlIdiomas);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae - Harvard Style</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .cv-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .cv-header h1 {
            margin: 0;
            font-size: 36px;
        }
        .cv-header p {
            margin: 5px 0;
            font-size: 18px;
        }
        .cv-section {
            margin-bottom: 30px;
        }
        .cv-section h2 {
            border-bottom: 2px solid #000;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }
        .cv-section ul {
            list-style-type: none;
            padding: 0;
        }
        .cv-section ul li {
            margin-bottom: 10px;
        }
        .cv-section .institution,
        .cv-section .company {
            font-weight: bold;
        }
        .cv-section .date {
            font-style: italic;
        }
        .cv-section .description {
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="cv-header">
        <h1><?php echo $datosPersonales['nombre_datos'] ?? 'Nombre del Usuario'; ?></h1>
        <?php if ($datosPersonales): ?>
            <p><?php echo $datosPersonales['correo_datos']; ?></p>
            <p><?php echo $datosPersonales['telefono_datos']; ?></p>
            <p><?php echo $datosPersonales['ciudad_datos']; ?></p>
        <?php endif; ?>
    </div>

    <?php if ($resultEducacion->num_rows > 0): ?>
    <div class="cv-section">
        <h2>Educación</h2>
        <ul>
            <?php while($row = $resultEducacion->fetch_assoc()): ?>
            <li>
                <div class="institution"><?php echo $row['nombre_institucion']; ?></div>
                <div class="date"><?php echo $row['mes_inicio_institucion'] . ' ' . $row['anio_inicio_institucion'] . ' - ' . $row['mes_finalizacion_institucion'] . ' ' . $row['anio_finalizacion_institucion']; ?></div>
                <div class="description"><?php echo $row['nivel_institucion'] . ' en ' . $row['especialidad_institucion']; ?></div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if ($resultExperiencia->num_rows > 0): ?>
    <div class="cv-section">
        <h2>Experiencia Laboral</h2>
        <ul>
            <?php while($row = $resultExperiencia->fetch_assoc()): ?>
            <li>
                <div class="company"><?php echo $row['nombre_empresa']; ?></div>
                <div class="date"><?php echo $row['mes_inicio_empresa'] . ' ' . $row['anio_inicio_empresa'] . ' - ' . $row['mes_finalizacion_empresa'] . ' ' . $row['anio_finalizacion_empresa']; ?></div>
                <div class="description"><?php echo $row['puesto_empresa']; ?></div>
                <div class="description"><?php echo $row['descripcion_empresa']; ?></div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if ($resultHabilidades->num_rows > 0): ?>
    <div class="cv-section">
        <h2>Habilidades</h2>
        <ul>
            <?php while($row = $resultHabilidades->fetch_assoc()): ?>
            <li><?php echo $row['habilidad']; ?></li>
            <?php endwhile; ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if ($resultIdiomas->num_rows > 0): ?>
    <div class="cv-section">
        <h2>Idiomas</h2>
        <ul>
            <?php while($row = $resultIdiomas->fetch_assoc()): ?>
            <li><?php echo $row['nombre_idioma'] . ' - ' . $row['nivel_idioma']; ?></li>
            <?php endwhile; ?>
        </ul>
    </div>
    <?php endif; ?>

</body>
</html>

<?php 
    $conexion->close();
} else {
    header('location: ../Index.php');
}
?>
