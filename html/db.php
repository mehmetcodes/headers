<?php

  $conn = NULL;

  class DB {

    function get_connection() {
      #if (is_null($GLOBALS['conn'])) {
        $mysqli = new mysqli("localhost", "root", "password", "headers");
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
      #}
      return  $mysqli;
    }
  }

 ?>
