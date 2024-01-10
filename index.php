<?php
// Iniciar a sessão
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION["user_id"]) || empty($_SESSION["user_id"])) {
    // Se o usuário não estiver autenticado, redirecione para a página de login
    header("Location: login.php");
    exit;
}

// Obter o nome do usuário logado
$username = $_SESSION["username"];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        #chat-container {
            width: 100vw;
            min-height: 100vh;
            background-color: #fff;
            overflow: hidden;
            margin: 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #message-container::-webkit-scrollbar {
            width: 12px;
        }

        #message-container::-webkit-scrollbar-thumb {
            background-color: #0061b0;
            border-radius: 6px;
            border: 1px solid #00294b;
        }

        #message-container::-webkit-scrollbar-track {
            background-color: #b8e1ff;
        }

        #message-container {
            flex-grow: 1;
            overflow-y: auto;
            max-height: calc(85vh - 3.7vh);
            position: sticky;
            right: 0;
            width: 100vw;
            z-index: 2;
            margin-top: 80px;
            overflow-x: hidden;
        }

        #message-input {
            width: 100%;
            border: none;
            border-radius: 10px;
            margin-right: 0px;
            font-size: 22px;
            font-weight: 600;
            margin: 5px;
            background: none;
            border: none;
            outline: none;
            padding: 10px 20px;
            border-radius: 9999px;
            background-color: rgba(255, 255, 255, 0.6);
            box-shadow: inset 2px 5px 10px rgba(0, 0, 0, 0.3);
            transition: 300ms ease-in-out;
        }

        #message-input:focus {
            transform: scale(1.005);
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.2);
        }

        #message-input::placeholder {
            color: white;
            font-weight: 500;
            text-shadow: 1px 1px 10px rgba(5, 5, 5, 0.2);
        }


        #input-container>i {
            color: #fff;
            border-radius: 10px;
            margin: 0px 30px 0px 15px;
            cursor: pointer;
            font-size: 46px;
            filter: drop-shadow(0px 0px 5px rgba(0, 0, 0, 0.6));
        }

        #input-container {
            z-index: 999;
            position: fixed;
            bottom: 0;
            height: 8.5vh;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #00294b;
            border-radius: 0;
        }

        .message {
            background-color: #e3f2fd;
            padding: 0px;
            border: 1px solid #bbdefb;
            position: relative;
            display: flex;
            flex-direction: column;
            min-height: 10%;
            width: auto;
            padding: 10px;
        }

        .message-info strong {
            font-size: 18px;
        }

        .message-info i {
            font-size: 14px;
            color: rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 767px) {
            #message-container {
                max-height: calc(85vh - 5.4vh);
            }
        }
    </style>
    <title>Chat App</title>
</head>

<body>
    <?php
    include('header.php');
    ?>

    <div id="chat-container">
        <div id="message-container"></div>
        <div id="input-container">
            <input type="text" id="message-input" placeholder="Digite sua mensagem...">
            <i onclick="sendMessage()" class="fa-solid fa-arrow-right"></i>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            loadMessages();
        });

        function loadMessages() {
            const messageContainer = document.getElementById("message-container");

            const xhr = new XMLHttpRequest();
            xhr.open("GET", "backend.php", true);

            xhr.onload = function () {
                if (xhr.status == 200) {
                    messageContainer.innerHTML = xhr.responseText;
                    messageContainer.scrollTop = messageContainer.scrollHeight;
                }
            };

            xhr.send();
        }

        function sendMessage() {
            const messageInput = document.getElementById("message-input");
            const message = messageInput.value.trim();

            if (message !== "") {
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "backend.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                xhr.onload = function () {
                    if (xhr.status == 200) {
                        loadMessages();
                    }
                };

                xhr.send(`user_name=<?php echo $username; ?>&message_text=${encodeURIComponent(message)}`);
                messageInput.value = "";
            }
        }


    </script>


</body>

</html>