<?php

$connect = mysqli_connect("localhost","root","","hostel_management") or die(mysqli_error($connect));
		if($connect)
		{
		//echo "Database Connected Successfully....!";
		}
		else
		{
		echo "Error";
		}

if (isset($_GET['id']))
{
$sel=mysqli_query($connect,"select * from rooms where id='".$_GET['id']."' ");

$delete = mysqli_query($connect,"delete from rooms where id='".$_GET['id']."'");
if ($delete)
{
echo "<script>;";
echo "alert('Registration record delete....!');";
echo 'window.location.href = "Types_of_rooms_view.php";';
echo "</script>;";
}
else
{
echo "<script>;";
echo "alert('registration data error....!');";
echo 'window.location.href = "Types_of_rooms_view.php";';
echo "</script>;";
}
}
?>