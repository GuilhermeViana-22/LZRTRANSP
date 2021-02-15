<?php
/* variaveis que recebe os dados do formulario atraves do método post */
date_default_timezone_set('America/Sao_Paulo');

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



$nomeEmpresa = addslashes($_POST['nameEmpresa']);
$cnpjEmpresa = addslashes($_POST['cnpjEmpresa']);
$nomeResponsavel = addslashes($_POST['nomeResponsavel']);
$emailContato = addslashes($_POST['emailContato']);
$telefoneContato = addslashes($_POST['telefoneContato']);
$PesoCarga = addslashes($_POST['PesoCarga']);
$tipoRota = addslashes($_POST['tipoRota']);
$classificacao = addslashes($_POST['classificacao']);
$frenquecia = addslashes($_POST['frenquecia']);
$produto = addslashes($_POST['produto']);
$data = date('d/m/Y H:i:s');
if ($cnpjEmpresa && $emailContato) {
  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'elton14cdz@gmail.com';
  $mail->Password = 'Elton0105';
  $mail->Port = 587;

  $mail->setFrom('elton14cdz@gmail.com');
  $mail->addAddress('elton14cdz@gmail.com');

  $mail->isHTML(true);
  $mail->Subject = 'contato pelo site lzr';
  $mail->Body = "Nome da Empresa: {$nomeEmpresa}<br>
				   Email: {$emailContato}<br>
				   CNPJ: {$cnpjEmpresa}<br>
				   Data/hora: {$data}";

  if ($mail->send()) {
    echo 'Email enviado com sucesso.';
    header("Location: index.php?sucess=1");
  } else {
    echo 'Email não enviado.';
    header("Location: index.php?erro=1");
  }
}else{
  echo 'informa o email e o cnpj';
}
	





/*

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$nomeEmpresa = addslashes($_POST['nameEmpresa']);
$cnpjEmpresa = addslashes($_POST['cnpjEmpresa']);
$nomeResponsavel = addslashes($_POST['nomeResponsavel']);
$emailContato = addslashes($_POST['emailContato']);
$telefoneContato = addslashes($_POST['telefoneContato']);
$PesoCarga = addslashes($_POST['PesoCarga']);
$tipoRota = addslashes($_POST['tipoRota']);
$classificacao = addslashes($_POST['classificacao']);
$frenquecia = addslashes($_POST['frenquecia']);
$produto = addslashes($_POST['produto']);


$mail = new PHPMailer(true);

try{
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth=true;
  $mail->Username='elton13cdz@gmail.com';
  $mail->Password='justino123456';
  $mail->Port = 587;

  $mail->setFrom('elton13cdz@gmail.com');
  $mail->addAddress('elton13cdz@gmail.com');

$mail->isHTML(true);
$mail->Subject = 'teste de email';
$mail->Body = "Nome da Empresa: ".$nomeEmpresa."\r\n".
"CNPJ: ".$cnpjEmpresa ."\r\n".
 "Nome do Responsavel: ".$nomeResponsavel."\r\n".
  "Email: ".$emailContato."\r\n".
  "Telefone: ".$telefoneContato."\r\n".
  "Peso da Carga: ".$PesoCarga."\r\n".
  "Tipo de Rota: ".$tipoRota."\r\n".
  "Classificação: ".$classificacao."\r\n".
  "Frequencia: ".$frenquecia."\r\n".
  "produto: ".$produto;

  if($mail->send()){
    echo'email enviado';
  }else{
    echo 'email nao enviado';
  }

}catch (Exception $e){
  echo "erro ao enviar menssagem: {$mail->ErrorInfo}";

}
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
//  $receiving_email_address = 'contact@example.com';

  //if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
   // include( $php_email_form );
 // } else {
 //   die( 'Unable to load the "PHP Email Form" Library!');
 // }

  //$contact = new PHP_Email_Form;
  //$contact->ajax = true;
  
  //$contact->to = $receiving_email_address;
  //$contact->from_name = $_POST['name'];
 // $contact->from_email = $_POST['email'];
 // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

//  $contact->add_message( $_POST['name'], 'From');
 // $contact->add_message( $_POST['email'], 'Email');
 // $contact->add_message( $_POST['message'], 'Message', 10);

 // echo $contact->send();
