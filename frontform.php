<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Registration Form</title>

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
					<div class="panel-heading"><h2 class="title" align="center">Registration Form</h2>
						
					</div>
					<div class="panel-body">
					<div class=" form">
					 <form class="cmxform form-horizontal " name="myform" id="formID" method="post" novalidate="novalidate" enctype="multipart/form-data"  onsubmit="return validateform()" >
                                    <div class="form-group ">

                                       <label  class="control-label col-lg-3">Student Firstname</label>

                                        <div class="col-lg-6">
                                            <input class=" form-control" id="firstname" name="firstname" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Student Lastname</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="lastname" name="lastname" type="text">
                                        </div>
                                    </div> 
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Parent's name</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="Parent" name="parent" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Address</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="Address" name="address" type="Address">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">State</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="State" name="state" type="State">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">City</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="City" name="city" type="City">
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label class="control-label col-lg-3">Personal Contact No.</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="Contact" name="contact" type="Contact">
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label class="control-label col-lg-3">Parent's Contact No.</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="Contact" name="contactno" type="Contactno">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-lg-3 control-label">Class</label>
                                    <div class="col-lg-6">
                                     
                                    <input type="radio" name="class" id="class" value="1st Year" checked="">1st Year
                                
                                 
                                    <input type="radio" name="class" id="class" value="2nd Year" checked="">2nd Year
                                
                                 
                                    <input type="radio" name="class" id="class" value="3rd Year" checked="">3rd Year
                                
                                    </div>
                                </div>
                                  
                                   
                                    <div class="form-group">
                                    <label class="col-lg-3 control-label">Course</label>
                                    <div class="col-lg-6">
                                    <select name="Branch" class="form-control" required="required">
                                    <option value="">Select course</option>
                                    <option value="computer">Computer</option>
                                    <option value="mechanical">Mechanical</option>
                                    <option value="civil">Civil</option>
                                     <option value="electronics">Electronics</option>
                                    </select>
                                    </div>
                                </div>
                                  
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Roll No.</label>
                                        <div class="col-md-6  form-group">
                                <input type="text" class="form-control" name="rollno">
                                      </div>
                                    </div>
                                    

                                    <div class="form-group ">
                                    <label  class="control-label col-lg-3">Date of Birth:</label>
                                    <div class="col-lg-6">
                                    <input type="date" id="start" name="dob" value= "min=1995-01-01 max=2005-12-31">
                                    </div></div>

                                    <div class="form-group">
                                    <label class="control-label col-lg-3">Photo</label>
                                    <div class="col-lg-6">
                                      <img id="preview_img" src="image/No-image-full.jpeg" height="100" width="100"/>
                                       <input type="file" id="image" class="fileinput" name="photo" accept=" .png, .jpg, .jpeg">
                                    
                                </div></div>

                                     <div class="form-group ">
                                        <label class="control-label col-lg-3">Email</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="email" name="email" type="email">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Username</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="username" name="username" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Password</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="password" name="password" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="confirm_password" class="control-label col-lg-3">Confirm Password</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="confirm_password" name="confirm_password" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-5 col-lg-10">
                                <button class="btn btn-success" name="submit" type="submit">Submit</button>
                                <a href="student.php"><button class="btn btn-success" name="back" type="button">Back</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>




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

include 'connect.php';


if(isset($_POST['submit']))
    {

    
    extract($_POST);

        $pname=$_FILES['photo']['name']; 
         $type=$_FILES['photo']['type'];
         $size=$_FILES['photo']['size']; 
         $temp=$_FILES['photo']['tmp_name']; 
         if($pname)
         {
         
         $upload= "image/"; 
         $imgExt=strtolower(pathinfo($pname, PATHINFO_EXTENSION)); 
         $valid_ext= array('jpg','png','jpeg' ); 
         $photo= rand(1000,1000000).".".$imgExt; 
         move_uploaded_file($temp,$upload.$photo); 
         }
       
        

    $asd ="insert into student_detail(stud_firstname,stud_lastname,Parent_name,address,state,city,per_contact,pra_contact,class,course,rollno,dob,photo,email,username,password,confirm_pass) 
    values('$firstname','$lastname','$parent','$address','$state','$city','$contact','$contactno','$class','$Branch','$rollno','$dob','$photo','$email','$username','$password','$confirm_password')";

    

        $add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
        if($asd)
        {
        echo "<script>;";
        echo "window.alert('Data insert successfully....!');";
        //echo 'window.location.href = "view.php";';
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
