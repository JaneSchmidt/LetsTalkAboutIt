<?php
define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', 'root');
define('SCHEMA', 'lets_talk_about_it');
define('PORT', 8889);

class Connection 
{

  function __construct(){}

  function getConnection(){
    $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, SCHEMA);
    return $connection;
  }

  public function getQuerySingle(string $query){

    //$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, SCHEMA);

    $result = mysqli_query($this->getConnection(), $query);

    $row = mysqli_fetch_assoc($result);

    return $row;
  }

  public function getQueryArray(string $query){

    $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, SCHEMA);

    $rows = [];

    $result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($result)){

      array_push($rows, $row);
      
    }

    return $rows;
  }

  public function postQuery(string $query){

    //$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, SCHEMA);

    $result = mysqli_query($this->getConnection(), $query);

    return $result;
  }
}
