<?php

/* define("SQLHOST", "localhost");
define("SQLUSER", "b3028327");
define("SQLDB", "b3028327_db1");
define("SQLPASSWORD", "badboyz1"); */ 

function connect_to_database() {
    $mysqli = mysqli_connect("localhost","root","","assignment");
    //$mysqli = new mysqli(SQLHOST, SQLUSER, SQLPASSWORD, SQLDB);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
    return $mysqli;
}

function query($sql) {
    $mysqli = connect_to_database();

    $result = $mysqli->query($sql);
    if (!$result) {
        echo "Failed to run query: " . $mysqli->error;
        exit();
    }
    return $result;
}

?>