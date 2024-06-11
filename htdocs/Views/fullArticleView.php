<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styling/fullArticleStyle.css">
  </head>
    <body class="container">
      <?php 
        include base_path("Attributes/navBar.php");
        include base_path("Entity/article.php");
      ?>

      <br/>

      <div class="blog-post">
        
        <?php if(isset($_SESSION["current-article"])){
          $object = unserialize($_SESSION["current-article"]);
        ?>

          <div class="article">

            <h1 class="subject"> <?php echo $object->getSubject(); ?> </h1>
            
            <h5 class="published-by"><?php echo "Published by" . $object->getFirstName() . " " . $object->getLastName();?> </h5>

            <div class="content">
            <p> <?php echo $object->getContent(); ?> </p>
            </div>
          </div>

          <footer class="name-and-date">
            <h5><?php echo "Published on" . $object->getCreationDate(); ?> </h5>
            <h5><?php if($object->getModificationDate() !== null){
                    echo "Modified on" . $object->getModificationDate();
                } ?></h5>
          </footer>
            
        <?php } else {
          header("Location: /");
        } ?>

        <?php 
          include base_path("Attributes/comment.php");
          if(isset($_SESSION["username"])){
            include base_path("Attributes/addComment.php");
          }?>
        
      </div>

    </body>
</html>