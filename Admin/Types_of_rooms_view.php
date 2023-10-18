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
      Registered Students view
    </div>
    

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

    $view1 = mysqli_query($connect,"select * from rooms order by id asc") or die(mysqli_error($connect));
    //$total_records=mysqli_num_rows($view1);
    //echo $total_records;
  ?>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <table id="datatable" class="table table-striped table-bordered">

        <thead>
        <tr>
        
        <th>Sr No.</th>
        <th>Name</th>
        <th>Room No</th>
        <th>Bed No.</th>
        <th>Fees Paid</th>
        <th>Action</th>
        <th>Status</th>

       
        </tr>
        </thead>

        <tbody>
        <?php
        $counter = 0;
        while ($row = mysqli_fetch_array($view1)) 
        {
        extract($row);
        ?>
        <tr>

        <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Room_no']; ?></td>
        <td><?php echo $row['Bed_no']; ?></td>
        <td><?php echo $row['Fees']; ?></td>
        
        <td>
        <a class="text-success" onClick="return confirm('Are you sure you want to update this registration details ?);" href="update.php?id=<?php echo $id;?>" title="Update registration details"><i class="glyphicon glyphicon-edit"></i></a>
        <a class="text-danger" onClick="return confirm('Are you sure you want to delete this registration details ?);" href="delete.php?id=<?php echo $id;?>" title="Delete registration details"><i class="glyphicon glyphicon-trash"></i></a>
        </td>
        </tr>
        <?php
        }
        ?>
        </tbody>

        </table>
 
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
