<?php session_start();
  include'connect.php';
 ?>
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Basic_table :: w3layouts</title>
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
</head>
<body>
<section id="container">
<!--header start-->
<?php include 'header.php'; ?>
<!--header end-->
<!--sidebar start-->
<?php include 'sidebar.php'; ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      1st Year Students Record
          </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <!--<select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>-->         
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
       <!-- <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>-->
      </div>
    </div>
    <?php
$view = mysqli_query($connect,"select * from student_detail") or die(mysqli_error($connect));
?>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Sr.No</th>
             <th>First name</th>
            <th>Last name</th>
            <th>City</th>
            <th>Personal contact </th>
            <th>class</th>
            <th>Course</th>
            <th>Rollno.</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Username</th>
            <th>Action</th>        
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php
$counter = 0;
while ($row = mysqli_fetch_array($view)) {

extract($row);
?>
<tr>
<td><?php echo ++$counter; ?></td>
<td><?php echo $row['stud_firstname']; ?></td>
<td><?php echo $row['stud_lastname']; ?></td>
<td><?php echo $row['city']; ?></td>
<td><?php echo $row['per_contact']; ?></td>
<td><?php echo $row['class']; ?></td>
<td><?php echo $row['course']; ?></td>
<td><?php echo $row['rollno']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['username']; ?></td>

<td>
<a class="text-success" onClick="return confirm('Are you sure you want to update this registration details ?);" href="stud_update.php?stud_id=<?php echo $id;?>" title="Update registration details"><i class="fa fa-edit"></i></a>

<a class="text-danger" onClick="return confirm('Are you sure you want to delete this registration details ?);"
href="delete_stud.php?id=<?php echo $id;?>"
title="Delete registration details"><i class="fa fa-trash-o"></i></a>
</td>
</tr>
<?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
<!-- footer -->
         <<?php include 'footer.php'; ?>
  <!-- / footer -->
</section>-->

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
