<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'vendor/autoload.php';
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $assunto = $_POST['assunto'];
        $texto = $_POST['texto'];

        

        $from = new SendGrid\Email(null, "elton13cdz@gmail.com");
        $subject = "Contato";
        $to = new SendGrid\Email(null, "elton13cdz@gmail.com");
        $content = new SendGrid\Content("text/html", "ola elton, <br><br>nova mensagem de contato<br><br>
        Nome: $nome<br> E-mail:$email<br> Telefone:$telefone <br> Assunto:$assunto <br> Texto:$texto");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave : senha Kelvin!993jeffrey
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo $response->statusCode();
        echo $response->headers();
        echo $response->body();
        ?>
    </body>
</html>
