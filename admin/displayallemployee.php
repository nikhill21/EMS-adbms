<?php
include"common.php";
include"connect.php";

$s="select * from employee";
$rs=mysqli_query($con,$s);

echo"<center><table border=1 cellpadding=10>";
echo"<tr><td>Employee Id<td>Employee Name<td>Employee Email<td>Employee Degree<td>Employee Address<td>Employee Gender";
while($r=mysqli_fetch_array($rs))
{
    echo"<tr>";
    echo"<td>".$r[0];
    echo"<td>".$r[2];
    echo"<td>".$r[3];
    echo"<td>".$r[4];
    echo"<td>".$r[5];
    echo"<td>".$r[6];
}
?>