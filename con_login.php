<?php
session_start();


$connect = mysqli_connect("localhost","root","","hostel_management") or die(mysqli_error($connect));
if($connect)
{
//echo "Database Connected Successfully....!";
}
else
{
echo "Error";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
        </script>
</head>
<body>
<div class="panel panel-warning">
<div class="panel-heading"><h1 align="center">Login</h1></div>
<div class="panel-body">
<form method="post">
<div class="form-group" >
<label ><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required class="form-control">
</div>
<div class="form-group">
 <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required class="form-control">
</div>
<div class="form-group" align="center" class="row">
<button name="login"  class="btn btn-success" class="form-control">Login</button>
<a href="student.php"> <button type="button" class="btn btn-danger" class="form-control">Back</button></a>
</div>
</form>
</div></div>
</body>
</html>
<?php
if(isset($_POST['login']))
{
extract($_POST);

$uname=mysqli_real_escape_string($connect,$_POST['uname']);
$psw=mysqli_real_escape_string($connect,$_POST['psw']);

$log=mysqli_query($connect,"select username,password from student_detail where username='$uname' and password='$psw'") or die (mysqli_error($connect));

if(mysqli_num_rows($log)>0)
{

$fetch=mysqli_fetch_array($log);

$_SESSION['id']=$fetch['id'];
$_SESSION['uname']=$fetch['username'];
$_SESSION['psw']=$fetch['password'];

echo "<script>";
echo "alert('Login successfully..');";
echo 'window.location.href="con_view.php";';
echo "</script>";
}
else
{
echo "<script>";
echo "alert('Login Failed');";
echo "</script>";
}
}
?>

