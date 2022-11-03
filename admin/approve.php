<?php
include "common.php";
include "connect.php";


$s = "select * from employee";
$rs = mysqli_query($con,$s);
while($r=mysqli_fetch_array($rs))
{
    $eid=$r[0];
    $s = "update leave1 set status='Approved'";
    mysqli_query($con,$s);
    header("location:approveleave.php");
}
?>