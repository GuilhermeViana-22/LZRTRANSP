<?php
include 'banco.php';

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>LZR-SGB Atualizar Senha</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/lanzara_icon.png" />
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	<style>
		.alerta {
			padding: 25px;
			border: 1px solid gray;
			border-radius: 3px;
			margin: 10px;
			font-size: 18px;
		}

		.error {
			border-color: #e8273b;
			color: #FFF;
			background-color: #ed5565;
			padding: 25px;
			border: 1px solid gray;
			border-radius: 3px;
			margin: 10px;
			font-size: 18px;
		}

		.sucesso {
			border-color: #87c940;
			color: #FFF;
			background-color: #a0d468;
			padding: 25px;
			border: 1px solid gray;
			border-radius: 3px;
			margin: 10px;
			font-size: 18px;
		}
	</style>
</head>

<body>

	<?php


	?>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100R">
				<form class="login100-form validate-form" method="Post" action="atualiza_senha.php">

					</span>

					<br>
					<span class="login100-form-title p-b-34 p-t-27">
						Atualizar senha
					</span>
					<br>

					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="email" placeholder="Digite seu e-mail">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" name="localizar" class="login100-form-btn">
							Localizar
						</button>
					</div>
					<br>


					<?php if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 2) { ?>
						<br>
						<div class="alert alert-success">
							<?php
							echo "Altualizada com Sucesso!";
							?>
						</div>
					<?php } else if (isset($_GET["erro"]) && $_GET["erro"] == 2) { ?>

						<div class="alert alert-danger">
							<?php
							echo "Erro ao atualizar";
							?>
						</div>
					<?php } ?>
					<?php if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 1) { ?>

						<form class="login100-form validate-form" method="Post" action="atualiza_senha.php">
							<div class="wrap-input100 validate-input" data-validate="Enter password">
								<input class="input100" type="password" id="nsenha" name="nsenha" placeholder="Insira a sua nova senha">
								<span class="focus-input100" data-placeholder="&#xf191;"></span>
							</div>
							<div class="wrap-input100 validate-input" data-validate="Enter password">
								<input class="input100" type="password" name="csenha" placeholder="Repetir a sua nova senha">
								<span class="focus-input100" data-placeholder="&#xf191;"></span>
							</div>
							<div class="container-login100-form-btn">
								<button type="submit" name="atualizar" class="login100-form-btn">
									Registrar nova senha
								</button>
							</div>
							<br>



						</form>
					<?php } else if (isset($_GET["erroloc"]) && $_GET["erroloc"] == 1) { ?>
						<div class="alert alert-danger col-md-6">
							<?php

							echo "Não localizado!";

							?>
						</div>
					<?php } else if (isset($_GET["erro"]) && $_GET["erro"] == 3) { ?>
						<div class="alert alert-danger col-md-6">
							<?php

							echo "Verifique se as senha são identicas !";

							?>
						</div>
					<?php } ?>

					<div class="text-center p-t-90">
						<a class="txt1" href="Login_page.php">
							Fazer login
						</a>
					</div>
				</form><!--  -->
			</div>






		</div>
	</div>



	<div id="dropDownSelect1"></div>
	

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>