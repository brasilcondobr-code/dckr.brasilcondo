<?php

echo "<h1>Teste de Ambiente - Brasil Condo</h1>";

// --- Teste de Conexão com o Banco de Dados ---
$db_host = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASS');
$db_name = getenv('DB_NAME');

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    echo "<h2><span style='color: red;'>Falha na conexão com o MySQL:</span> " . htmlspecialchars($conn->connect_error) . "</h2>";
} else {
    echo "<h2><span style='color: green;'>Conexão com o banco de dados MySQL bem-sucedida!</span></h2>";
    $conn->close();
}

echo "<hr>";

// --- Exibe as informações do PHP ---
phpinfo();

?>
