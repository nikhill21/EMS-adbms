<?php
include "common.php";
include "connect.php";

session_start();
$eid=$_SESSION["eid"];
$s = "select * from employee where eid=$eid";
$rs=mysqli_query($con,$s);

echo"<table border=1 align='center' cellpadding=10>";
while($r=mysqli_fetch_array($rs))
{
    echo"<tr><td>Your ID<td>".$r[0];
    echo"<tr><td>Your Name<td>".$r[2];
    echo"<tr><td>Your Email<td>".$r[3];
    echo"<tr><td>Your Degree<td>".$r[4];
    echo"<tr><td>Your Address<td>".$r[5];
    echo"<tr><td>Your Gender<td>".$r[6];
}
echo"</table>";
?>