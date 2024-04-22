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

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="number"],
        input[type="password"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            width: 100%;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Sistema Escolar Académicos</h1>

        <form action="validar.php" method="POST">
            <label for="user">Expediente:</label>
            <input type="number" name="user" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="pswd" required>

            <button type="submit" name="login">Ingresar</button>
        </form>

        <?php
        // Validación de errores
        if (!empty($_GET["error"]) && $_GET["error"] == 100) {
            echo "<p class='error'>Se ha detectado un acceso indebido</p>";
        }
        ?>
    </div>

</body>

</html>