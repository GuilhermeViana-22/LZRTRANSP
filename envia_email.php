
        <?php
        require 'vendor\autoload.php';
        $nome ="elton"; //$_POST['nome'];
        $email = "elton14cdz@gmail.com ";// $_POST['email'];
        $telefone ="1122221514"; //$_POST['telefone'];
        $assunto ="teste email sendgrid"; //$_POST['assunto'];
        $texto ="esta funcionando"; //$_POST['texto'];

        

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
 
