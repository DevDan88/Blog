<?php 
include "config/conn.php"; 
include "nav.php";

$id = $_GET['id'];

$stmt = $connect->prepare("SELECT * FROM posts WHERE id = :id");
$stmt->execute(array('id'=>$id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style-blog.css">
</head>
<body>
	
</body>
</html>
<div class="container">
	<?php foreach ($results as $post): ?>
		<h1><?= $post['title'] ?></h1>
		<p><?= date('d/m/Y', strtotime($post['data'])); ?></p>
		<p>
		<img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
		</p>
		<p><?= $post['description'] ?></p>
	<?php endforeach; ?>
</div>


<?php include "footer.php"; ?>
