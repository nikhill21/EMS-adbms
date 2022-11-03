<?php

include "common.php";
include "connect.php";

session_start();
$eid=$_SESSION["eid"];

echo"<center><h1>YOUR LEAVE!</h1></center>";

$s="select * from leave1 where eid=$eid";
$rs=mysqli_query($con,$s);

echo"<table border=1 align='center' cellpadding=10>";
echo"<tr><td>Your ID<td>Your Name<td>Leave From<td>Leave UPTO<td>STATUS";
while($r=mysqli_fetch_array($rs))
{
    echo"<tr>";
    echo"<td>".$eid;
    echo"<td>".$r[1];
    echo"<td>".$r[2];
    echo"<td>".$r[3];
    if($r[4]=='Approved')
        echo"<td>Approved";
    else if($r[4]=='Rejected')
        echo"<td>Rejected";
    else
        echo"<td>Waiting for review";
}
?>