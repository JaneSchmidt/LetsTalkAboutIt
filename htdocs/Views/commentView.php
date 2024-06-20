<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styling/commentStyle.css">
  </head>
  <body>
      <div class="comments">
      <?php
        include base_path("Models/addCommentModel.php"); 
      
          $articleID = 15;
          $count = 0;    
          $model = new addCommentModel;
          $result = $model->getComments($articleID);

          foreach($result as $comment) {
            $count++;

        ?>  

          <p class="name"><?php echo $comment->getFirstName() . " ";
          if($comment->getLastName() !== NULL){ echo $comment->getLastName(); }?> </p>

          <p class="comment-content "> <?php echo $comment->getContent(); ?> </p>

          <p class="date"> <?php echo $comment->getCreationDate() ?> </p>
          
          <p class="date"><?php if($comment->getModificationDate() !== null){
                      echo $comment->getModificationDate();
              } ?></p>

        <?php } ?>
      </div>
  </body>
</html>