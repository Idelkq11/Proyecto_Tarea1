 <!-- Idelka Rodriguez 20240255 -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido a mi proyecto en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
        }
        .menu {
            display: flex;
            flex-direction: column;
            gap: 10px;
            background-color: #4CAF50;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        a {
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            padding: 12px 20px;
            text-align: center;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido a mi proyecto en PHP</h1>
        <div class="menu">
            <a href="mi_tarjeta.php">Mi Tarjeta</a>
            <a href="calculadora.php">Calculadora</a>
            <a href="adivina.php">Adivina el Número</a>
            <a href="acerca_de.php">Acerca de</a>
        </div>
    </div>
</body>
</html>
