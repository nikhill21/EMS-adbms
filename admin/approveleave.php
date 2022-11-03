<?php
include "common.php";
include "connect.php";

$s="select * from leave1";
$rs=mysqli_query($con,$s);

echo"<table border=1 align='center' cellpadding=10>";
echo"<tr><td>Your ID <td>Your Name <td>Leave From <td>Leave UPTO <td>STATUS";
while($r=mysqli_fetch_array($rs))
{
    echo"<tr>";
    echo"<td> ".$r[0];
    echo"<td> ".$r[1];
    echo"<td> ".$r[2];
    echo"<td> ".$r[3];
    if($r[4]=='Approved')
        echo"<td>Approved";
    else if($r[4]=='Rejected')
        echo"<td>Rejected";
    else
        echo"<td><ul><li><a href='approve.php'><img src='approve.png' width='20px'>Approve</a><br><li><a href='reject.php'><img src='reject.png' width='20px'>Reject</a>";
}
?>