<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styling/homeStyle.css">
  </head>
    <body class="container">
      <?php 
        include base_path("Attributes/navBar.php");
        include base_path("Entity/article.php");
      ?>

      <br/>

      <h1 class="header">
        Let's Talk About It
      </h1>

      <div class="blog">

          <div class="blog-post">
            <?php if(isset($_SESSION["current-article"])){
                $object = unserialize($_SESSION["current-article"]);
                var_dump($object);
              ?>

              <header class="subject">
                <h1> <?php echo $object->getSubject(); ?> </h1>
              </header>

              <div class="content">
                <p> <?php echo $object->getContent(); ?> </p>
              </div>

              <footer class="name-and-date">
                <h5><?php echo $object->getFirstName() . ", " . $object->getLastName(); ?> - 
                <?php $object->getCreationDate(); ?> </h5>
              </footer>
            <?php } else {
                header("Location: /");
            } ?>

          </div>
    
      </div>


    </body>
</html>