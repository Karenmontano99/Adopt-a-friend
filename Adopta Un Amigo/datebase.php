<?php

$server ="localhost";
$username = 'root';
$password = '';
$database = 'php_login_database';

/*

try{
    $conn = mysqli_connect ($server,$database,$username, $password);


} catch (PDOException $e   ){
    die('Conection failed: '.$e->getMessage ());
    
}
*/

$conn = mysqli_connect ($server,$database,$username, $password);
 if(if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}   
        echo "Connected successfully";
        mysqli_close($conn);)


?>