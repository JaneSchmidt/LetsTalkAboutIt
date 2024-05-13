<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styling/homeStyle.css">
</head>
  <body class="container">
    <?php 
      include __DIR__ . "/../Attributes/navBar.php";
      include __DIR__ . "/../Models/homeModel.php";

      $model = new homeModel();
    ?>

    <h1 class="header">
      Let's Talk About It
    </h1>

    <div class="blog">

      <div class="blog-post">

        <header class="subject">
          <h1>How to clean your house </h1>
        </header>

        <div class="content">
          <p>Amy Riley remembers the time someone wished her a happy Mother's Day and she broke down in tears, right in the middle of a Wegman's supermarket.

"I found Mother's Day to be impossible," the Collingswood, New Jersey, woman said. She had been pregnant six times, but none of those pregnancies lasted. Motherhood, she worried, might never happen for her, and the realization and the reminders were painful.Amy Riley remembers the time someone wished her a happy Mother's Day and she broke down in tears, right in the middle of a Wegman's supermarket.

"I found Mother's Day to be impossible," the Collingswood, New Jersey, woman said. She had been pregnant six times, but none of those pregnancies lasted. Motherhood, she worried, might never happen for her, and the realization and the reminders were painful.</p>
        </div>

        <footer class="name-and-date">
          <h5>Jane Schmidt, 10-24-24 2:50PM</h5>
        </footer>
      </div> <!-- end blog-post-->


      <div class="blog-post">

        <header class="subject">
          <h1>What to do if your dog wont stop barking</h1>
        </header>

        <div class="content">
          <p>Content of blog one hehre herh akjfne iwekjbfka fajegn iwejrlkasFJIU RGJLWEADerwkgjne jerngkjenrawiusdw wefje gkerjgodifsg ln</p>
        </div>

        <footer class="name-and-date">
          <h5>Jane Schmidt, 10-24-24 2:50PM</h5>
        </footer>

      </div><!-- end blog-post-->
    </div><!-- end blog-->


  </body>
</html>