<?php

require_once 'db_credentials.php';

// create DB connection
function db_connect() {
    $connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    //confirm connnection is made or print error
    confirm_db_connect($connection);

    //turn on reporting only after a connection was made
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connection->set_charset("utf8mb4");

    return $connection;
  }

// check for DB connection errors
function confirm_db_connect($connection) {
    if($connection->connect_errno) {
      $msg = "Database connection failed:";
      exit($msg);
    }
  }
  
  // end DB connection
  function db_disconnect($connection) {
    if(isset($connection)) {
      $connection->close();
    }
  }

// escape special characters in a string
// for use in SQL stmts
function db_escape($connection, $string)
{
    return mysqli_real_escape_string($connection, $string);
}

// make sure DB query returned something
function confirm_result_set($result_set)
{
    if (!$result_set) {
        exit("Database query failed.");
    }
}
