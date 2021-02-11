<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" />
    <title>Tabela de frete</title>
    <link href="css/styles.css" rel="stylesheet" />
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
                        <?php if (isset($_GET["sucesso"])) { ?>

                            <div class="alert alert-success">
                                <?php
                                # esse numero 1 refere-se a mensagem de sucesso exibida  no inicio da tela
                                # se o if ficar atrelado ao primeiro laço ele estará no laço de inserir referenciado no 
                                # crud_cliente
                                # logo ele retorna a mensagem de cliente inserido com sucsso
                                if ($_GET["sucesso"] == 1) {
                                    echo "Cliente inserido com sucesso!";
                                    # esse numero 2 refere-se a mensagem de sucesso exibida  no inicio da tela
                                    # se o if ficar atrelado ao segundo laço ele estará no laço de atualizar que esta referenciado no 
                                    # crud_cliente
                                    # logo ele retorna a mensagem de cliente inserido com sucsso
                                } else if ($_GET["sucesso"] == 2) {
                                    echo "Cliente atualizado com sucesso!";
                                } else {
                                    echo "Cliente excluído com sucesso!";
                                }
                                ?>
                            </div>

                        <?php } ?>

                        <?php if (isset($_GET["erro"])) { ?>
                            <div class="alert alert-danger">
                                <?php
                                if ($_GET["erro"] == 1) {
                                    echo "Erro ao inserir cliente!";
                                } else if ($_GET["erro"] == 2) {
                                    echo "Erro ao atualizar cliente!";
                                } else {
                                    echo "Erro ao excluir cliente   !";
                                }
                                ?>
                            </div>
                        <?php } ?>
                        <form id="formExemplo" method="post" action="" data-toggle="validator" role="form">
                            <?php
                            $dados;
                            if (isset($_GET["id_cliente"])) {

                                $queryCliente = $conexao->query("SELECT * FROM cliente WHERE id_cliente = " . $_GET["id_cliente"]);
                                $dados = $queryCliente->fetch_assoc();
                            ?>
                                <input type="hidden" name="id_cliente" value="<?php echo $_GET["id_cliente"]; ?>" />
                            <?php } ?>
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Tabela de Frete</h3>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small mb-2" for="textNome">Tipo de Carga</label>
                                        <input class="form-control py-2 nome" value="<?php if (isset($_GET["id_cliente"])) {
                                                                                            echo $dados["nome"];
                                                                                        } ?>" id="textNome" type="text" placeholder="Digite o nome" name="nome" required />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-2" for="inputLastName">Coeficiente de Custonome</label>
                                        <input class="form-control py-2 nome" value="<?php if (isset($_GET["id_cliente"])) {
                                                                                            #essa função do php pega o valor do input sobrenome
                                                                                            echo $dados["sobrenome"];
                                                                                        } ?>" id="inputLastName" type="text" placeholder="Digite o sobrenome" name="sobrenome" required />

                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-2" for="dtNasc">Unidade</label>
                                        <input class="form-control py-2 nascimento" id="dtNasc" value="<?php if (isset($_GET["id_cliente"])) {
                                                                                                            #essa função do php pega o valor do input data de nascimento
                                                                                                            echo $dados["dt_nascimento"];
                                                                                                        } ?>" type="text" min="1950-01-01" max="2020-11-12" placeholder="Digite o nascimento" name="dt_nascimento" required />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1" for="txtCpf">Eixo 2</label>
                                        <input class="form-control py-2 cpf" id="txtCpf" type="text" value="<?php if (isset($_GET["id_cliente"])) {
                                                                                                                #essa função do php pega o valor do input cpf
                                                                                                                echo $dados["cpf"];
                                                                                                            } ?>" placeholder="Digite o CPF" name="cpf" required />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1" for="txtTelefone">Eixo 3</label>
                                        <input class="form-control py-2 telefone" id="txtTelefone" value="<?php if (isset($_GET["id_cliente"])) {
                                                                                                                echo $dados["telefone"];
                                                                                                            } ?>" type="text" placeholder="Digite o Telefone" name="telefone" required />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="col-md-15">
                                        <label for="inputEmail" for="txtEmail" class="small md-3 ">Eixo 4</label>
                                        <input type="email" class="form-control py-0" id="txtEmail" placeholder="E-mail" value="<?php if (isset($_GET["id_cliente"])) {
                                                                                                                                    echo $dados["email"];
                                                                                                                                } ?>" name="email" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class=" col-md-3">
                                    <label for="cep" class="small col-md-3 mb-1">Eixo 5</label>
                                    <input name="cep" type="text" placeholder="digite o CEP" class="form-control" id="cep" value="<?php if (isset($_GET["id_cliente"])) {
                                                                                                                                        echo $dados["cep"];
                                                                                                                                    } ?>" onblur="pesquisacep(this.value);">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputAddress" class="small mb-1">Eixo 6</label>
                                    <input value="<?php if (isset($_GET["id_cliente"])) {
                                                        echo $dados["logradouro"];
                                                    } ?>" type="text" class="form-control py-3" id="rua" placeholder="Rua dos Bobos, nº 0" name="logradouro">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputAddress2" class="small mb-1">Eixo 7</label>
                                    <input type="text" class="form-control" id="inputAddress" value="<?php if (isset($_GET["id_cliente"])) {
                                                                                                            echo $dados["num_comp"];
                                                                                                        } ?>" placeholder="Apartamento, hotel, casa, etc." name="num_comp">
                                </div>

                                <div class="form-group col-md-3">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">9</label>

                                        <input type="text" class="form-control" id="cidade" value="<?php if (isset($_GET["id_cliente"])) {
                                                                                                        echo $dados["cidade"];
                                                                                                    } ?>" placeholder="Digite a cidade." name="cidade" required>




                                    </div>
                                </div>

                            </div>

                            <div id="botoes" class="col-md-9 col-xs-12">
                                <div style="margin-left:460px;" class="col-md-15">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-paw"></i> Salvar</button>
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

                                        <table class="table table-bordered">

                                            <tr>
                                                <th rowspan="2">Tipo de Carga</th>
                                                <th rowspan="2">Coeficiente de Custo</th>
                                                <th rowspan="2">Unidade</th>
                                                <th colspan="7">Quantidade de eixo</th>


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
</body>
</html>