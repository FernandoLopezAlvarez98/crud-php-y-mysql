<?php
function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $db_name = "users_crud_php";

    $connect = mysqli_connect($host,$user,$pass);
    mysqli_select_db($connect, $db_name);

    return $connect;
}


?>