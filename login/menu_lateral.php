<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Servi&ccedil;os</div>
                <!---Aqui ficam os links da barra de navegçãi todos então como extensão .jso
                        Lembrando que qualquer alteração feita nessa parte gera um código de erro 404 do xammp
                        não será localizado nenhum arquivo
                        -->

                        <?php// if($_SESSION["cargo"] == "Atendente" || $_SESSION["cargo"] == "Gerente" || $_SESSION["cargo"] == "atendente" || $_SESSION["cargo"] == "gerente") { ?>      
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#controleusu" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Serviços
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="controleusu" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="Tb_Frete.php">Tabela de frete </a>
                        <a class="nav-link" href="agendamento.php">Certificações</a>
                        <a class="nav-link" href="uplod.php">Documentos</a>
                       
                    </nav>
                </div>
                        <?php //} ?>  
            </div>

        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Bem vindo :</div>
            <!--Programar nome de us�ario-->
            <?php echo $_SESSION["nome_funcionario"]; ?>
        </div>
    </nav>
</div>