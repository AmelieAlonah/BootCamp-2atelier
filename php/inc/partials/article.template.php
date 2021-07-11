  <h2 class="right__title">
    <?= $article['title'] ?>
  </h2>

  <article class="post post--solo">
    <div class="">
        <a href="" class="post__category post__category--color-<?= $article['category'] ?>">
          <?= $article['category'] ?>
        </a>
        <div class="post__meta">
            <img class="post__author-icon" src="<?= $article['author_img'] ?>" alt="">
            <strong class="post__author">
              <?= $article['author'] ?>
            </strong>
            <time datetime="<?= $article['date_tag'] ?>">
              <?= $article['date'] ?>
            </time>
        </div>

        <p>
          <?= $article['text'] ?>
        </p>

        <a href="index.php">
            Back to home
        </a>
    </div>
  </article>