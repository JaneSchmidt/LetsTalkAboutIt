<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styling/login.css">
  </head>
  <?php 
      include __DIR__ . "/../Attributes/navBar.php";
    ?>
  <body>
        <div class= "form">
            <form action = "/resetPassword" method = "update">
                <fieldset>
                    <legend>Reset password</legend>
                    <label for="username">Username:</label>
                    <input type="text" placeholder="Enter Username" id="username" name="username" required/>
                    <label for="password">New password:</label><br>
                    <input type="password" placeholder="Enter Password" id="password" name="password" required />
                    <label for="password">Confirm password:</label><br>
                    <input type="password" placeholder="Enter Password" id="password" name="password" required />
                    <input class="submit-button" type="submit" value="Reset"/>
                </fieldset>
            </form>
        </div>
  </body>
</html>