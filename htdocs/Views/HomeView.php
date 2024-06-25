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

    <div class="without-navbar">
      <h1 class="header">
        Let's Talk About It
      </h1>
      <p class="about">The site where you talk about anything and everything</p>

      <div class="blog">
        <?php 
          $count = 0;    
          $model = new HomeModel;
          $result = $model->getArticles();

          foreach($result as $article) {
            $count++;

        ?>  

          <div class="blog-post">
          
            <div class="image">
              <img src="../Attributes/temp-image.jpeg" />
            </div>

            <div class="content">

              <header class="subject">
                <h2> <?php echo $article->getSubject()  ?> </h2>
              </header>

              <div class="content">
                <p> <?php $content = $article->getContent();
                  if (strlen($content)>50){
                    $_SESSION["current-article"] = serialize($article);
                    $newContent = substr($content, 0, 500);
                    echo nl2br($newContent . '...');?> 
                    <form id="myform" action= "/fullArticle" method="get">
                      <input type="hidden" placeholder="Enter subject" class="subject" name="subject" value = <?php echo $article->getArticleID(); ?>>
                      </br><button type="submit" id="id" value="value">See More</button>  
                    </form>
                    <?php } else {
                      echo nl2br($content); 
                    }
                  ?> </p>
              </div>

              <footer class="name-and-date">
                <h5><?php echo $article->getFirstName() . " ";
                  if($article->getLastName() !== NULL){ echo $article->getLastName();} 
                  ?> - <?php echo $article->getCreationDate() ?> </h5>
                <h5><?php if($article->getModificationDate() !== null){
                    echo $article->getModificationDate();
                } ?></h5>
              </footer>

            </div>

          </div>
        <?php } ?>
    
      </div>
      </div>

    </body>
</html>