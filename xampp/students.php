<?php
$servername= "localhost";
$username= "root";
$password= "";

 //create connection
$conn = mysqli_connect($servername, $username ,$password );
//check connection
if(!$conn)
{
    die("Connection failed:"  .mysqli_connect_error());
    

}
echo "connection successfully";
?>