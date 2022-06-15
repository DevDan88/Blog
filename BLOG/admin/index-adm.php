<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Painel Administrativo</title>
	<!--CSS only-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<!--CSS-->
	<link rel="stylesheet" href="../css/style-adm.css">
</head>
<body class="text-center">
	<main class="form-login">
		<form method="post" action="logar.php">
			<img class="mb-4" src="../image/geek.png" alt="" width="70" height="70">
		<h3 class="h3">Painel Administrativo</h3>
		<div class="mb-3">
			<label for="formGroupExampleInput"
			class="form-label">Login</label>
			<input type="text" class="form-control"
			id="formGroupExampleInput" name="login" placeholder="Login">
		</div>
		<div>
			<label for="formGroupExampleInput"
			class="form-label">Senha</label>
			<input type="text" class="form-control"
			id="formGroupExampleInput" name="senha" placeholder="Senha">
		</div>
		<div>
			<input type="submit" value="Logar">
		</div>
		</form>
	</main>	
</body>
</html>