<?php
session_start();
if (count($_COOKIE) > 0) {
	if (isset($_COOKIE["user"])) {
		echo $_COOKIE["user"];
		$_SESSION['cookieuser'] =  base64_decode(htmlspecialchars($_COOKIE["user"]));
		header("Location: login/login.php");
	}
} else {
	setCookie('user');
}
?>

<!doctype html>
<html lang="pt-br">

<head>
	<title>Sistema Saúde</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="../assets/css/home.css">
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<?php
	if (isset($_SESSION['erro'])) {
		echo $_SESSION['erro'];
		unset($_SESSION['erro']);
	}
	?>
</head>

<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-10 col-lg-16 col-md-9">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-6 bg rounded"></div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h2 text-gray-900 mb-5">Bem vindo ao Sistema de Saúde!</h1>
									</div>
									<form class="user" method="POST" action="login/login.php">
										<div class="form-group">
											<input type="email" name="email" id="email" class="form-control form-control-user" id="validationCustom01" placeholder="Coloque seu e-mail..." required>
											<div class="invalid-feedback">
												Por favor, informe um e-mail.
											</div>
										</div>
										<div class="form-group">
											<input type="password" name="password" id="password" class="form-control form-control-user" id="validationCustom02" placeholder="Senha" required>
											<div class="invalid-feedback">
												Por favor, informe uma senha.
											</div>
										</div>
										<input type="submit" class="btn btn-primary btn-user btn-block" value="Entrar">
									</form>
									<hr>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>