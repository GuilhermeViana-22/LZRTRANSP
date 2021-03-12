<?php
require 'PHPMailer/PHPMailerAutoload.php'; // faz a ligação com a classe php mailer
//inicializando com as variaves que receberam as informações do metodo post 
    $nomeEmpresa = $_POST['nameEmpresa'];
    $cnpjEmpresa = $_POST['cnpjEmpresa'];
    $cnpjdestino = $_POST['cnpjdestino'];
    $nomeResponsavel = $_POST['nomeResponsavel'];
    $emailContato = $_POST['emailContato'];
    $telefoneContato = $_POST['telefoneContato'];
    $PesoCarga = $_POST['PesoCarga'];
    $tipoCarga = $_POST['tipoCarga'];
    $tipoRota = $_POST['tipoRota'];
    $Valor_produto = $_POST['Valor_produto'];
    $classificacao = $_POST['classificacao'];
    $frenquecia = $_POST['frenquecia'];
    $produto = $_POST['produto'];
    $data = date('d/m/Y H:i:s');
    $result = 0;

    
    $mail = new PHPMailer(); // instacia a classe 
    $mail->isSMTP(); // informa o tipo de entrada 

    $mail->Host = "smtp.hostinger.com.br"; // smtp do servidor hostinger.com.br
    $mail->Port = 587; //porta do servido para o envio de email
    $mail->SMTPSecure = "tls"; // informa que o email é seguro 
    $mail->SMTPAuth = true; // e informa que o emaio é verificado
    $mail->Username = "cotacaofrete@lzrtransportes.com.br"; // email do destinatario
    $mail->Password = "Lzrtransporte2021"; // senha do destinatrio de acesso ao email

    $mail->setFrom($mail->Username, $nomeEmpresa); // iforma o remetente 
    $mail->addAddress('elton13cdz@yahoo.com'); // emaio que vai recerber as informação(destinatario)
    $mail->Subject = "NOVA COTACAO RECEBIDA !"; // titulo do email (assunto)
    // abaixo contem o corpo do email com as informações 
    $conteudo_email = "<strong>Lanzara você acaba de receber uma cotação da empresa</strong> $nomeEmpresa
  <br><br>
 <strong>CNPJ Remetente :</strong> $cnpjEmpresa.<br>
 <strong>CNPJ Destino :</strong> $cnpjdestino.<br>
 <strong>Nome do Responsavel :</strong> $nomeResponsavel<br>
 <strong>Email de contato :</strong> $emailContato<br>
 <strong>Telefone de Contato :</strong> $telefoneContato <br>
 <strong>Peso da Carga :</strong> $PesoCarga <br>
 <strong>Tipo de Carga :</strong> $tipoCarga <br>
 <strong>Tipo de Rota :</strong> $tipoRota <br>
 <strong>Frequêcia :</strong> $frenquecia <br>
 <strong>valor aproximado da Nf-e :</strong> $Valor_produto <br>
 <strong>Tipo de Produto :</strong> $produto <br>
 <strong>Classificação :</strong> $classificacao <br>
  <strong>Data :</strong>  $data <br>";

    $mail->isHTML(true); // informa que possui html
    $mail->Body = $conteudo_email; // coloca as infomaçoes no corpo do email 
    $resul = $mail->send();
    
if ($resul) {
    echo 'Cotação enviada , Entraremos em contato em breve!';
} else {
    echo 'E-mail não enviado'.$mail->ErrorInfo;
    
    
}
