<?php
define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', 'root');
define('SCHEMA', 'lets_talk_about_it');
define('PORT', 8889);

class Connection 
{

  public static function getConnection()
  {
    $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, SCHEMA);
  
    if (!$connection){
      echo 'Error: A proper connection to MySQL was NOT made.';
    } 
  
    return $connection;
  }
}
