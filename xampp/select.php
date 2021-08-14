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

$sql = "SELECT *FROM student WHERE name='$name'";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>NAME</th>";
    echo "<th>collage</th>";
    echo "<th>qualification</th>";
    echo "<th>address</th>";
    echo "<th>phone</th>";
    echo "<th>email</th>";
    echo "</tr> <tr>";
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["collage"]."</td>";
        echo "<td>".$row["qualification"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["phone"]."</td>";
        echo "<td>".$row["email"]."</td>";
    }
    echo "</tr></table>";
  } else {
    echo "0 results";
  }