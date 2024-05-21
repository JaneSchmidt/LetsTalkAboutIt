<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styling/login.css">
  </head>
  <body>
    <?php 
      include __DIR__ . "/../Attributes/navBar.php";
    ?>
        <div class= "form">
            <form method = "post" action = "/getRegistered">
                <fieldset>
                  
                    <legend>Sign Up</legend>

                      <?php if(isset($errors["form-fill-out"])): ?>
                        <p>Error</p>
                      <?php endif ?>

                      <label for="first-name">First Name:</label>
                      <input type="text" id="first-name" name="first-name" maxlength="12" value="<?php echo $_POST["first-name"] ?? "" ?>" required/>

                      <label for="last-name">Last Name:</label><br>
                      <input type="text" id="last-name" name="last-name" maxlength="16" value="<?php echo $_POST["last-name"] ?? "" ?>"/>

                      <label for="username">Username:</label>
                      <input type="text" id="username" name="username" maxlength="12" value="<?php echo $_POST["username"] ?? "" ?>" required/>

                      <label for="password">Password:</label><br>
                      <input type="text" id="password" name="password" maxlength="18" required/>

                      <label for="confirm-password">Confirm Password:</label><br>
                      <input type="text" id="confirm-password" name="confirm-password" maxlength="18" required/>

                    <input class="submit-button" type="submit" value="Sign Up"/>

                </fieldset>
        </div>
  </body>
</html>