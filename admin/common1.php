
<!DOCTYPE html>
<head>
    <title>ADMIN PANEL</title>
</head>
<body>
    <h1 style="text-align:center;">Admin</h1>
    <hr>
    <br>
    <table width=100%>
        <tr>
            <td><a href="home.php">HOME</a></td>
            <td><a href="new_employee.php">New Employee</a></td>
            <td><a href="displayallemployee.php">Display All Employee</a></td>
            <td><a href="searchemployee.php">Search</a></td>
            <td><a href="assignproject.php">Assign Project</a></td>
            <td><a href="projectdetail.php">Assigned Project</a></td>
            <td><a href="approveleave.php">Approve leave</a></td>
            <td><a href="logout.php">LOGOUT</a>
        </tr>
    </table>
<hr>
</body>
</html>



<!-- admin login -->
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
table,th,td{
    padding:10px;
    border:1px solid black;
    margin:auto;
    margin-top:300px;
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
<body>
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

<!-- common of employee-->
<!DOCTYPE html>
<head>
    <title>Employee</title>
</head>
<body>
    <h1 style="text-align:center;">Employee</h1>
    <hr>
    <br>
    <table width=100%>
        <tr>
            <td><a href="home.php">HOME</a></td>
            <td><a href="yourdetails.php">Your Details</a></td>
            <td><a href="yourproject.php">Your Project</a></td>
            <td><a href="applyleave.php">Apply Leave</a></td>
            <td><a href="leavestatus.php">Leave Status</a></td>
            <td><a href="logout.php">LOGOUT</a></td>
        </tr>
    </table>
<hr>
</body>
</html>