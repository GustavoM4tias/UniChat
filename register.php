<?php
$host = "localhost";
$db_user = "id21589702_gustavo";
$db_password = "Otamigu3#";
$db_name = "id21589702_banco";

$conn = new mysqli($host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // hash da senha
    $email = $_POST["email"];

    $check_username = "SELECT * FROM usuarios WHERE nome_usuario = '$username'";
    $result_username = $conn->query($check_username);

    $check_email = "SELECT * FROM usuarios WHERE email = '$email'";
    $result_email = $conn->query($check_email);

    if ($result_username->num_rows > 0) {
        echo "Erro ao registrar: Nome de usuário já em uso.";
    } elseif ($result_email->num_rows > 0) {
        echo "Erro ao registrar: E-mail já em uso.";
    } else {
        $sql = "INSERT INTO usuarios (nome_usuario, senha, email) VALUES ('$username', '$password', '$email')";

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");
            exit;
        } else {
            echo "Erro ao registrar: " . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <style>
        body {
            background-color: #00294b;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        .titulo {
            width: 100%;
            position: absolute;
            top: 100px;/
        }

        .nome {
            font-size: 4em;
            font-weight: 900;
            font-family: 'Montserrat', sans-serif;
            letter-spacing: 4px;
            text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.8);
            margin-bottom: 0;
            color: #fff;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 360px;
            padding: 20px 30px 10px;
            border-radius: 15px;
            background: linear-gradient(to top right, #00294b, #004576, #00559a);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
            margin: 0 auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            margin-top: 20px;
        }

        label {
            font-size: 21.6px;
            margin-bottom: 12px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            text-align: left;
            width: 100%;
        }

        input {
            width: 90%;
            padding: 14.4px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 100px;
            background-color: rgba(255, 255, 255, 0.6);
            color: #00294b;
            font-size: 19.2px;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.5);
        }

        input::placeholder {
            color: #00294b;
            opacity: 0.7;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #00294b;
            color: #fff;
            font-size: 22px;
            font-weight: bold;
            text-shadow: 0px 0px 2px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            margin-top: 10px;
            transition: 0.3s ease;
            box-shadow: 10px -6px 10px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(0, 83, 218, 0.2);
        }

        input[type="submit"]:hover {
            background-color: #004c8a;
        }

        .enviar {
            margin-bottom: 25px;
        }

        .entrarConta a {
            color: rgb(65, 174, 225);
        }

        .entrarConta {
            margin-top: 0;
        }

        @media screen and (max-width: 768px) {
            .titulo {
                top: 50px;
            }

            .nome {
                font-size: 3em;
            }

            form {
                width: 280px;
            }
        }
    </style>
</head>

<body>
    <div class="titulo">
        <p class="nome">Criar Conta</p>
    </div>
    <h1>Criar Conta</h1>
    <form action="register.php" method="post">
        <label for="username">Nome de Usuário:</label>
        <input type="text" name="username" required placeholder="Nome de Usuário"><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" required placeholder="Email"><br>

        <label for="password">Senha:</label>
        <input type="password" name="password" required placeholder="Senha"><br>

        <input class="enviar" type="submit" value="Registrar">
        <p class="entrarConta">Já tem uma conta? <a href="login.php">Entrar</a></p>

    </form>
</body>

</html>