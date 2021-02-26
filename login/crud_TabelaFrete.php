<?php
include "banco.php";
# verifica se o campo ativo possui algum valor , senão ele atribui o N e salva no banco

if(isset($_REQUEST["Cod_frete"])) {
    if(isset($_REQUEST["excluir"])) {
          
        $consulta = "DELETE FROM tbl_frete WHERE Cod_frete = " . $_REQUEST["Cod_frete"];
        # a variavel operacao está atrelada as mensagem de sucesso que aparecem na cor verde após realizar as funões do crud
        # tanto as mensagem de sucesso quando as de erro estão entrelaçadas a está variavel
        $operacao = 3;
    } else {
        $consulta = "UPDATE tbl_frete SET Tipo_de_Carga = '".$_REQUEST["tpcarga"]."', Coeficiente_de_Custo = '".$_REQUEST["coeCusto"]."', Unidade = '".$_REQUEST["unidade"]."', eixo_2 = '".$_REQUEST["txteixo2"]."', eixo_3 = '".$_REQUEST["txteixo3"]."', eixo_4 = '".$_REQUEST["txteixo4"]."', eixo_5 = '".$_REQUEST["txteixo5"]."', eixo_6 = '".$_REQUEST["txteixo6"]."', eixo_7 = '".$_REQUEST["txteixo7"]."', eixo_9 = '".$_REQUEST["txteixo9"]."' WHERE Cod_frete = ".$_REQUEST["Cod_frete"]."";
                # a variavel operação está atrelada as mensagem de sucesso que aparecem na cor verde após realizar as funões do crud
                # tanto as mensagem de sucesso quando as de erro estão entrelaçadas a está variavel
        $operacao = 2;
    }
} else {
    $consulta = "INSERT INTO tbl_frete (Tipo_de_Carga, Coeficiente_de_Custo, Unidade, eixo_2, eixo_3, eixo_4, eixo_5, eixo_6, eixo_7, eixo_9) VALUES ('".$_REQUEST["tpcarga"]."','".$_REQUEST["coeCusto"]."','".$_REQUEST["unidade"]."','".$_REQUEST["txteixo2"]."','".$_REQUEST["txteixo3"]."','".$_REQUEST["txteixo4"]."','".$_REQUEST["txteixo5"]."','".$_REQUEST["txteixo6"]."','".$_REQUEST["txteixo7"]."','".$_REQUEST["txteixo9"]."')";
            # a variavel operação está atrelada as mensagem de sucesso que aparecem na cor verde após realizar as funões do crud
            # tanto as mensagem de sucesso quando as de erro estão entrelaçadas a está variavel
    $operacao = 1;
    
}
var_dump($consulta);
$query = $conexao->query($consulta);



#verifica se houve algum erro  do crud e concatena com a variavel local operação
if(!$query) {
    //var_dump($operacao);
    header("Location: Tb_Frete.php?erro=" . $operacao); 
   
} else {
    header("Location: Tb_Frete.php?sucesso=" . $operacao);
    

    
}

?>