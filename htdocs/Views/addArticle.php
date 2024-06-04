<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styling/addArticleStyle.css">
  </head>
  <?php 
      include base_path("Attributes/navBar.php");
    ?>
  <body>
        <div class= "form">
            <form action = "/newArticle" method = "post">
                <fieldset>
                    <legend>New Article</legend>

                      <label for="subject">Subject</label>
                      <input type="text" placeholder="Enter subject" class="subject" name="subject" value="<?php echo $_POST["subject"] ?? "" ?>" required/>

                      <label for="content">Content:</label><br>
                      <textarea placeholder="Enter content" class="content" name="content" value="<?php echo $_POST["content"] ?? "" ?>" required></textarea>

                    <input class="submit-button" type="submit" value="Post"/>

                </fieldset>
            </form>
        </div>
  </body>
</html>