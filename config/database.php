<?php

include __DIR__ . "/../variabel.php";
$connection = mysqli_query ($host, $username, $password, $database);

if (mysqli_connect_error()) {
    echo "Failed to connect to database";
    die;
}

?>