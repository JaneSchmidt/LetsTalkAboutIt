<?php


?>


<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styling/LoginStyle.css">
  </head>
  <body>
    <?php include '../Attributes/NavBar.php' ?>
        <div class= "form">
            <form>
                <fieldset>
                    <legend>Sign Up</legend>
                    <label for="username">First Name:</label>
                    <input type="text" id="username" name="username"/>
                    <label for="password">Last Name:</label><br>
                    <input type="text" id="password" name="password"/>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username"/>
                    <label for="password">Password:</label><br>
                    <input type="text" id="password" name="password"/>
                    <label for="confirm-password">Confirm Password:</label><br>
                    <input type="text" id="confirm-password" name="confirm-password"/>
                    <input type="submit" value="Sign Up"/>
                </fieldset>
            </form>
        </div>
  </body>
</html>