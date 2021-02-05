<?php include 'banco.php'; 
//variavel que vai conter a menssagem
$msg = false;
/**  função que verifica se existe algum arquivo com o mesmo nome no banco para nao ter erros 
 * 
 */
if(isset($_FILES['arquivo'])){
$extesao = strtolower(substr($_FILES['arquivo']['name'], -4)); //linha de codigo que transforma toda a extensao do arquivo e no em letra minuscula
$novo_nome = md5((time())) . $extesao; // linha de codido que cripta o arquivo 
$diretorio = "upload/"; // linha de codigo para qual diretorio ira o arquivo 

move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novo_nome); // linha de codigo que pega o arquivo da nuvem da liguagem e envia para o diretorio
$sql_code = "insert into arquivo (codigo, arquivo, data) values(null,'$novo_nome', NOW())";// linha de codigo para inserir no banco de dados
if($conexao -> query($sql_code)){ // if e else de verificação se foi inserido com sucesso 
    $msg = "arquivo enviado";
}else
{
    $msg = "falha ao enviar";
}

}

?>
<h1>Upload de arquivos </h1>
<?php if($msg != false) echo "<p> $msg</P>"; ?>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" required name="arquivo">
<input type="submit" value="Salvar">
</form>