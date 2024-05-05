<!-- To Do:
  required stars

-->

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
            <form action = "/getLoggedIn" method = "get">
                <fieldset>
                    <legend>Sign In</legend>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required/>
                    <label for="password">Password:</label><br>
                    <input type="text" id="password" name="password" required/>
                    <input type="submit" value="Login"/>
                </fieldset>
            </form>
        </div>
  </body>
</html>