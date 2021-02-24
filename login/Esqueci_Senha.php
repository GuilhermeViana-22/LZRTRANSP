<?php
include 'banco.php';

if (isset($_Post["ok"])) {
	$email = $mysqli->escape_String($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$err0[] = "email invalido";
	}
	$sql_code = "SELECT email, id_funcionario FROM funcionario WHERE email = '$email'";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->erro);
	$dados = $sql_query->fetch_assoc();
	$total = $sql_query->num_rowns;
	if ($total == 0) {
		$err0[] = "email nao existe na base de dados ";
	}
	if (count($erro) == 0 && $total > 0) {
		$nova_Senha = substr((md5(time())), 0, 6);
		$novaSenha_criptografada = md5(md5($nova_Senha));

		require 'PHPMailer/PHPMailerAutoload.php';
		$mail = new PHPMailer(); // instacia a classe 
		$mail->isSMTP(); // informa o tipo de entrada 

		$mail->Host = "smtp.gmail.com"; // smtp do gmail: gmail.com
		$mail->Port = 587; //porta do gmail 587; porta do yahoo 465
		$mail->SMTPSecure = "tls"; // informa que o email é seguro 
		$mail->SMTPAuth = true; // e informa que o emaio é verificado
		$mail->Username = "Elton13cdz@gmail.com"; // email do destinatario
		$mail->Password = "justino123456"; // senha do destinatrio de acesso ao email

		$mail->setFrom($mail->Username, $nomeEmpresa); // iforma o remetente 
		$mail->addAddress('Elton13cdz@gmail.com'); // emaio que vai recerber as informação(destinatario)
		$mail->Subject = "Nova Senha"; // titulo do email (assunto)
		// abaixo contem o corpo do email com as informações 
		$conteudo_email = "<strong>Sua nova Senha de Acesso é :</strong>" . $nova_Senha;
		$mail->isHTML(true); // informa que possui html
		$mail->Body = $conteudo_email; // coloca as infomaçoes no corpo do email 
		if ($mail->send()) {
			$sql_code = "UPDATE funcionario SET senha = $novaSenha_criptografada where Email = $email ";
			$sql_query = $mysqli->query($sql_code) or die($mysqli->erro);
		}
	}
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<form class="login100-form validate-form" method="Post" action="Esqueci_Senha.php">

					</span>

					<br>
					<span class="login100-form-title p-b-34 p-t-27">
						Recuperação de senha
					</span>
					<br>

					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="email" value="<?php echo $_POST['email'] ?>" placeholder="Digite sua nova senha">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<!--<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="repetir a sua nova senha">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>-->
					<div class="container-login100-form-btn">
						<button type="submit" name="ok" class="login100-form-btn">
							Registrar nova senha
						</button>
					</div>
					<br>
					<?php


					?>
				</form>
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

					<form class="login100-form validate-form" method="Post" action="Esqueci_Senha.php">


						<div class="wrap-input100 validate-input" data-validate="Enter username">
							<input class="input100" type="text" name="email" value="<?php echo $_POST['email'] ?>" placeholder="Digite sua nova senha">
							<span class="focus-input100" data-placeholder="&#xf207;"></span>
						</div>

						<!--<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="repetir a sua nova senha">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>-->
						<div class="container-login100-form-btn">
							<button type="submit" name="ok" class="login100-form-btn">
								Registrar nova senha
							</button>
						</div>
						<br>
						<?php


						?>
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
			</div>






		</div>
	</div>
	</div>


	<div id="dropDownSelect1"></div>
	<script>

	</script>

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