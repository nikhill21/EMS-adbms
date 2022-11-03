<?php

include "common.php";
include "connect.php";

$s = "select * from project";
$rs = mysqli_query($con,$s);

echo "<table border=1 align='center' cellpadding=10>";
echo "<tr><td>Employee ID<td>Employee name<td>Project Name<td>Project Start Date";

while($r = mysqli_fetch_array($rs))
{
    echo"<tr>";
    echo"<td>".$r[0];
    echo"<td>".$r[1];
    echo"<td>".$r[2];
    echo"<td>".$r[3];
}
?>