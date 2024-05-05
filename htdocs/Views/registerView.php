<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styling/LoginStyle.css">
  </head>
  <body>
    <?php 
      include __DIR__ . "/../Attributes/navBar.php";
    ?>
        <div class= "form">
            <form method = "post" action = "/register">
                <fieldset>
                    <legend>Sign Up</legend>
                    <label for="username">First Name:</label>
                    <input type="text" id="username" name="username" required/>
                    <label for="password">Last Name:</label><br>
                    <input type="text" id="password" name="password" required/>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required/>
                    <label for="password">Password:</label><br>
                    <input type="text" id="password" name="password" required/>
                    <label for="confirm-password">Confirm Password:</label><br>
                    <input type="text" id="confirm-password" name="confirm-password" required/>
                    <input type="submit" value="Sign Up"/>
                </fieldset>
        </div>
  </body>
</html>