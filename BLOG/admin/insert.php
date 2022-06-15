<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário</title>
	<!--CSS only-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	
</head>
<body>
	<main>
		<div class="container">
			<form action="envia.php" method="POST" enctype="multipart/form-data">
				<h1>Inserir</h1>
				<div>
					<label for="title">Título:</label>
					<input type="text" name="title" required>
				</div>
				<div>
					<label for="data">Data: </label>
					<input type="date" name="data" required>
				</div>
				<div>
					<label for="description">Descrição:</label>
					<textarea id="description" name="description" cols="30" rows="10" class="input-padrao" required></textarea>
				</div>
				<div>
					<label for="image">Imagem:</label>
					<input type="file" placeholder="Insira uma imagem" name="image" required/>
				</div>
				<div>
					<input type="submit" name="Publicar">
				</div>
			</form>
		</div>
	</main>
</body>
</html>