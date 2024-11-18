<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "memoryup-db";

    $connection = mysqli_connect($host, $user, $pass, $database)
                    or die("Problemas com conexão no banco de dados");
                  mysqli_set_charset($connection, "utf8");
?>