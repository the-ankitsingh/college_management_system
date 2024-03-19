<?php
$servername="localhost";
$username="root";
$password="";
$dbname="college2";
$link=mysql_connect($servername,$username,$password,$dbname);
$con=mysql_select_db($link,$dbname);

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
    <head><tittle>Student Register Form </tittle></head>
    <body>
        <Form name="form1" action="" method="post">
            <table>
                <tr>
                    <td>Enter a Name :</td>
                    <td><input type="text" name="username"></td>
</tr>
<tr>
    <td>course: <select name="course">
                        <option></option>
                        <option>Admin</option>
                        <option>student</option>
                        <option>CCPA </option>
                        <option>CSE</option>
                        <option>CCA</option>
                        <option>CACAPA</option>
                       </select><br></td>
</tr>
<tr>
    <td>Batch Name: </td>
    <td><input type="text" name="batch"></td>
</tr>
<tr>
    <td>Roll: </td>
    <td><input type="text" name="roll"></td>
</tr>
<tr>
    <td>Addres : </td>
    <td><input type="text" name="address"></td>
</tr>
<tr>
    <td>email : </td>
    <td><input type="email" name="email"></td>
</tr>
<tr>
    <td>Phone Number: </td>
    <td><input type="text" name="phone"></td>
</tr>
<tr>
    <td>Date time piker: </td>
    <td><input type="text" name="date"></td>
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
    mysql_query($link,"insert into studentregister('$_POST[username]','$_POST[course]','$_POST[batch]','$_POST[roll]','$_POST[address]','$_POST[email]','$_POST[phone]','$_POST[date]')");
    echo "Record inserted Successfully";
}
if(isset($_POST["submit2"]))
{
    mysql_query($link,"delete from studentregister where username='$_POST[username]");
    echo "Record deleted Succesfully";
}
if(isset($_POST["submit3"]))
{
    mysql_query($link,"update studentregister set username='$_POST[roll]' where username='$_POST[username]'");
}
if(isset($_POST["submit4"]))
{
    $res=mysql_query($link,"select * from studentregister");
    echo "<table border=1>";
    echo"<tr>";
    echo"<th>"; echo"name"; echo"</th>";
    echo"<th>"; echo"course"; echo"</th>";
    echo"<th>"; echo"batch"; echo"</th>";
    echo"<th>"; echo"roll"; echo"</th>";
    echo"<th>"; echo"address"; echo"</th>";
    echo"<th>"; echo"email"; echo"</th>";
    echo"<th>"; echo"phone"; echo"</th>";
    echo"<th>"; echo"date"; echo"</th>";
    echo"</tr>";
while($row=mysql_fetch_array($res))
{
    echo"<tr>";
    echo"<td>"; echo $row["username"]; echo"</td>";
    echo"<td>"; echo $row["course"]; echo"</td>";
    echo"<td>"; echo $row["batch"]; echo"</td>";
    echo"<td>"; echo $row["roll"]; echo"</td>";
    echo"<td>"; echo $row["address"]; echo"</td>";
    echo"<td>"; echo $row["email"]; echo"</td>";
    echo"<td>"; echo $row["phone"]; echo"</td>";
    echo"<td>"; echo $row["date"]; echo"</td>";
    echo"</tr>";
}
echo"</table>";
}
?>


