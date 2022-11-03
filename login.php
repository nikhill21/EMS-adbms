<?php
if(isset($_GET['btn1']))
{
header("location:admin/login.php");
}
if(isset($_GET['btn2']))
{
    header("location:employee/login.php");
}
?>

<html>
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
</style>
</head>
<body class="vh-100 gradient-custom">
<form action="login.php" method="get">
    <table border=1 align="center">
        <tr>
                <td colspan=2 align="center"><h3>Choose your Login preference
        <tr>
            <td><input type="submit" name="btn1" value="Admin">
            <td><input type="submit" name="btn2" value="Employee">
</tr>
</table>
</form>
</body>
</html>