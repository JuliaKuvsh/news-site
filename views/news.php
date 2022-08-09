<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Новости России и мира</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <section class="news">
        <h1 class="news__title">Новости</h1>
        <div class="news__wrapper">
            <?php
                include 'models/one-page.php';

                foreach ($data as $elem) {
                    ?>
                        <div class="news__heading heading">
                            <div class="heading__date"> 
                                <?= date("d.m.Y", $elem['idate']) ?> 
                            </div>
                            <a href="view.php?id=<?= $elem['id'] ?>" class="heading__title">
                                <?= $elem['title'] ?> 
                            </a>
                        </div>
                        <div class="news__announce"> 
                            <?= $elem['announce'] ?>
                        </div>
                    <?
                }
            ?>
        </div>
        <div class="news__pages pages">
            <h2 class="pages__title">Страницы:</h2>
            <div class="pages__numbers">
                <?php
                    include 'models/list-pages.php';
                    
                    for ($i = 1; $i <= $pagesCount; $i++) {
                        if ($page == $i) {
                            $class = 'class="number number--active"';
                        } else {
                            $class = 'class="number"';
                        }
                        echo "<a  $class href=\"?page=$i\">$i </a>";
                    }
                ?>
            </div>
        </div>
    </section>
</body>
</html>