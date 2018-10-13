<?php

    $conn = new mysqli('localhost', 'root', 'root', 'id7469175_agenda');

    if($conn->connect_error) {
        echo $error -> $conn->connect_error;
    }
   mysqli_query("SET NAMES'utf8'");
?>