<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escolar Académicos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 50px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="number"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>

<body>

    <h1>Sistema Escolar Académicos</h1>

    <form action="validar.php" method="POST">

        <label for="user">Expediente: </label>
        <input type="number" name="user" value="999900020" required>

        <br>

        <label for="password">Contraseña: </label>
        <input type="password" name="pswd" value="123" required>

        <br>

        <button type="submit" name="login">Iniciar sesión</button>

    </form>

    <?php
    // Validación de errores
    if (!empty($_GET["error"]) && $_GET["error"] == 100) {
        echo "<p class='error-message'>Se ha detectado un acceso indebido</p>";
    }
    ?>

</body>

</html>