<?php
$server="localhost";
$user="ngo";
$password="123";
$db="ngo";
$con=mysqli_connect($server,$user,$password,$db);
if(mysqli_connect_error())
{
    echo"connection failed";
}

?>