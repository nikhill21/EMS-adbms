<?php
if(isset($_GET['btn1']))
{
include"connect.php";
$id="";
$pass="";
$id=$_GET["t1"];
$pass=$_GET["t2"];

$s="select * from login where id='$id' and pass='$pass' ";
$rs=mysqli_query($con,$s);
$c=mysqli_num_rows($rs);

if($c==0)
echo"<script>alert('Invalid Id or pass');</script>";
else
    header("location:home.php");
}

if(isset($_GET['btn2']))
{
    header("location:../login.php");
}
?>
<!DOCTYPE html>
<head>
<title>LOGIN HERE!</title>
<style>
table,tr,td{
    padding:10px;
    border:1px solid black;
    margin:auto;
    margin-top:300px;
    background: rgba(0, 5, 0, 0.6);
    color:white;
}

.button{
    margin:auto;
}
.gradient-custom {
/* fallback for old browsers */
background: #6a11cb;
/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
}
</style>
</head>
<body class="vh-100 gradient-custom">
<form action="login.php" method="get">
<table>
    <tr>
        <td colspan=2 align="center"><h3>ADMIN LOGIN</h3>
    <tr>
        <td>Enter UserName</td>
        <td><input type="text" name="t1"></td>
    </tr>
    <tr>
        <td>Enter Password</td>
        <td><input type="password" name="t2"></td>
    </tr>
    <div class="button">
    <tr>
        <td>
         <td><input type="submit" value="login" name="btn1">
            <input type="submit" value="back" name="btn2">  
</tr>
</div>
</table>
</body>
</html>