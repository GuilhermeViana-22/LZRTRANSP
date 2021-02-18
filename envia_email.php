<?php
//inicializando com as variaves que receberam as informações do metodo post 
$nomeEmpresa =$_POST['nameEmpresa'];
$cnpjEmpresa =$_POST['cnpjEmpresa'];
$nomeResponsavel = $_POST['nomeResponsavel'];
$emailContato =$_POST['emailContato'];
$telefoneContato = $_POST['telefoneContato'];
$PesoCarga = $_POST['PesoCarga'];
$tipoRota = $_POST['tipoRota'];
$classificacao = $_POST['classificacao'];
$frenquecia = $_POST['frenquecia'];
$produto = $_POST['produto'];
$data = date('d/m/Y H:i:s');
$status = 0;

require 'PHPMailer/PHPMailerAutoload.php'; // faz a ligação com a classe php mailer

$mail = new PHPMailer(); // instacia a classe 
$mail->isSMTP(); // informa o tipo de entrada 

$mail->Host = "smtp.mail.yahoo.com";// smtp do gmail: gmail.com
$mail->Port = 465; //porta do gmail 587;
$mail->SMTPSecure = "tls"; // informa que o email é seguro 
$mail->SMTPAuth = true; // e informa que o emaio é verificado
$mail->Username = "email do lanzara"; // email do destinatario
$mail->Password = "senha do lazara"; // senha do destinatrio de acesso ao email

$mail->setFrom($mail->Username, $nomeEmpresa); // iforma o remetente 
$mail->addAddress('elton13cdz@gmail.com'); // emaio que vai recerber as informação(destinatario)
$mail->Subject = "contato pelo site lanzara ttrsnporte";// titulo do email (assunto)
// abaixo contem o corpo do email com as informações 
$conteudo_email = "<strong>voce recebeu um contato da empresa</strong> $nomeEmpresa <strong>E-mail:</strong:($emailContato):
<br><br>
<strong>CNPJ:</strong> $cnpjEmpresa.<br>
<strong>Nome do Responsavel:</strong> $nomeResponsavel<br>
<strong>Telefone de Contato:</strong> $telefoneContato <br>
<strong>Peso da Carga:</strong> $PesoCarga <br>
<strong>Tipo de Rota:</strong> $tipoRota <br>
<strong>Classificação:</strong> $classificacao <br>
<strong>Frequêcia:</strong> $frenquecia <br>
<strong>Tipo de Produto:</strong> $produto <br>
<strong>Data:</strong>  $data <br>
";
$mail->isHTML(true);// informa que possui html
$mail->Body = $conteudo_email; // coloca as infomaçoes no corpo do email 

if ($mail->send()) { // verifica se foi enviado ou nao.
    $status = 1;
   // echo 'Email enviado com sucesso.';
   header("Location: index.php");
} else {
    $status = 2;
    //echo 'Email não enviado.'. $mail->ErrorInfo;
     header("Location: index.php?erro=".$status);
}
?>