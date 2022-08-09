<!DOCTYPE html>
<html lang="ru">
<head>
<?php
    include 'models/one-news.php';
    foreach ($data as $elem) {
        ?>
        <title> <?= $elem['title'] ?>  </title>
        <?
    }
?>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <section class="news">
        <?php
            include 'models/one-news.php';

            foreach ($data as $elem) {
                ?>
                    <h1 class="news__title"> 
                        <?= $elem['title'] ?> 
                    </h1>
                    <div class="news__content"> 
                        <?= $elem['content'] ?>
                    </div>
                <?
            }
        ?>
        <a class="news__link-main" href="news.php">Все новости >></a>
    </section>
</body>
</html>