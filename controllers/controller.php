<?php
$id = filter_input(INPUT_GET, 'id');
$page = filter_input(INPUT_GET, 'page');

if (!$id || $page) {
    include 'views/news.php';
}
elseif($id) {
    include 'views/view.php';
}