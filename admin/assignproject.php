<?php
include"common.php";
include"connect.php";
?>


<html>
    <center>
<form action="assignproject.php" action="get">
<table border=1 align="center" cellpadding=10>
    <tr>
        <td>Enter Employee id
        <td><input type="text" name="t1">
    <tr>
        <td>Select Project
        <td><select name='t2'><option>Project 1<option>Project 2<option>Project 3<option>Project 4<option>Project 5</select>
    <tr>
        <td>Project start date
        <td><input type="date" name="t3">
    <tr>
        <td colspan=2 align="center"><input type="submit" value="assign" name='btn'>

</table>
</form>
</html>



<?php
if(isset($_GET['btn']))
{
    $project=$_GET["t2"];
    $id=$_GET["t1"];
    $date=$_GET["t3"];
    $s="select * from employee where eid=$id";
    $rs=mysqli_query($con,$s);
    $c=mysqli_num_rows($rs);

    if($c==0)
    echo"<script>alert('Employee not found')</script>";
    else
    {
        echo"<table align='center' border=1 cellpadding=10>";

        while($r=mysqli_fetch_array($rs))
        {
            $id=$r[0];
            $ename=$r[2];
            //echo"<tr><td>Employee Name is <td>".$r[2];
            // echo"<tr><td>Project assigned <td>".$project;
            $s = "insert into project values($id,'$ename','$project','$date')";
            mysqli_query($con,$s);
            echo"<script>alert('Project assigned');</script>";

            //session_start();
            //$_SESSION["id"]=$id;
            //$_SESSION["name"]=$ename;
            //$_SESSION["project"]=$project;
        }
       
    }
}
?>

