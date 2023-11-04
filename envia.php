<?php
$servername = "localhost";
$username = "root";
$password = "Francisca27032002";
$dbname = "turismo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO cliente (nome, email, mensagem) VALUES ('$nome', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Dados do formulário inseridos com sucesso no banco de dados.";
} else {
    echo "Erro ao inserir os dados no banco de dados: " . $conn->error;
}

$conn->close();
?>