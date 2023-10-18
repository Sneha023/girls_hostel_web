<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Select room</title>
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
		</script>

</head>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
					<div class="panel-heading"><h3 class="title" align="center">Select a Room</h3></div>
					 <!-- col -->
</div>
</div>
					
						<table class="table table-striped table-bordered" width="200" height="200">
        <tbody>
        	<tr>
        	<td>
        		<form method="post">
        			<button class="btn btn-md btn-info" type="button" name="submit">102</button>
				</form>
        	</td>    
        	<td><button class="btn btn-md btn-info" type="button"><a href="form.php">101</a></button></td>
        	<td><button class="btn btn-md btn-info" type="button"><a href="form.php">103</a></button></td>
        </tr>
        <tr>
        	<td><button class="btn btn-md btn-info" type="button"><a href="form.php">104</a></button></td>
        	<td><button class="btn btn-md btn-info" type="button"><a href="form.php">105</a></button></td>
        	<td><button class="btn btn-md btn-info" type="button"><a href="form.php">106</a></button></td>
        </tr>
        </tbody>
    </table>

</body>
</html>
<?php

				$connect = mysqli_connect("localhost","root","","microproject") or die(mysqli_error($connect));
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

				$asd = mysqli_query($connect,"select status from rooms where Room_no='101' and Type='3-bed' or Type='2-bed'") or die (mysqli_error($connect));


				$add = mysqli_query($connect,$asd) or die(mysqli_error($connect));

				if($asd)
				{
					echo "<script>;";
					echo "window.alert('This room is already booked');";
					echo "</script>";
				}
				else
				{
					echo "<script>;";
					//echo "window.alert('Data inserted successfully....!');";
					echo 'window.location.href = "form.php";';
					echo "</script>";
				}
				}
				?>
				"SELECT status FROM rooms WHERE Room_no='101'";


