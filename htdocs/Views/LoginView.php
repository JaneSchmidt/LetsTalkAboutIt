<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styling/login.css">
  </head>
  <?php 
      include base_path("Attributes/navBar.php");
    ?>
  <body>
        <div class= "form">
            <form action = "/getLoggedIn" method = "get">
                <fieldset>
                    <legend>Sign In</legend>
                    
                      <?php if(isset($login)): ?>
                        <p><?php echo $login; ?></p>
                      <?php endif ?>
                      <label for="username">Username:</label>
                      <input type="text" placeholder="Enter Username" id="username" name="username" maxlength="12"/>

                      <label for="password">Password:</label><br>
                      <input type="password" placeholder="Enter Password" id="password" name="password" maxlength="18"/>
                        <?php if(isset($error)): ?>
                          <p><?php echo $error;?></p>
                        <?php endif; ?>

                    <input class="submit-button" type="submit" value="Login"/>
                </fieldset>
            </form>
        </div>
  </body>
</html>