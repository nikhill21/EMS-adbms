<?php
include"common.php";
include"connect.php";
?>


<html>
    <center>
<form action="searchemployee.php" action="get">
<table align="center" cellpadding=10>
    <tr>
        <td>Enter Employee id
        <td><input type="text" name="t1">
    <tr>
        <td colspan=2 align="center"><input type="submit" value="search" name='btn'>
</table>
</form>
</html>



<?php
if(isset($_GET['btn']))
{
    $id=$_GET["t1"];

    $s="select * from employee where eid=$id";
    $rs=mysqli_query($con,$s);
    $c=mysqli_num_rows($rs);
    if($c==0)
    echo"<script>alert('No employee found');</script>";
    else
    {
        echo"<table align='center' border=1 cellpadding=10>";
        
        while($r=mysqli_fetch_array($rs))
        {
            echo"<tr><td>Employee Id<td>".$r[0];
            echo"<tr><td>Employee Name is <td>".$r[2];
            echo"<tr><td>Employee Email<td>".$r[3];
            echo"<tr><td>Employee Degree<td>".$r[4];
            echo"<tr><td>Employee Address<td>".$r[5];
            echo"<tr><td>Employee Gender<td>".$r[6];
        }
        echo"</table>";
    }
}
?>

