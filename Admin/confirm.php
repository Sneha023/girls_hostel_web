<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>

<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
        </script>
</head>
<body>
<section id="container">
<?php include 'header.php'; ?>
<!--sidebar-->
<!--sidebar start-->
         <?php include 'sidebar.php'; ?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Room Confirmation Form
    </div>
    <div>
        <div class="panel-body">
        <form class="form-horizontal " name="myform" method="post"  id="myform" >
        <div class="form-group">
                         <div class="form-group ">

                                       <label  class="control-label col-lg-3">Student's Name</label>

                                        <div class="col-lg-6">
                                            <input class="form-control" name="name" type="text" placeholder="Enter your name here">
                                        </div>
                                    </div>
                    <div class="form-group">
                     <label class="control-label col-lg-3">Room No.</label>
                                        <div class="col-lg-6">
                                        <select name="roomno" required=" " class="form-control" class="validate[required]">
                                            <option value=" ">Select Room No.</option>
                                            <option value="101">101</option>
                                            <option value="102">102</option>
                                            <option value="103">103</option>
                                            <option value="104">104</option>
                                            <option value="105">105</option>
                                            <option value="106">106</option>


                                        </select>
                                    </div>
                    </div>
                        <div class="form-group">
                                                <label class="control-label col-lg-3">Bed No.</label>

                                                     <div class="col-lg-6">
                                        <select name="bedno" required=" " class="form-control" class="validate[required]">
                                            <option value=" ">Select Seat</option>
                                            <option value="1st Seat">1st Seat</option>
                                            <option value="2nd Seat">2nd Seat</option>
                                            

                                        </select>
                                    </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="control-label col-lg-3">Status</label>

                                                     <div class="col-lg-6">
                                        <select name="status" required=" " class="form-control" class="validate[required]">
                                            <option value=" ">Select Status</option>
                                            <option value="Confirm">Confirm</option>
                                            <option value="Reject">Reject</option>
                                            

                                        </select>
                                    </div>
                                            </div>
                        
                <div class="form-group">
                    <center>
                <button class="btn btn-success" name="submit">Confirm Room</button>
                </center>
                </div>
</form>

 </div>
</div>

       

    </div>
  </div>
</div>
</section>
 <!-- footer -->
		  <?php include 'footer.php'; ?>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
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

$asd = "insert into confirm_room(Name,Room_no,Bed_no,status) value('$name','$roomno','$bedno','$status')";

$add = mysqli_query($connect,$asd) or die(mysqli_error($connect));

if($asd)
{
echo "<script>;";
echo "window.alert('Data inserted successfully....!');";
echo 'window.location.href = "Types_of_rooms.php";';
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