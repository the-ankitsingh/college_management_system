<?php
$servername="localhost";
$username="root";
$password="";
$dbname="college2";
$link=mysqli_connect($servername,$username,$password,$dbname);
$con=mysqli_select_db($link,$dbname);

if($con)
{
    echo ("connection ok");
}
else
{
    die("connection failed because".mysql_connect_error());
}
?>
<html>
    <head><tittle><h1><center>Student marks Form <center></h1></tittle></head>
    <body bgcolor="#FCE77D">
        <div style="background-image:url('12.jpg');" height="40">>
        <center>
        <Form name="form1" action="" method="post">
            <table align="center" cellpadding="10">
                <tr>
                    <td>Enter a Roll :</td>
                    <td><input type="text" name="roll"></td>
</tr>
<tr>
    <td>Enter a Name :</td>
    <td><input type="text" name="name"></td>
</tr>
<tr>
    <td>1st mod: </td>
    <td><input type="text" name="marks1"></td>
</tr>
<tr>
    <td>2nd Mod: </td>
    <td><input type="text" name="marks2"></td>
</tr>
<tr>
    <td>3rd Mod: </td>
    <td><input type="text" name="marks3"></td>
</tr>
<tr>
    <td>4th Mod : </td>
    <td><input type="text" name="marks4"></td>
</tr>
<tr>
    <td>5th Mod : </td>
    <td><input type="text" name="marks5"></td>
</tr>
<tr>
    <td>Total: </td>
    <td><input type="text" name="total"></td>
</tr>
<tr>
    <td>Grade: </td>
    <td><input type="text" name="grade"></td>
</tr>
<td colspan="2" align="center">
    <input type="submit" name="submit1" value="insert">
    <input type="submit" name="submit2" value="delete">
    <input type="submit" name="submit3" value="update">
    <input type="submit" name="submit4" value="display">
    <input type="submit" name="submit5" value="search">
</td>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST["submit1"]))
{
    mysqli_query($link,"insert into marks1 values('$_POST[roll]','$_POST[name]','$_POST[marks1]','$_POST[marks2]','$_POST[marks3]','$_POST[marks4]','$_POST[marks5]','$_POST[total]','$_POST[grade]')");
    echo "Record inserted Successfully";
}
if(isset($_POST["submit2"]))
{
    mysqli_query($link,"delete from marks1 where roll='$_POST[roll]'");
    echo "Record deleted Succesfully";
}
if(isset($_POST["submit3"]))
{
    mysqli_query($link,"update marks1 set roll='$_POST[roll]' where name='$_POST[name]'");
    echo "Update sucessfully";
}
if(isset($_POST["submit4"]))
{
    $res=mysqli_query($link,"select * from marks1");
    echo "<table border=1>";
    echo"<tr>";
    echo"<th>"; echo"roll"; echo"</th>";
    echo"<th>"; echo"name"; echo"</th>";
    echo"<th>"; echo"marks1"; echo"</th>";
    echo"<th>"; echo"marks2"; echo"</th>";
    echo"<th>"; echo"marks3"; echo"</th>";
    echo"<th>"; echo"marks4"; echo"</th>";
    echo"<th>"; echo"marks5"; echo"</th>";
    echo"<th>"; echo"total"; echo"</th>";
    echo"<th>"; echo"grade"; echo"</th>";
    echo"</tr>";
while($row=mysqli_fetch_array($res))
{
    echo"<tr>";
    echo"<td>"; echo $row["roll"]; echo"</td>";
    echo"<td>"; echo $row["name"]; echo"</td>";
    echo"<td>"; echo $row["marks1"]; echo"</td>";
    echo"<td>"; echo $row["marks2"]; echo"</td>";
    echo"<td>"; echo $row["marks3"]; echo"</td>";
    echo"<td>"; echo $row["marks4"]; echo"</td>";
    echo"<td>"; echo $row["marks5"]; echo"</td>";
    echo"<td>"; echo $row["total"]; echo"</td>";
    echo"<td>"; echo $row["grade"]; echo"</td>";
    echo"</tr>";
}
echo"</table>";
}
if(isset($_POST["submit5"]))
{
    $res=mysqli_query($link,"select * from marks1 where roll='$_POST[roll]'");
    echo "<table border=1>";
    echo"<tr>";
    echo"<th>"; echo"roll"; echo"</th>";
    echo"<th>"; echo"name"; echo"</th>";
    echo"<th>"; echo"marks1"; echo"</th>";
    echo"<th>"; echo"marks2"; echo"</th>";
    echo"<th>"; echo"marks3"; echo"</th>";
    echo"<th>"; echo"marks4"; echo"</th>";
    echo"<th>"; echo"marks5"; echo"</th>";
    echo"<th>"; echo"total"; echo"</th>";
    echo"<th>"; echo"grade"; echo"</th>";
    echo"</tr>";
    while($row=mysqli_fetch_array($res))
    {
        echo"<td>"; echo $row["roll"]; echo"</td>";
        echo"<td>"; echo $row["name"]; echo"</td>";
        echo"<td>"; echo $row["marks1"]; echo"</td>";
        echo"<td>"; echo $row["marks2"]; echo"</td>";
        echo"<td>"; echo $row["marks3"]; echo"</td>";
        echo"<td>"; echo $row["marks4"]; echo"</td>";
        echo"<td>"; echo $row["marks5"]; echo"</td>";
        echo"<td>"; echo $row["total"]; echo"</td>";
        echo"<td>"; echo $row["grade"]; echo"</td>";
        echo"</tr>";
    }
    echo "</table>";
}
?>


