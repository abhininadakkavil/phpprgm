<?php  
session_start();  
?>   
<html>  
<body>  
<?php  
$name=$_POST['name'];
$product=$_POST['product'];

$_SESSION["name"] = $name;
$_SESSION["product"] = $product;

    echo "User name is $_SESSION["name"] and product searched is $_SESSION["product"];
?> 
<form action="c.php">
    <button type="submit">Logout</button>
</form>
</body>  
</html> 