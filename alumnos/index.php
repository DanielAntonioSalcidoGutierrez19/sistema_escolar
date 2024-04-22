<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escolar Alumnos</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: #f3f3f3; /* Color crema */
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .container {
            position: relative;
            padding: 40px;
            background-color: white;
            border: 2px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
            padding-bottom: 20px;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
            color: #555;
        }

        input[type="number"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Sistema escolar Universitario</h1>

        <form action="validar.php" method="POST">
            <label for="user">Matrícula: </label>
            <input type="number" name="user" required><br>
            <label for="password">Contraseña: </label>
            <input type="password" name="pswd" required><br>
            <button type="submit" name="login">Ingresar</button>
        </form>

        <?php
        // Validamos el warning
        if (!empty($_GET["error"]) && $_GET["error"] == 100) {
            echo "<p class='error'>Se ha detectado un acceso indebido</p>";
        }
        ?>
    </div>
</body>

</html>
