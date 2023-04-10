<?php

$con = new PDO('mysql:host=localhost;dbname=banco', 'root','12345678');

$sql = "SELECT * FROM dados";
$stmt = $con->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_OBJ);

echo "<pre>";
print_r($data);
echo "</pre>";