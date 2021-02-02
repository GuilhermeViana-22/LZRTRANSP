<?php
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

/* variaveis que recebe os dados do formulario atraves do método post */

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
$erro = 0;
// validação basica das variaveis 
if (empty($nomeEmpresa) or strstr ($nome, ' ') == FALSE){
echo "favor digita o nome.<br>"; $erro=1;

    
}else

if (empty($emailContato) || strstr ($email, '@') == FALSE){
echo "favor digita um email valido.<br>"; $erro=1;

    
}else

if($erro == 0){
/* procedimento que envia o dados do formulario para o email na qual sera enviado*/
// No $to voce coloca o emaio do destinatario

$to ="elton13cdz@gmail.com";
// no $subject voce coloca o assunto que aparecera no email
$subject ="Contato pelo Site Lanzara Tranporte";
// e o menssagem a onde irao as variasveis com os dados que aparecera no email
$mensagem ="Nome da Empresa: ".$nomeEmpresa."\r\n".
             "CNPJ: ".$cnpjEmpresa ."\r\n".
              "Nome do Responsavel: ".$nomeResponsavel."\r\n".
               "Email: ".$emailContato."\r\n".
               "Telefone: ".$telefoneContato."\r\n".
               "Peso da Carga: ".$PesoCarga."\r\n".
               "Tipo de Rota: ".$tipoRota."\r\n".
               "Classificação: ".$classificacao."\r\n".
               "Frequencia: ".$frenquecia."\r\n".
               "produto: ".$produto;
// header a onde mostrara o email que quem fez o contato. para possivel retorno 
$header = "From:elton13cdz@gmail.com"."\r\n"."Reply-To:".$emailContato."\e\n".
"X=Mailer:PHP/".phpversion(); /* a função phpversion localiza a versao mais atualizada do
 php impedido erros na hora de loca a tecnologia*/

 // verificação se o email foi enviado ou nao 
if(mail($to,$subject,$mensagem,$header)){
echo("Email enviado!");
}else{
echo("O email nao foi enviado");
}
    
}
?>
