<?php

//Модель формирует страницу с одной новостью

include 'components/database-connect.php';

if(isset($_GET['id'])) {
    $newsId = $_GET['id'];
}

$query = "SELECT title, content FROM news WHERE id = $newsId";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);