<?php/*
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
*/
$assunto = $_POST['emailContato'];
$Corpo = "
nome_da_empresa:".$_POST['nameEmpresa']."
nome_responsavel:".$_POST['nomeResponsavel']."
cnpj_empresa:".$_POST['cnpjEmpresa']."


";

mail('elton13cdz@gmail.com',$assunto,$Corpo,'From: elton13cdz@gmail.com');




echo 'seus dados foram enviado com sucesso';






?>