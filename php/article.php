<?php

  include "inc/header.php";

  include "inc/articles.data.php";

  $id_article = intval( $_GET['id'] ?? 0 );

  if( is_int( $id_article ) && $id_article >= 0 && count( $articles ) >= $id_article ) :
    $article = $articles[ $id_article ];

    include "inc/partials/article.template.php";
  else :
    echo "Article introuvable";
  endif;

  include "inc/footer.php";
