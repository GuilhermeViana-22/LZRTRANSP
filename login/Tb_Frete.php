<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="card-body mr-1">
        
        <table class="table table-bordered">
            <tr>
                <th>Tipo de Carga</th>
                <th>Coeficiente de Custo</th>
                <th>Unidade</th>
                <th>Eixo 2</th>
                <th>Eixo 3</th>
                <th>Eixo 4</th>
                <th>Eixo 5</th>
                <th>Eixo 6</th>
                <th>Eixo 7</th>
                <th>Eixo 9</th>
                
            </tr>
            <?php
            $consultaTabela = "";
            
                $consultaTabela = "SELECT * FROM tbl_frente";
            
            $queryClietes = $conexao->query($consultaTabela);

            while ($dados = $queryClietes->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $dados["id_cliente"]; ?></td>
                    <td><?php echo $dados["nome"]; ?></td>
                    <!--Converter a data para formato pt-BR-->
                    <td><?php echo date("d/m/Y", strtotime($dados["dt_nascimento"])); ?></td>
                    <td><?php echo $dados["email"]; ?></td>
                    <td><?php echo $dados["cidade"]; ?></td>
                    <td>
                        <a href="cad_cliente.php?id_cliente=<?php echo $dados["id_cliente"]; ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                        &nbsp;&nbsp;



                        <a href="crud_cliente.php?excluir=1&id_cliente=<?php echo $dados["id_cliente"]; ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                    </td>

                </tr>
            <?php } ?>



        </table>
    </div>
</body>

</html>