<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $website = $_POST["website"];
    $descricao = $_POST["descricao"];

    $destinatario = "turistape23@gmail.com";
    $assunto = "Novo Cadastro de Parceiro";

    $mensagem = "Nome da Empresa: $nome\n";
    $mensagem .= "Email: $email\n";
    $mensagem .= "Telefone: $telefone\n";
    $mensagem .= "Website: $website\n";
    $mensagem .= "Breve Descrição da Empresa:\n$descricao";

    mail($destinatario, $assunto, $mensagem);

    header("Location: index.html");
    exit();
}
?>
