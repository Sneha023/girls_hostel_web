 <<!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title>Room Registration Form</title>
     <link rel="stylesheet" href="jQuery-Validation-Engine-3.0.0/css/validationEngine.jquery.css" type="text/css"/>
    <link rel="stylesheet" href="jQuery-Validation-Engine-3.0.0/css/template.css" type="text/css"/>
    <script src="jQuery-Validation-Engine-3.0.0/js/jquery-3.4.1.min.js" type="text/javascript">
    </script>
    <script src="jQuery-Validation-Engine-3.0.0/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
    </script>
    <script src="jQuery-Validation-Engine-3.0.0/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
    </script>
    <script>
        jQuery(document).ready( function() {
            // binds form submission and fields to the validation engine
            jQuery("#myform").validationEngine();
        });
    </script>
     <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
        </script>
 </head>
 <body>
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

        if($_GET['id'])
        {
        $update = mysqli_query($connect,"select * from rooms where id='".$_GET['id']."'") or die(mysqli_error($connect));
        $row = mysqli_fetch_array($update);
        }
?>

<div class="panel panel-info" >
<div class="panel-heading"><center>Update Registration Form Of Room</center></div>
<div class="panel-body">
<form class="form-horizontal " name="myform" method="post"  id="myform" >
<div class="form-group">
<label class="control-label col-lg-3">Types of rooms</label>
                    <div class="col-lg-6">
                    <select name="tor" required class="form-control" class="validate[required]">
                        <option value=" ">Select Type of Room</option>
                        <option value="2-bed">2-Bed Sharing Rooms</option>
                        <option value="3-bed">3-Bed Sharing Rooms</option>
                        

                    </select>
                </div>
            </div>
<div class="form-group">
 <label class="control-label col-lg-3">Room No.</label>
                    <div class="col-lg-6">
                    <select name="roomno" required class="form-control" class="validate[required]">
                        <option value=" ">Select Room No.</option>
                        <option value="1">101</option>
                        <option value="2">102</option>
                        <option value="3">103</option>
                        <option value="4">104</option>
                        <option value="5">105</option>
                        <option value="6">106</option>


                    </select>
                </div>
</div>

<div class="form-group">
    <center>
<button class="btn btn-success" name="submit">Submit</button>
<button class="btn btn-danger" ><a href="formlogin.php" style="color:white;">Back</a></button>
</center>
</div>
</form>
</div></div>
<div class="col-md-4"></div>
</div>
</div>
  
 </body>
 </html>
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


if(isset($_POST['submit']))

{
extract($_POST);

$asd = "insert into rooms(Type,Room_no) value('$tor','$roomno')";

$add = mysqli_query($connect,$asd) or die(mysqli_error($connect));

if($asd)
{
echo "<script>;";
echo "window.alert('Data inserted successfully....!');";
echo 'window.location.href = "about.php";';
echo "</script>";
}
else
{
echo "<script>;";
echo "window.alert('Data error....!');";
echo "</script>";
}

}
?>



