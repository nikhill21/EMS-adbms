<?php
include"common.php";
include"connect.php";

$s="select eid from employee order by eid desc";
$rs=mysqli_query($con,$s);
$id=0;
while($r=mysqli_fetch_array($rs))
{
    $id=$r[0];
    break;
}
if($id==0)
$id="101";
else
$id=$r[0]+1;


$s="select epass from employee order by epass desc";
$rs=mysqli_query($con,$s);
$pass=0;
while($r=mysqli_fetch_array($rs))
{
    $pass=$r[0];
    break;
}
if($pass==0)
$pass="10001";
else
$pass=$r[0]+1;


// --------------------------------------

if(isset($_GET['btn']))
{
    $name=$_GET["t2"];
    $email=$_GET["t3"];
    $degree=$_GET["t4"];
    $address=$_GET["t5"];
    $gender=$_GET["t6"];

    

    
        $s="insert into employee values($id,$pass,'$name','$email','$degree','$address','$gender')";
        mysqli_query($con,$s);
        echo"<script>alert('Empolyee Addeds');</script>";
}
?>

<html>
<head>
    <style>
        
    </style>
</head>
<body>
<form action="new_employee.php" method="get">
<div class="table">
<table border=1 align="center">
    <tr>
        <td>Employee Id
        <td><input type="text" name="t1" value="<?php echo $id  ?>" disabled>
    <tr>
        <td>Employee name
        <td><input type="text" name="t2"> 
    <tr>
        <td>Employee Email
        <td><input type="email" name="t3"> 
    <tr>
        <td>Employee Degree
        <td><select name="t4">
            <option>BE
            <option>BTech
            <option>BCA
            <option>BBA
            <option>BED
            <option>other
            </select>
    <tr>
        <td>Employee Address
        <td><input type="text" name="t5">
    <tr>
        <td>Employee Gender
        <td><input type="radio" value="male" name="t6">MALE 
            <input type="radio" value="female" name="t6">FEMALE
    <tr>
        <br>
        <td colspan=2 align="center"><input type="submit" name="btn" value="ADD">
</table>
</div>
</form>
    </body>
</html>