<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" />
    <title>Tabela de frete</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="images/lanzara_icon.png" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    <?php include 'nav.php'; ?>
    <div id="layoutSidenav">
        <!--Tag de incorporação ao menu no codigo html-->
        <?php include 'menu_lateral.php'; ?>
        <!--Tag de incorporação ao menu no codigo html-->
        <div id="layoutSidenav_content">
            <main>
                <!--
               -->

                <div class="container-fluid">
                    <div class="card">

                        <form id="tbl_frete" name="frete" data-toggle="validator" role="form">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Tabela de Frete</h3>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small mb-2" for="textNome">Tipo de Carga</label>
                                        <input class="form-control py-2 nome" id="textNome" type="text" placeholder="Digite o Tipo de Carga" name="tpcarga" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-2" for="inputLastName">Coeficiente de Custonome</label>
                                        <input class="form-control py-2 nome" id="inputLastName" type="text" placeholder="Digite o Coeficiente de Custo" name="coeCusto" />

                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-2" for="dtNasc">Unidade</label>
                                        <input class="form-control py-2 nascimento" id="dtNasc" type="text" min="1950-01-01" max="2020-11-12" placeholder="Digite a Unidade" name="unidade" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1" for="txtCpf">Eixo 2</label>
                                        <input class="form-control py-2 cpf" id="txtCpf" type="text" placeholder="Digite o Eixo 2" name="txteixo2" required />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1" for="txtTelefone">Eixo 3</label>
                                        <input class="form-control py-2 telefone" id="txtTelefone" type="text" placeholder="Digite o Telefone" name="txteixo3" required />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="col-md-15">
                                        <label for="inputEmail" for="txtEmail" class="small md-3 ">Eixo 4</label>
                                        <input type="email" class="form-control py-0" id="txtEmail" placeholder="E-mail" name="txteixo4" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class=" col-md-3">
                                    <label for="cep" class="small col-md-3 mb-1">Eixo 5</label>
                                    <input name="txteixo5" type="text" placeholder="digite o CEP" class="form-control" id="cep" txteixo3>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputAddress" class="small mb-1">Eixo 6</label>
                                    <input type="text" class="form-control py-3" id="rua" placeholder="Rua dos Bobos, nº 0" name="txteixo6">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputAddress2" class="small mb-1">Eixo 7</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Apartamento, hotel, casa, etc." name="txteixo7">
                                </div>

                                <div class="form-group col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">9</label>

                                        <input type="text" class="form-control" id="cidade" placeholder="Digite a cidade." name="txteixo9" required>




                                    </div>
                                </div>

                            </div>

                            <div id="botoes" class="col-md-9 col-xs-12">
                                <div style="margin-left:460px;" class="col-md-15">
                                    <input type="button" value="teste" onclick="insetetb(tpcarga.value,coeCusto.value,unidade.value,txteixo2.value,txteixo3.value,txteixo4.value,txteixo5.value,txteixo6.value,txteixo7.value,txteixo9.value)">
                                    <button type="button" class="btn btn-success"><i class="fas fa-paw"></i> Salvar</button>
                                </div>

                            </div>
                        </form>

                        <div class="row w-100">
                            <div class="col-xl-12 col-md-12 ">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fas fa-table mr-4">Tipos de Fretes </i>
                                    </div>

                                    <div class="card-body mr-1">
                                        <table class="table table-bordered" name="tblfrete" id="tbfrete">
                                            <thead>
                                                <tr>
                                                    <th>Linha</th>
                                                    <th>Tipo de Carga</th>
                                                    <th>Coeficiente de Custo</th>
                                                    <th>Unidade</th>
                                                    <th>eixo 2 </th>
                                                    <th>eixo 3 </th>
                                                    <th>eixo 4 </th>
                                                    <th>eixo 5 </th>
                                                    <th>eixo 6 </th>
                                                    <th>eixo 7 </th>
                                                    <th>eixo 9 </th>




                                                </tr>
                                            </thead>
                                        </table>
                                        <!--<table class="table table-bordered" name="tblfrete" id="tbfrete">

                                            <tr>
                                                <th rowspan="2">Tipo de Carga</th>
                                                <th rowspan="2">Coeficiente de Custo</th>
                                                <th rowspan="2">Unidade</th>
                                                <th colspan="6">Numeros de eixos da composição veicular </th>
                                                <th>Ações</th>



                                            </tr>
                                            <?php
                                            //$consultaTabela = "";

                                            // $consultaTabela = "SELECT * FROM tbl_frente";

                                            // $queryClietes = $conexao->query($consultaTabela);

                                            //while ($dados = $queryClietes->fetch_assoc()) {
                                            // 
                                            ?>

                                            <tr>
                                                <td>2<?php //echo $dados["id_cliente"]; 
                                                        ?></td>
                                                <td>4<?php //echo $dados["nome"]; 
                                                        ?></td>

                                                <td>5<?php //echo date("d/m/Y", strtotime($dados["dt_nascimento"])); 
                                                        ?></td>
                                                <td>6<?php //echo $dados["id_cliente"]; 
                                                        ?></td>
                                                <td>7<?php //echo $dados["nome"]; 
                                                        ?></td>

                                                <td>9<?php //echo date("d/m/Y", strtotime($dados["dt_nascimento"])); 
                                                        ?></td>

                                            </tr>
                                            <tr>
                                                <td rowspan="2">
                                                    Granel Sólido
                                                </td>
                                                <td>
                                                    Deslocamento(CCD)
                                                </td>
                                                <td>
                                                    RS/KM
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Carga e Descarga(CC)
                                                </td>
                                                <td>
                                                    RS
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">
                                                    Granel Liquido
                                                </td>
                                                <td>
                                                    Deslocamento(CCD)
                                                </td>
                                                <td>
                                                    RS/KM
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Carga e Descarga(CC)
                                                </td>
                                                <td>
                                                    RS
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">
                                                    Frigrorificada
                                                </td>
                                                <td>
                                                    Deslocamento(CCD)
                                                </td>
                                                <td>
                                                    RS/KM
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Carga e Descarga(CC)
                                                </td>
                                                <td>
                                                    RS
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">
                                                    Conteineirizada
                                                </td>
                                                <td>
                                                    Deslocamento(CCD)
                                                </td>
                                                <td>
                                                    RS/KM
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Carga e Descarga(CC)
                                                </td>
                                                <td>
                                                    RS
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">
                                                    Carga Geral
                                                </td>
                                                <td>
                                                    Deslocamento(CCD)
                                                </td>
                                                <td>
                                                    RS/KM
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Carga e Descarga(CC)
                                                </td>
                                                <td>
                                                    RS
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">
                                                    NeoGranel
                                                </td>
                                                <td>
                                                    Deslocamento(CCD)
                                                </td>
                                                <td>
                                                    RS/KM
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>

                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Carga e Descarga(CC)
                                                </td>
                                                <td>
                                                    RS
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">
                                                    Perigosa (Granel Sólido)
                                                </td>
                                                <td>
                                                    Deslocamento(CCD)
                                                </td>
                                                <td>
                                                    RS/KM
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Carga e Descarga(CC)
                                                </td>
                                                <td>
                                                    RS
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">
                                                    Perigosa (Granel Liquido)
                                                </td>
                                                <td>
                                                    Deslocamento(CCD)
                                                </td>
                                                <td>
                                                    RS/KM
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Carga e Descarga(CC)
                                                </td>
                                                <td>
                                                    RS
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">
                                                    Perigosa (Frigrorificada)
                                                </td>
                                                <td>
                                                    Deslocamento(CCD)
                                                </td>
                                                <td>
                                                    RS/KM
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Carga e Descarga(CC)
                                                </td>
                                                <td>
                                                    RS
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">
                                                    Perigosa (Conteineirizada)
                                                </td>
                                                <td>
                                                    Deslocamento(CCD)
                                                </td>
                                                <td>
                                                    RS/KM
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Carga e Descarga(CC)
                                                </td>
                                                <td>
                                                    RS
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">
                                                    Perigosa (Carga Geral)
                                                </td>
                                                <td>
                                                    Deslocamento(CCD)
                                                </td>
                                                <td>
                                                    RS/KM
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Carga e Descarga(CC)
                                                </td>
                                                <td>
                                                    RS
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    valores
                                                </td>
                                                <td>
                                                    <a href="cad_cliente.php?id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                        ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                    &nbsp;&nbsp;



                                                    <a href="crud_cliente.php?excluir=1&id_cliente=<?php //echo $dados["id_cliente"]; 
                                                                                                    ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <?php //} 
                                            ?>



                                        </table>-->
                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>

                </div>

            </main>
            <?php include 'footer.php'; ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
    <script type="text/javascript" src="js/tabela_frete.js"></script>
</body>

</html>