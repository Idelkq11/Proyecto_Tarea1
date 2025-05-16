 <!-- Idelka Rodriguez 20240255 -->

<?php
$nombre = "Idelka";
$apellido = "Rodriguez";
$edad = 19;
$carrera = "Desarollo de sofware";
$universidad = "ITLA";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mi Tarjeta</title>
</head>
<body>
    <h1>Mi Información Personal</h1>
    <p><strong>Nombre:</strong> <?php echo $nombre . " " . $apellido; ?></p>
    <p><strong>Edad:</strong> <?php echo $edad; ?></p>
    <p><strong>Carrera:</strong> <?php echo $carrera; ?></p>
    <p><strong>Universidad:</strong> <?php echo $universidad; ?></p>

    <?php
    if ($edad >= 18) {
        echo "<p style='color: green;'>Eres mayor de edad</p>";
    } else {
        echo "<p style='color: red;'>Eres menor de edad</p>";
    }
    ?>
</body>
</html>
