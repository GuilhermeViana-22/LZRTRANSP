<?php
$nome = addslashes($_POST['nameEmpresa']);
$email = addslashes($_POST['emailContato']);
$telefone = addslashes($_POST['telefoneContato']);
$assunto = addslashes($_POST['cnpjEmpresa']);
$texto = addslashes($_POST['produto']);
$erro = 0;

if($erro == 0){


$to ="elton13cdz@gmail.com";
$subject ="Site - Tapeçaria";
$mensagem ="Nome: ".$nome."\r\n".
             "Email: ".$email ."\r\n".
              "Telefone: ".$telefone."\r\n".
               "Assunto: ".$assunto."\r\n".
               "Texto: ".$texto;

$header = "From:elton13cdz@gmail.com"."\r\n"."Reply-To:".$email."\e\n".
"X=Mailer:PHP/".phpversion(); 
if(mail($to,$subject,$mensagem,$header)){
echo("Email enviado!");
}else{
echo("O email nao foi enviado");
}
    
}





/*
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

$assunto = $_POST['emailContato'];
$Corpo = "
nome_da_empresa:".$_POST['nameEmpresa']."
nome_responsavel:".$_POST['nomeResponsavel']."
cnpj_empresa:".$_POST['cnpjEmpresa']."


";

mail('elton13cdz@gmail.com',$assunto,$Corpo,'From: elton13cdz@gmail.com');




echo 'seus dados foram enviado com sucesso';



*/


?>