<?php

//Модель формирует список страниц

include 'components/database-connect.php';

$query = "SELECT COUNT(*) as count FROM news";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$count = mysqli_fetch_assoc($result)['count'];
$pagesCount = ceil($count / $newsOnPage);