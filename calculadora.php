 <!-- Idelka Rodriguez 20240255 -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora PHP</h1>
    <form method="POST">
        Número 1: <input type="number" name="num1" required><br><br>
        Número 2: <input type="number" name="num2" required><br><br>
        Operación:
        <select name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST["num1"];
        $n2 = $_POST["num2"];
        $op = $_POST["operacion"];
        $resultado = "";

        switch ($op) {
            case "sumar":
                $resultado = $n1 + $n2;
                break;
            case "restar":
                $resultado = $n1 - $n2;
                break;
            case "multiplicar":
                $resultado = $n1 * $n2;
                break;
            case "dividir":
                if ($n2 == 0) {
                    echo "<p style='color: red;'>No se puede dividir entre cero</p>";
                    return;
                } else {
                    $resultado = $n1 / $n2;
                }
                break;
        }

        echo "<h2>Resultado: $resultado</h2>";
    }
    ?>
</body>
</html>
