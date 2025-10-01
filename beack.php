<?php 
$destinatario = "gustavogawlak@gmail.com"; // para quem vai o email
$assunto =$_POST["nome"];
$mensagem = $_POST["mensagem"];
$cabecalhos = "gustavogawlakemail@gmail.com\r\n" . 
              "gustavogawlak@gmail.com\r\n" .
              "X-Mailer: PHP/" . phpversion();

if(mail($destinatario, $assunto, $mensagem, $cabecalhos)) {
    echo "Email enviado com sucesso!";
} else {
    echo "Falha ao enviar o email.";
}
?>