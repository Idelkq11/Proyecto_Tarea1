 <!-- Idelka Rodriguez 20240255 -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Adivina el número</title>
</head>
<body>
    <h1>Adivina un número del 1 al 5</h1>
    <form method="POST">
        <input type="number" name="numero" min="1" max="5" required>
        <input type="submit" value="Adivinar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero_usuario = $_POST["numero"];
        $numero_secreto = rand(1, 5);

        if ($numero_usuario == $numero_secreto) {
            echo "<p style='color: green;'>¡Wow, adivinaste!</p>";
        } else {
            echo "<p style='color: red;'>¡Sigue intentando! El número era $numero_secreto</p>";
        }
    }
    ?>
</body>
</html>
