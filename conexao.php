<?php 
    $host = "127.0.0.1";
    $user = "root";
    $password = "System32*";
    $database = "Software";

    $conecta = mysqli_connect($host, $user, $password, $database);

    $sql = mysqli_query($conecta, "select * from usuarios;");

    echo mysqli_num_rows($sql);
?>