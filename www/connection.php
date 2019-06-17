<?php   
    define("DB_HOST", "mysqldb:3306");
    define("DB_USER", "root");
    define("DB_PASS", "1234");
    define("DB_NAME", "dochoa");
   
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

     
    if (!$db){
        die("Conexión fallida" . mysqli_connect_error());
    }

    mysqli_set_charset($db,"utf8");
?>
