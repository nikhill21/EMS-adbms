<?php
include "common.php";
include "connect.php";

session_start();
$eid=$_SESSION["eid"];

$s="select * from project where eid=$eid";
$rs=mysqli_query($con,$s);

echo"<table border=1 align='center' cellpadding=10>";
echo"<tr><td>Employee Id<td>Project name<td>Project Start Date";
while($r=mysqli_fetch_array($rs))
{
    echo"<tr>";
    echo"<td>".$r[0];
    echo"<td>".$r[2];
    echo"<td>".$r[3];
}
?>