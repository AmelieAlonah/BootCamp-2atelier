
<?php

    include "inc/header.php";
    include "inc/articles.data.php";

?>
    <h2 class="right__title">Latest News</h2>
    <div class="posts">

        <?php foreach( $articles as $id_article => $data_article ) : ?>

            <article class="post">
                <a href="" class="post__category post__category--color-<?= $data_article['category'] ?>">
                    <?= $data_article['category'] ?>
                </a>
                <h3><?= $data_article['title'] ?></h3>
                <div class="post__meta">
                    <img class="post__author-icon" src="<?= $data_article['author_img'] ?>" alt="">
                    <strong class="post__author">
                        <?= $data_article['author'] ?>
                    </strong>
                    <time datetime="<?= $data_article['date_tag'] ?>">
                        <?= $data_article['date'] ?>
                    </time>
                </div>
                <p></p>
                <a href="article.php?id=<?= $id_article ?>" class="post__link">Continue reading</a>
            </article>

        <?php endforeach; ?>

    </div>

<?php include "inc/footer.php"; ?>