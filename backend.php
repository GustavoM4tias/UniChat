<?php
$host = "localhost";
$db_user = "id21589702_gustavo";
$db_password = "Otamigu3#";
$db_name = "id21589702_banco";

$conn = new mysqli($host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userName = $_POST["user_name"];
    $messageText = $_POST["message_text"];

    $sql = "INSERT INTO messages (user_name, message_text) VALUES ('$userName', '$messageText')";
    $conn->query($sql);
}

$sql = "SELECT * FROM messages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $userName = $row["user_name"];
        $messageText = $row["message_text"];
        $timestamp = DateTime::createFromFormat('Y-m-d H:i:s', $row["timestamp"]);

        $formattedTimestamp = $timestamp->format('H:i d/m/y');

        echo "<div class='message'>
                <span class='message-info'><strong>$userName</strong> <i> $formattedTimestamp</i></span>
                <p>$messageText</p>
              </div>";
    }
}

$conn->close();
?>