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
    <?php
    #nestes includes temos todos os estados e municipios do brasil na nossa aplicação, como isso ficaria dispensioso e sujando nosso codigo
    #está sendo utilizado um array em outro arquivo que carrega todas essas informações

    #ArrayLIst com os inputs do select
    # é necessario um ArrayList para utilizar ter um conjunto de valores selecionaveis
    $TipoCarga = array(
        "Não_Selecionado" => "---SELECIONE---",
        "Granel_Sólido" => "Granel_Sólido",
        "Granel_Líquido" => "Granel_Líquido",
        "Frigrorificada" => "Frigrorificada",
        "Conteineirizada" => "Conteineirizada",
        "Carga_Geral" => "Carga_Geral",
        "Neogranel" => "Neogranel",
        "Perigosa(granel_Sólido)" => "Perigosa(granel_Sólido)",
        "Perigosa(granel_Líquido)" => "Perigosa(granel_Líquido)",
        "Perigosa(carga_frigrorificada)" => "Perigosa(carga_frigrorificada)",
        "Perigosa(conteineirizada)" => "Perigosa(conteineirizada)",
        "Perigosa(carga_geral)" => "Perigosa(carga_geral)"
    );

    $Coeficiente = array(
        "Não_Selecionado" => "---SELECIONE---",
        "Deslocamento(CCD)" => "Deslocamento(CCD)",
        "Carga_e_Descarga(CC)" => "Carga_e_Descarga(CC)"

    );

    $Unidd = array(
        "Não_Selecionado" => "---SELECIONE---",
        "R$/KM" => "R$/KM",
        "R$" => "R$"

    );

    ?>

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

                        <form id="tbl_frete" name="frete" data-toggle="validator" action="crud_TabelaFrete.php" role="form">
                            <?php
                            $dados;
                            if (isset($_GET["Cod_frete"])) {

                                $queryTabela = $conexao->query("SELECT * FROM tbl_frete WHERE Cod_frete = " . $_GET["Cod_frete"]);
                                $dados = $queryTabela->fetch_assoc();
                            ?>
                                <input type="hidden" name="Cod_frete" value="<?php echo $_GET["Cod_frete"]; ?>" />
                            <?php } ?>
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Tabela de Frete</h3>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small mb-2" for="textNome">Tipo de Carga</label>
                                        <select id="cmbSexo" class="form-control py-2" name="tpcarga">
                                            <?php
                                            # A logica utilizada nos selects é diferente dos demais blocos de codigo do nosso sistema
                                            if (isset($_GET["Cod_frete"])) {
                                                foreach ($TipoCarga as $key => $value) {
                                                    if ($dados["Tipo_de_Carga"] == $key) {
                                                        echo "<option value=" . $key . " selected>" . $value . "</option>";
                                                    } else {
                                                        echo "<option value=" . $key . ">" . $value . "</option>";
                                                    }
                                                }
                                            } else {
                                                foreach ($TipoCarga as $key => $value) {
                                                    echo "<option value=" . $key . ">" . $value . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-2" for="inputLastName">Coeficiente de Custonome</label>

                                        <select id="cmbSexo" class="form-control py-2" name="coeCusto">
                                            <?php
                                            # A logica utilizada nos selects é diferente dos demais blocos de codigo do nosso sistema
                                            if (isset($_GET["Cod_frete"])) {
                                                foreach ($Coeficiente as $key => $value) {
                                                    if ($dados["Coeficiente_de_Custo"] == $key) {
                                                        echo "<option value=" . $key . " selected>" . $value . "</option>";
                                                    } else {
                                                        echo "<option value=" . $key . ">" . $value . "</option>";
                                                    }
                                                }
                                            } else {
                                                foreach ($Coeficiente as $key => $value) {
                                                    echo "<option value=" . $key . ">" . $value . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-2" for="dtNasc">Unidade</label>

                                        <select id="cmbSexo" class="form-control py-2" name="unidade">
                                            <?php
                                            # A logica utilizada nos selects é diferente dos demais blocos de codigo do nosso sistema
                                            if (isset($_GET["Cod_frete"])) {
                                                foreach ($Unidd as $key => $value) {
                                                    if ($dados["Unidade"] == $key) {
                                                        echo "<option value=" . $key . " selected>" . $value . "</option>";
                                                    } else {
                                                        echo "<option value=" . $key . ">" . $value . "</option>";
                                                    }
                                                }
                                            } else {
                                                foreach ($Unidd as $key => $value) {
                                                    echo "<option value=" . $key . ">" . $value . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1" for="txtCpf">Eixo 2</label>
                                        <input class="form-control py-2 cpf" id="Valor_eixo2" type="text" placeholder="Digite o Eixo 2" name="txteixo2" required value="<?php if (isset($_GET["Cod_frete"])) {
                                                                                                                                                                            echo $dados["eixo_2"];
                                                                                                                                                                        } ?>" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1" for="txtTelefone">Eixo 3</label>
                                        <input class="form-control py-2 telefone" id="Valor_eixo3" type="text" placeholder="Digite o Eixo 3" name="txteixo3" required value="<?php if (isset($_GET["Cod_frete"])) {
                                                                                                                                                                                    echo $dados["eixo_3"];
                                                                                                                                                                                } ?>" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="col-md-15">
                                        <label for="inputEmail" for="txtEmail" class="small md-3 ">Eixo 4</label>
                                        <input type="text" class="form-control py-0" id="Valor_eixo4" placeholder="Digite o Eixo 4" name="txteixo4" required value="<?php if (isset($_GET["Cod_frete"])) {
                                                                                                                                                                        echo $dados["eixo_4"];
                                                                                                                                                                    } ?>">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class=" col-md-3">
                                    <label for="cep" class="small col-md-3 mb-1">Eixo 5</label>
                                    <input name="txteixo5" type="text" placeholder="Digite o Eixo 5" class="form-control" id="Valor_eixo5" value="<?php if (isset($_GET["Cod_frete"])) {
                                                                                                                                                        echo $dados["eixo_5"];
                                                                                                                                                    } ?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputAddress" class="small mb-1">Eixo 6</label>
                                    <input type="text" class="form-control py-3" id="Valor_eixo6" placeholder="Digite o Eixo 6" name="txteixo6" value="<?php if (isset($_GET["Cod_frete"])) {
                                                                                                                                                            echo $dados["eixo_6"];
                                                                                                                                                        } ?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputAddress2" class="small mb-1">Eixo 7</label>
                                    <input type="text" class="form-control" id="Valor_eixo7" placeholder="Digite o Eixo 7" name="txteixo7" value="<?php if (isset($_GET["Cod_frete"])) {
                                                                                                                                                        echo $dados["eixo_7"];
                                                                                                                                                    } ?>">
                                </div>

                                <div class="form-group col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">Eixo 9</label>

                                        <input type="text" class="form-control" id="Valor_eixo9" placeholder="Digite o Eixo 9" name="txteixo9" required value="<?php if (isset($_GET["Cod_frete"])) {
                                                                                                                                                                    echo $dados["eixo_9"];
                                                                                                                                                                } ?>">

                                    </div>
                                </div>

                            </div>

                            <div id="botoes" class="col-md-9 col-xs-12">
                                <div style="margin-left:460px;" class="col-md-15">
                                    <button type="submit" class="btn btn-success"> Executar</button>
                                </div>

                            </div>
                        </form>
                        <br><br>
                        <form method="GET" style="margin-top:15px;" action="Tb_Frete.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <br />
                                        <div style="padding-left:25px;" class="col-md-3">
                                            Pesquisar:
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" value="<?php if (isset($_GET["pesquisa"])) {
                                                                            echo $_GET["pesquisa"];
                                                                        } ?>" name="pesquisa" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-primary" value="pesquisar">
                                </div>
                            </div>
                        </form>
                        <br><br>
                        <div class="row w-100">
                            <div class="col-xl-12 col-md-12 ">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fas fa-table mr-4"> </i>
                                        <h4 class="text-center">Fretes e Valores</h4>
                                    </div>

                                    <div class="card-body mr-1">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>

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
                                                    <th>Ações </th>




                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $consultaTabela = "";
                                                if (isset($_GET["pesquisa"])) {
                                                    $pesquisa = $_GET["pesquisa"];
                                                    $consultaTabela = "SELECT * FROM tbl_frete WHERE Unidade LIKE '%$pesquisa%' OR Tipo_de_Carga LIKE '%$pesquisa%' OR Coeficiente_de_Custo	 LIKE '%$pesquisa%'";
                                                } else {
                                                    $consultaTabela = "SELECT * FROM tbl_frete";
                                                }
                                                $queryTabela = $conexao->query($consultaTabela);

                                                while ($dados = $queryTabela->fetch_assoc()) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $dados["Tipo_de_Carga"]; ?></td>
                                                        <td><?php echo $dados["Coeficiente_de_Custo"]; ?></td>
                                                        <!--Converter a data para formato pt-BR-->
                                                        <td><?php echo $dados["Unidade"];  ?></td>
                                                        <td><?php echo $dados["eixo_2"]; ?></td>
                                                        <td><?php echo $dados["eixo_3"]; ?></td>
                                                        <td><?php echo $dados["eixo_4"]; ?></td>
                                                        <td><?php echo $dados["eixo_5"]; ?></td>
                                                        <td><?php echo $dados["eixo_6"]; ?></td>
                                                        <td><?php echo $dados["eixo_7"]; ?></td>
                                                        <td><?php echo $dados["eixo_9"]; ?></td>
                                                        <td>
                                                            <a href="Tb_Frete.php?Cod_frete=<?php echo $dados["Cod_frete"]; ?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                                            &nbsp;&nbsp;



                                                            <a href="crud_TabelaFrete.php?excluir=1&Cod_frete=<?php echo $dados["Cod_frete"]; ?>" class="btn btn-danger btn-excluir-cliente"><i class="fas fa-times"></i></a>
                                                        </td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>

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
    <!-- chamativa dos metodos para mascara -->
    <script src="js/jquery.mask.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            $('#nomeResponsavel').mask('A', {
                translation: {
                    A: {
                        pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]+$/g,
                        recursive: true
                    },
                },
            });

            $('#Valor_eixo2').mask('000.000.000.000.000,00', {
                reverse: true
            });
            $('#Valor_eixo3').mask('000.000.000.000.000,00', {
                reverse: true
            });
            $('#Valor_eixo4').mask('000.000.000.000.000,00', {
                reverse: true
            });
            $('#Valor_eixo5').mask('000.000.000.000.000,00', {
                reverse: true
            });
            $('#Valor_eixo6').mask('000.000.000.000.000,00', {
                reverse: true
            });
            $('#Valor_eixo7').mask('000.000.000.000.000,00', {
                reverse: true
            });
            $('#Valor_eixo9').mask('000.000.000.000.000,00', {
                reverse: true
            });
        });
    </script>





</body>

</html>