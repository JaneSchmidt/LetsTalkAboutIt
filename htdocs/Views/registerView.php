<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styling/login.css">
  </head>
  <body>
    <?php 
      include base_path("Attributes/navBar.php");
    ?>
        <div class= "form">
            <form method = "post" action = "/getRegistered">
                <fieldset>
                  
                    <legend>Sign Up</legend>

                      <label for="first-name">First Name:</label>
                      <input type="text" id="first-name" class="required" name="first-name" maxlength="12" value="<?php echo $_POST["first-name"] ?? "" ?>"/>
                          <?php if(isset($name)): ?>
                            <p class="error"><?php echo $name;?></p>
                          <?php endif; ?>

                      <label for="last-name">Last Name:</label><br>
                      <input class="error"type="text" id="last-name" name="last-name" maxlength="16" value="<?php echo $_POST["last-name"] ?? "" ?>"/>

                      <label for="username">Username:</label>
                      <input type="text" id="username" name="username" class="required" maxlength="12" value="<?php echo $_POST["username"] ?? "" ?>"/>
                          <?php if(isset($username)): ?>
                            <p class="error"><?php echo $username;?></p>
                          <?php endif; ?>

                      <label for="password">Password:</label><br>
                      <input type="text" id="password" class="required" name="password" maxlength="18"/>
                          <?php if(isset($password)): ?>
                            <p class="error"><?php echo $password;?></p>
                          <?php endif; ?>

                      <label for="confirm-password">Confirm Password:</label><br>
                      <input type="text" id="confirm-password" class="required" name="confirm-password" maxlength="18"/>
                          <?php if(isset($confirmPassword)): ?>
                            <p class="error"><?php echo $confirmPassword;?></p>
                          <?php endif; ?>

                    <input class="submit-button" type="submit" value="Sign Up"/>

                </fieldset>
        </div>
  </body>
</html>