<?php

include "../config/conn.php";

$title = $_POST['title'];
$data = $_POST['data'];
$description = $_POST['description'];
$arquivo = $_FILES['image'];

move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);

$image = 'uploads/'.$arquivo['name'];

//preparar
$stmt = $connect->prepare("INSERT INTO posts (title, data, description, image) VALUES(:title, :data, :description, :image)");

//trocar
$stmt->bindParam(':title', $title);
$stmt->bindParam(':data', $data);
$stmt->bindParam(':description', $description);
$stmt->bindParam(":image", $image);

//executar
$stmt->execute();

header("Location: view2.php");

echo $title."<br>";
echo $data."<br>";
echo $description."<br>";

?>