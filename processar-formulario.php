<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recolher dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $website = $_POST["website"];
    $descricao = $_POST["descricao"];

    // Configurar destinatário e assunto do email
    $destinatario = "turistape23@gmail.com";
    $assunto = "Novo Cadastro de Parceiro";

    // Construir mensagem
    $mensagem = "Nome da Empresa: $nome\n";
    $mensagem .= "Email: $email\n";
    $mensagem .= "Telefone: $telefone\n";
    $mensagem .= "Website: $website\n";
    $mensagem .= "Breve Descrição da Empresa:\n$descricao";

    // Enviar email
    mail($destinatario, $assunto, $mensagem);

    // Redirecionar após o envio
    header("Location: obrigado.html"); // Crie uma página obrigado.html para redirecionar após o envio
    exit();
}
?>
