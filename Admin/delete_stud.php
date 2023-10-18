
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
$sel=mysqli_query($connect,"select * from student_detail where id='".$_GET['id']."' ");

$delete = mysqli_query($connect,"delete from student_detail where id='".$_GET['id']."'");
if ($delete)
{
echo "<script>;";
echo "alert('Registration record delete....!');";
echo 'window.location.href = "view.php";';
echo "</script>;";
}
else
{
echo "<script>;";
echo "alert('registration data error....!');";
echo 'window.location.href = "view.php";';
echo "</script>;";
}
}
?>