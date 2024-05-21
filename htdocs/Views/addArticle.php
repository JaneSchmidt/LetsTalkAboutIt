<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styling/addArticleStyle.css">
  </head>
  <?php 
      include __DIR__ . "/../Attributes/navBar.php";
    ?>
  <body>
        <div class= "form">
            <form action = "/resetcontent" method = "update">
                <fieldset>
                    <legend>New Article</legend>
                    <label for="subject">Subject</label>
                    <input type="text" placeholder="Enter subject" class="subject" name="subject" required/>
                    <label for="content">Content:</label><br>
                    <input type="textarea" placeholder="Enter content" class="content" name="content" required />
                    <input class="submit-button" type="submit" value="Post"/>
                </fieldset>
            </form>
        </div>
  </body>
</html>