<?php
$mysqli;

function connect_DB() {
    $mysqli = new mysqli("localhost", "my_user", "my_password", "world");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $query = $mysqli->query("SHOW TABLES LIKE DATA");
    if (!$query) {
        $mysqli->query("CREATE TABLE DATA");
    }
}

function save_form_as_string($dataString){
    connect_DB();
    $hash;
    $query = $mysqli->query("INSERT INTO DATA (data_string, hash) VALUES ('" . $dataString . "' , '" . $hash ."')");
    if (!$mysqli->commit())
        print("Transaction commit failed\n");
    $mysqli->close();
}

function process_string($dataString, $hash, $regex, $entry) {
    connect_DB();
    $query = $mysqli->query("SELECT data_string, hash from DATA where data_string=" . $dataString . " and hash=" . $hash);
     if (!fnmatch($regex, $entry))
         echo "Bad Entry";
    $mysqli->close();
}
?>