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
    <div class="panel-heading">
      <h1 align="center">Already Registered Rooms</h1>
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
                
      </div>
      <div class="col-sm-4">
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
    $total_records=mysqli_num_rows($view1);
     echo "<h3>Number of Total Rooms : 6</h3>";
    echo "<h3>No. of Booked Seats :".$total_records."/12</h3>";
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
        <th>Fees paid</th>        
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
 
</body>
</html>
