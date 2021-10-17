

<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "demo";

    $conn = mysqli_connect($server, $user, $password, $database);

    //check database connection
    if(!$conn){
        die("<script>alert('Connection Failed.')</script>");
    }
?>