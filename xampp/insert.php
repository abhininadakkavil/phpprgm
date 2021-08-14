<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
            }

$name = $_POST['name'];
$collage= $_POST['collage'];
$qualification= $_POST['qualification'];

$address= $_POST['address'];
$phone= $_POST['phone'];
$email= $_POST['email'];




$sql = "INSERT INTO student(name,collage,qualification,address,phone,email) VALUES ('$name','$collage','$qualification','$address','$phone','$email')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
                                } 

else {

  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

mysqli_close($conn);
?>