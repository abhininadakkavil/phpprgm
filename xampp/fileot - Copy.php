<?php
if($_FILES["file"]["error"]>0)
{
    echo"Error:" .$_FILES["file"]["error"]."<br>";

}
else
{
    echo"upload:".$_FILES["file"]["name"]."<br>";
    echo"type:".$_FILES["file"]["type"]."<br>";
    echo"size:".($_FILES["file"]["size"]/1024)."kb<br>";
    echo"stored in:".$_FILES["file"]["tmp_name"];
    
    
}
?>