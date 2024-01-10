<?php
session_start();

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
    $password = $_POST["password"];

    $sql = "SELECT id, nome_usuario, senha FROM usuarios WHERE nome_usuario = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row["senha"])) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["nome_usuario"];

            header("Location: index.php");
        } else {
            echo "Senha incorreta";
        }
    } else {
        echo "Usuário não encontrado";
    }
}

$conn->close();
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: #00294b;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            text-align: center;
            position: relative;
            /* Adicionado para permitir o posicionamento absoluto da div .titulo */
        }

        .titulo {
            width: 100%;
            position: absolute;
            top: 100px;
            /* Ajustado para uma margem superior fixa */
        }

        .nome {
            font-size: 5em;
            font-weight: 900;
            font-family: 'Montserrat', sans-serif;
            letter-spacing: 4px;
            text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.8);
            margin-bottom: 0;
            /* Removido para não afetar o layout */
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
            /* Ajustado para ficar abaixo da div .titulo */
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
            margin-bottom: 24px;
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

        .senha {
            margin-bottom: -5px;
        }

        .recuperarSenha a,
        .criarConta a {
            color: rgb(65, 174, 225);
        }

        .criarConta {
            margin-top: 0;
        }

        @media screen and (max-width: 768px) {
            .titulo {
                top: 50px;
                /* Ajustado para uma margem superior fixa */
            }

            .nome {
                font-size: 4.5em;
            }

            form {
                width: 280px;
            }
        }
    </style>

</head>

<body>
    <div class="titulo">
        <p class="nome">UniChat</p>
    </div>
    <form action="login.php" method="post">
        <label for="username">Nome de Usuário:</label>
        <input type="text" name="username" required placeholder="Digite seu nome de usuário">

        <label for="password">Senha:</label>
        <input class="senha" type="password" name="password" required placeholder="Digite sua senha">
        <p class="recuperarSenha"><a href="#">Esqueceu a
                senha? </a> </p>
        <input onclick="handleLogin()" type="submit" value="Login">
        <p class="criarConta">Não tem uma conta? <a href="register.php">Criar</a></p>
    </form>
</body>

</html>