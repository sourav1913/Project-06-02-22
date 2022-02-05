<?php
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBNAME','first_entry');
    $conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
    
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL : " .mysqli_connect_error();
        exit();
    }
?>