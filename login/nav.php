﻿<?php include 'banco.php';  include 'verifica_login.php';  ?>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

    
    <a class="navbar-brand" href="index.php"><i  style="margin-left: -10px;"></i> Lazara Transporte</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="inicial.php"><i
            class="fas fa-bars"></i></button>
 
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

    </form>
   
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
               
                <a class="dropdown-item" href="informacoes.php">Ajuda</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">Sair</a>
            </div>
        </li>
    </ul>
</nav>