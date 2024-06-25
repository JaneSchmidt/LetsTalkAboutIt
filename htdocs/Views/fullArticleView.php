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
        
        <?php if(isset($_SESSION["current-article"])){
            $object = unserialize($_SESSION["current-article"]);
          ?>
        

      <div class="header">
        <h1 class="subject"> <?php echo $object->getSubject(); ?> </h1>
        <h5 class="published-by"><?php echo "Published by " . $object->getFirstName() . " ";
        if($object->getLastName() !== NULL){ echo $object->getLastName();} echo " on " . $object->getCreationDate();?> </h5>
      </div>

      <div class="blog-post">

          <div class="article">

            <h5><?php if($object->getModificationDate() !== null){
                    echo "Modified on" . $object->getModificationDate();
                } ?></h5>

            <div class="content">
            <p> <?php echo nl2br($object->getContent()); ?> </p>
            </div>
          </div>
            
        <?php } else {
          header("Location: /");
        } ?>

        <?php 
          view("commentView.php");
          if(isset($_SESSION["username"])): ?>

            <form action = "/addComment" method = "post">

              <input type="text" placeholder="Add comment..." name="comment" value="<?php echo $_POST["comment"] ?? ""?>">
              <input class="submit-button" type="submit" value="Add Comment"/>

              <?php if(isset($comment)): ?>
                <p class="error"><?php echo $comment; ?></p>
              <?php endif ?>

            </form>

          <?php endif; ?>


      </div>

    </body>
</html>