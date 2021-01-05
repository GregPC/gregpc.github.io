<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Centro do Alumínio - Contato</title>
	<meta charset="UTF-8">
	<meta name="description" content="Centro do Alumínio">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon" />

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<meta name="description" content="Código fonte formulario php" />
	<meta name="keywords" content="formulario php, bootstrap, bootstrap validator" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.min.css" />
	<link rel="stylesheet" href="css/slicknav.min.css" />
	<link rel="stylesheet" href="css/image-test.css" />

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css" />
	<link href="viewer.css" rel="stylesheet">

	<style>
		main,
		footer,
		.mensagem-alerta {
			text-align: center;
		}

		form {
			max-width: 800px;
			padding-top: 30px;
			display: block;
			margin: 0 auto;
		}

		.mensagem-alerta {
			max-width: 500px;
			margin: 20px auto;
		}
	</style>

</head>

<body>
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<?php require("codigo-fonte/header.php"); ?>
	<!-- Header section end -->
	<div class="container">
		<main class="container">
			<h1>Formulário de Contato</h1>
			<p>Acrescente um email válido para receber o email teste!</p>
			<br>
			<form class="form-horizontal" action="index.php#formulario" method="post" role="form" data-toggle="validator">
				<div class="form-group">
					<label class="control-label col-sm-3">Nome*:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nome" id="nome" value="" placeholder="seu nome" required>
						<div class="help-block with-errors"></div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Email*:</label>
					<div class="col-sm-9">
						<input type="email" class="form-control" name="email" id="email" value="" placeholder="exemplo@dominio.com" required>
						<div class="help-block with-errors"></div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Telefone*:</label>
					<div class="col-sm-9">
						<input type="number" class="form-control" name="telefone" id="telefone" placeholder="(00) 00000-0000" required>
						<div class="help-block with-errors"></div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Assunto*:</label>
					<div class="col-sm-9">
						<select class="form-control" name="assunto" required>
							<option value="" selected="selected" disabled="disabled"> -- Escolha uma opção --</option>
							<option value="contato">Contato</option>
							<option value="vendas">Vendas</option>
							<option value="financeiro">Financerio</option>
							<option value="informacoes">Informações</option>
						</select>
						<div class="help-block with-errors"></div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Mensagem*:</label>
					<div class="col-sm-9">
						<textarea class="form-control" id="exampleTextarea" rows="6" id="mensagem" name="mensagem" placeholder="sua mensagem" required></textarea>
						<div class="help-block with-errors"></div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12 text-right">
						<input class="btn btn-primary" id="submit" name="btnSend" type="submit" value="ENVIAR">
						<a name="formulario"></a>
						<div class="mensagem-alerta"><?php echo $msg ?></div>
					</div>
				</div>
			</form>
		</main>

	</div>

	<section>
		<div>

			<!-- Slogan::Begin -->
			<?php require("codigo-fonte/slogan.php"); ?>
			<!-- Slogan::End -->


			<!-- Footer::Begin -->
			<?php require("codigo-fonte/footer.php"); ?>
			<!-- Footer::End -->


			<!-- Scripts::Begin -->
			<!--====== Javascripts & Jquery ======-->
			<?php require("codigo-fonte/script.php"); ?>
			<!-- Scripts::End -->

		</div>
	
</body>

</html>