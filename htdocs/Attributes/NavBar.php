<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styling/navBarStyle.css">

  </head>
  <body>
      <nav class="navbar">

        <div class="navdiv">
          <div class="logo"><a href="/"><img src="../Attributes/logo.jpg" /></a></div>

              <ul class="nav_links">
                <?php if(!isset($_SESSION["first-name"])) : ?>
                  <li><a class="sign-in-button" href="login">SignIn</a></li>
                  <li><a class="sign-up-button" href="register">SignUp</a></li>
                <?php endif ?>
                <?php if(isset($_SESSION["first-name"])) : ?>
                  <li><a class="sign-out-button" href="logout">LogOut</a></li>
                  <li><a class="dropdown">Profile</a>
                    <ul class="dropdown-content">
                      <li><a href = "myArticles">My Articles</a></li>
                      <li><a href = "addArticle">New Article</a></li>
                      <li><a href = "editProfile">Edit Profile</a></li>
                    </ul></li>
                <?php endif ?>
              </ul>
        </div>
      </nav>
  </body>
</html>