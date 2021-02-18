<?php
//inicializando com as variaves que receberam as informações do metodo post 
$nomeEmpresa =$_POST['nameEmpresa'];
$cnpjEmpresa =$_POST['cnpjEmpresa'];
$cnpjdestino =$_POST['cnpjdestino'];
$nomeResponsavel = $_POST['nomeResponsavel'];
$emailContato =$_POST['emailContato'];
$telefoneContato = $_POST['telefoneContato'];
$PesoCarga = $_POST['PesoCarga'];
$tipoCarga = $_POST['tipoCarga'];
$Valor_produto = $_POST['Valor_produto'];
$classificacao = $_POST['classificacao'];
$frenquecia = $_POST['frenquecia'];
$produto = $_POST['produto'];
$data = date('d/m/Y H:i:s');
$status = 0;

require 'PHPMailer/PHPMailerAutoload.php'; // faz a ligação com a classe php mailer

$mail = new PHPMailer(); // instacia a classe 
$mail->isSMTP(); // informa o tipo de entrada 

$mail->Host = "smtp.gmail.com";// smtp do gmail: gmail.com
$mail->Port = 587; //porta do gmail 587; porta do yahoo 465
$mail->SMTPSecure = "tls"; // informa que o email é seguro 
$mail->SMTPAuth = true; // e informa que o emaio é verificado
$mail->Username = "gguicido.viana@gmail.com"; // email do destinatario
$mail->Password = "1Marmaduki"; // senha do destinatrio de acesso ao email

$mail->setFrom($mail->Username, $nomeEmpresa); // iforma o remetente 
$mail->addAddress('gguicido.viana@gmail.com'); // emaio que vai recerber as informação(destinatario)
$mail->Subject = "NOVA COTACAO RECEBIDA !";// titulo do email (assunto)
// abaixo contem o corpo do email com as informações 
$conteudo_email = "<strong>Lanzara você acaba de receber uma cotação da empresa</strong> $nomeEmpresa <strong>E-mail:
<br><br>
<strong>CNPJ Remetente :</strong> $cnpjEmpresa.<br>
<strong>CNPJ Destino :</strong> $cnpjdestino.<br>
<strong>Nome do Responsavel :</strong> $nomeResponsavel<br>
<strong>Email de contato :</strong> $emailContato<br>
<strong>Telefone de Contato :</strong> $telefoneContato <br>
<strong>Peso da Carga :</strong> $PesoCarga <br>
<strong>Tipo de Carga :</strong> $tipoCarga <br>
<strong>Frequêcia :</strong> $frenquecia <br>
<strong>valor aproximado da Nf-e :</strong> $Valor_produto <br>
<strong>Tipo de Produto :</strong> $produto <br>
<strong>Classificação :</strong> $classificacao <br>


<strong>Data :</strong>  $data <br>
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