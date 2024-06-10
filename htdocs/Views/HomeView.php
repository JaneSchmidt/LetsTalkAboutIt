<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styling/homeStyle.css">
  </head>
    <body class="container">
      <?php 
        include base_path("Attributes/navBar.php");
        include base_path("Models/homeModel.php");
      ?>

      <br/>

      <h1 class="header">
        Let's Talk About It
      </h1>

      <div class="blog">
        <?php 
              
          $model = new HomeModel;
          $result = $model->getArticles();

          foreach($result as $article) {
        ?>  
          <div class="blog-post">

            <header class="subject">
              <h1> <?php echo $article->getSubject()  ?> </h1>
            </header>

            <div class="content">
              <p> <?php $content = $article->getContent();
                if (strlen($content)>50){
                  $_SESSION["current-article"] = serialize($article);
                  $newContent = substr($content, 0, 500);
                  echo $newContent . '...';
                  ?> </br><a class="see-more-button" href="fullArticle">See More</a> <?php
                  } else {
                    echo $content; 
                  }
                ?> </p>
            </div>

            <footer class="name-and-date">
              <h5><?php echo $article->getFirstName() . ", " . $article->getLastName() ?> - <?php echo $article->getCreationDate() ?> </h5>
            </footer>

          </div>
        <?php } ?>
    
      </div>


    </body>
</html>