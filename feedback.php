<?php
session_start();

if (!isset($_SESSION["user_id"]) || empty($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION["username"];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <style>
        .feedback {
            background-color: #014d8b;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            max-width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .formFeedback {
            background-color: #0061b0;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            color: #f1d4d4;
            text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.3);
            font-weight: 500;
            max-width: 90%;
            width: 400px;
            height: auto;
            margin: auto;
            display: flex;
            flex-direction: column;
            margin: 0 auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }

        textarea {
            max-height: 200px;
            min-height: 200px;
            width: 100%;
            resize: none;
            border: 1px solid rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            background-color: #003f73;
            font-size: 22px;
            padding: 10px;
        }

        #select,
        #problema,
        textarea,
        #botao {
            display: block;
            margin-bottom: 10px;
        }

        #problema {
            width: 100%;
            padding: 15px;
            border: 1px solid #00294b;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #problema {
            width: 100%;
            padding: 10px;
            border: 1px solid #00294b;
            border-radius: 4px;
            box-sizing: border-box;
            color: #f1d4d4;
            font-size: 18px;
            font-weight: bold;
            background-color: #003f73;
        }

        .feedbackButton {
            background-color: #003f73;
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.1);
            color: #f1d4d4;
            text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.3);
            font-weight: 700;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .feedbackButton:hover {
            background-color: rgb(0, 77, 140);
        }

        @media (max-width: 767px) {
            .formFeedback {
                max-width: 80%;
            }
        }
    </style>
</head>

<body>
    <?php
    include('header.php');
    ?>
    <div class="feedback">
        <form class="formFeedback" action="processa_feedback.php" method="post">
            <label id="select" for="problema">Selecione o problema:</label>
            <select id="problema" name="problema">
                <option value="melhoria">Melhoria</option>
                <option value="erro">Erro</option>
                <option value="elogio">Elogio</option>
                <option value="outro">Outro</option>
            </select>

            <label for="feedback">Digite seu feedback:</label>
            <textarea id="feedback" name="feedback" rows="4"></textarea>

            <button id="botao" type="submit" class="feedbackButton">Enviar Feedback</button>
        </form>
    </div>

</body>

</html>