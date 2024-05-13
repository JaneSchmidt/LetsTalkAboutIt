<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styling/homeStyle.css">
</head>
  <body class="container">
    <?php 
      include __DIR__ . "/../Attributes/navBar.php";
      include __DIR__ . "/../Models/HomeModel.php";
    ?>

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
            <p> <?php echo $article->getContent() ?> </p>
          </div>

          <footer class="name-and-date">
            <h5><?php echo $article->getFirstName() . ", " . $article->getLastName() ?>, <?php echo $article->getCreationDate() ?> </h5>
          </footer>

        </div><!-- end blog-post-->
      <?php } ?>
   
    </div><!-- end blog-->


  </body>
</html>