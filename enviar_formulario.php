<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "dev.wb10@gmail.com";
    $subject = "Formulário de contato do site";
    $body = "Nome: $name\nEmail: $email\nMensagem:\n$message";

    mail($to, $subject, $body);

    // redirecionar para uma página de confirmação
    header("Location: confirmacao.html");
    exit();
}
?>