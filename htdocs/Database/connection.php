<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'lets_talk_about_it';
  $db_port = 8889;

  $mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  $connection = mysqli_connect($db_host, $db_user, $db_password, $db_db);
  
  if (!$connection){
    echo 'Error: A proper connection to MySQL was NOT made.';
  } else {
    echo 'Success: A proper connection to MySQL was made.';
    echo '<br>';
  }

  $mysqli->close();
