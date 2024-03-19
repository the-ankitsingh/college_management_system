<?php
$uid = $_POST["t1"];
$pass = $_POST["t2"];
mysql_connect("localhost","root") or die ("not connect");
mysql_select_db("college2") or die ("wrong database");
$sql = " select * from register where username='$uid' and password='$pass'";
$result = mysql_query($sql);
$no = mysql_num_rows($result);
if($no>=1)
{
    session_start();
    $_SESSION["S2"]=$uid;
    include("login.php");
}
else
{
    session_start();
    $a=1;
    $_SESSION["S1"]=$a;
    include("loogin.php");
}
?>