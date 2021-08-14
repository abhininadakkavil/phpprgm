<?php
$allowedExts=array("gif","jpeg","jpg","png");
$temp=explode(".",$_FILES["file"]["name"]);
$extension=end($temp);


if((($_FILES["file"]["type"]=="image/gif")
||($_FILES["file"] ["type"]=="image/jpeg")
||($_FILES["file"] ["type"]=="image/jpg")
||($_FILES["file"] ["type"]=="image/pjpeg")
||($_FILES["file"] ["type"]=="image/x-png")
||($_FILES["file"] ["type"]=="image/png"))
&&($_FILES["file"] ["size"]<20000)
&& in_array($extension,$allowedExts))
{

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
}
else{
    echo "invalid file";
}
?>