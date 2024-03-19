<?php
$con =mysql_connect("localhost","root");
if(! $con)
{
    die('could not connect:'.mysql_error());
}
mysql_select_db("college2",$con);
$sql="INSERT INTO register(name,designation,username,password,confirmpassword)VALUES('$_POST[fname]','$_POST[designation]','$_POST[uname]','$_POST[password]','$_POST[confirmpassword]')";
if(!mysql_query($sql,$con))
{
    die('error:'.mysql_error());
}
echo "1 record inserted";
mysql_close($con)
?>