<?php
include "common.php";
include "connect.php";
session_start();
$eid=$_SESSION["eid"];

if(isset($_GET['btn']))
{
    $name=$_GET["t1"];
    $from=$_GET["t2"];
    $upto=$_GET["t3"];

    $s="insert into leave1(eid,reason,leavefrom,leaveupto) values($eid,'$name','$from','$upto')";
    mysqli_query($con,$s);

    //session_start();
    //$_SESSION["id"]=$eid;

    echo"<script>alert('Leave Requested')</script>";
}
?>

<!DOCTYPE html>
<body>
<form action="applyleave.php" method="get">
    <center><h1>APPLY LEAVE HERE!</h1></center>

    <table border=1 cellpadding=10 align="center">
        <tr>
            <td>Your ID
            <td><input type="text" value="<?php echo $eid?>"disabled>
        <tr>
            <td>Enter Your Reason
            <td><input type="text" name="t1">
        <tr>
            <td>Leave from
            <td><input type="date" name="t2">
        <tr>
            <td>Leave upto
            <td><input type="date" name="t3">
        <tr>
            <td colspan=2 align="center"><input type="submit" name="btn" value="apply">
    </table>
</form>
</html>