<?php
    $server = "localhost";
   
    $user = "root";
    $password = "Roshan@92";
    $db = "school";
    
    $conn = mysqli_connect($server, $user, $password, $db);

    if (!$conn) {
        header('Location: ../errors/error.html');
        exit();
    }


?>