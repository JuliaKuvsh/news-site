<?php

//Модель формирует одну страницу с необходимым количеством новостей

include 'components/database-connect.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$newsOnPage = 5; //Количество новостей на одной странице
$from = ($page - 1) * $newsOnPage;
$query = "SELECT * FROM news ORDER BY idate DESC LIMIT $from, $newsOnPage";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);