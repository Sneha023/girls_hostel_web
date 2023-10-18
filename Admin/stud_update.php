<?php 

    include 'connect.php';

?>


<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Form_validation :: w3layouts</title>
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
<style>
 .form_box{width:500px; margin:0 auto; margin-top:10px; marginbottom: 40px; text-align: left;}
 .fileinput{margin-left:0px;}
 .preview_box{clear: both; padding: 5px; margin-top: 10px; textalign:left;}
 .preview_box img{max-width: 150px; max-height: 150px;}
</style>
</head>
<body>
<section id="container">

<!--header end-->

<!--main content start-->

        <?php
        
            $ID = $_GET['stud_id'];

            $query = "select * from student_detail where id = '$ID'";
            $result = mysqli_query($connect, $query) or die($connect);

            $row = mysqli_fetch_array($result);
            extract($row);
        
        ?>
		<div class="form-w3layouts">
           
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           <h2> Hostel Registration Form</h2>
                        </header>
                        <div class="panel-body">
                            <div class="form">

                                <form class="cmxform form-horizontal " name="myform" id="formID" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                    <div class="form-group ">

                                       <label  class="control-label col-lg-3">Student Firstname</label>

                                        <div class="col-lg-6">
                                            <input class=" form-control" id="firstname" name="firstname" type="text" value = "<?php echo $row['stud_firstname'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Student Lastname</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="lastname" name="lastname" type="text" value = "<?php echo $row['stud_lastname'];?>">
                                        </div>
                                    </div> 
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Parent's name</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="Parent" name="parent" type="text" value = "<?php echo $row['Parent_name'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Address</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="Address" name="address" type="Address" value = "<?php echo $row['address'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">State</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="State" name="state" type="State" value = "<?php echo $row['state'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">City</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="City" name="city" type="City" value = "<?php echo $row['city'];?>">
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label class="control-label col-lg-3">Personal Contact No.</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="Contact" name="contact" type="Contact" value = "<?php echo $row['per_contact'];?>">
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label class="control-label col-lg-3">Parent's Contact No.</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="Contact" name="contactno" type="Contactno" value = "<?php echo $row['pra_contact'];?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-lg-3 control-label">Class</label>
                                    <div class="col-lg-6">
                                     <?PHP if($row['class'] == '1st Year'){?>
                                        <input type="radio" name="class" id="class" value="1st Year" checked>1st Year
                                    
                                    
                                        <input type="radio" name="class" id="class" value="2nd Year">2nd Year
                                    
                                    
                                        <input type="radio" name="class" id="class" value="3rd Year">3rd Year
                                     <?php } else if($row['class'] == '2nd Year'){?>
                                        <input type="radio" name="class" id="class" value="1st Year">1st Year
                                    
                                    
                                        <input type="radio" name="class" id="class" value="2nd Year" checked>2nd Year
                                
                                
                                        <input type="radio" name="class" id="class" value="3rd Year">3rd Year
                                    <?php } else{?>
                                        <input type="radio" name="class" id="class" value="1st Year">1st Year
                                    
                                    
                                    <input type="radio" name="class" id="class" value="2nd Year">2nd Year
                            
                            
                                    <input type="radio" name="class" id="class" value="3rd Year" checked>3rd Year
                                    <?php }?>
                                    </div>
                                </div>
                                  
                                   
                                    <div class="form-group">
                                    <label class="col-lg-3 control-label">Course</label>
                                    <div class="col-lg-6">
                                    <select name="Branch" class="form-control" required="required">
                                    <option value="">Select course</option>
                                    <?php 

                                        if($row['course'] == 'computer')
                                        {

                                    ?>
                                        <option value="computer" selected>Computer</option>
                                        <option value="mechanical">Mechanical</option>
                                        <option value="civil">Civil</option>
                                        <option value="electronics">Electronics</option>

                                    <?php } else if($row['course'] == 'mechanical'){?>
                                        <option value="computer">Computer</option>
                                        <option value="mechanical" selected>Mechanical</option>
                                        <option value="civil">Civil</option>
                                        <option value="electronics">Electronics</option>

                                    <?php } else if($row['course'] == 'civil'){?>
                                        <option value="computer">Computer</option>
                                        <option value="mechanical">Mechanical</option>
                                        <option value="civil" selected>Civil</option>
                                        <option value="electronics">Electronics</option>

                                    <?php } else{?>
                                        <option value="computer">Computer</option>
                                        <option value="mechanical">Mechanical</option>
                                        <option value="civil">Civil</option>
                                        <option value="electronics" selected>Electronics</option>
                                    <?php }?>
                                    </select>
                                    </div>
                                </div>
                                  
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Roll No.</label>
                                        <div class="col-md-6  form-group">
                                <input type="text" class="form-control" name="rollno" value = "<?php echo $row['rollno'];?>">
                                      </div>
                                    </div>
                                    
                                    <?php
                                    
                                        $PreDate = $row['dob'];

                                    ?>

                                    <div class="form-group ">
                                    <label  class="control-label col-lg-3">Date of Birth:</label>
                                    <div class="col-lg-6">
                                    <input type="date" id="start" name="dob" value= "<?php echo date('Y-m-d',strtotime($PreDate));?>">
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
                                            <input class="form-control " id="email" name="email" type="email" value = "<?php echo $row['email'];?>">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Username</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="username" name="username" type="text" value = "<?php echo $row['username'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Password</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="password" name="password" type="password" value = "<?php echo $row['password'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="confirm_password" class="control-label col-lg-3">Confirm Password</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="confirm_password" name="confirm_password" type="password" value = "<?php echo $row['confirm_pass'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-5 col-lg-10">
                                        <a href="view.php"><button class="btn btn-success" name="submit" type="submit">Update</button></a>
                                        
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

        <?php
        
            if(isset($_POST['submit']))
            {

                $pname=$_FILES['photo']['name'];
                $type=$_FILES['photo']['type'];
                $size=$_FILES['photo']['size'];
                $temp=$_FILES['photo']['tmp_name'];
                
                if($pname)
                {
                    $upload= "image/";
                    $imgExt=strtolower(pathinfo($pname, PATHINFO_EXTENSION));
                    if($imgExt == 'jpg' || $imgExt == 'png' || $imgExt == 'jpeg')
                    {
                        $random = rand(1000,1000000);
                        $FileName = $random."-".$Subject_Category."-".$Subject_Name.".".$imgExt;
                        $targetFilePath = $upload.$FileName;
                        $imgExt=strtolower(pathinfo($pname, PATHINFO_EXTENSION));
                        $valid_ext= array('jpg','png','jpeg','pdf');

                        if(in_array($imgExt, $valid_ext))
                        move_uploaded_file($temp,$targetFilePath);

                        $fn = $_POST['firstname'];
                        $ln = $_POST['lastname'];
                        $p = $_POST['parent'];
                        $con = $_POST['contact'];
                        $conno = $_POST['contactno'];
                        $Br = $_POST['Branch'];
                        $con_pass = $_POST['confirm_password'];
                        
                        $que = "update student_detail set stud_firstname = '$fn', stud_lastname = '$ln', Parent_name = '$p', address = '$address', state = '$state', city = '$city', per_contact = '$con', pra_contact = '$conno', class = '$class', course = '$Br', rollno = '$rollno', dob = '$dob', email = '$email', username = '$username', photo = '$FileName', password = '$password',confirm_pass = '$con_pass' where id = '$ID'";
                        $res = mysqli_query($connect, $que) or die(mysqli_error($connect));
        
                        if($res)
                        {
                            echo "<script>";
                            echo "window.alert('Data Updated Successfully');";
                            echo "window.location.href = 'View.php';";
                            echo "</script>";
        
                        }
                        
                    }
                    else
                    {
                        echo "<script>";
                        echo "window.alert('Please upload a jpg, png or jpeg file');";
                        echo "</script>";
                    }
                }
                

            }

        ?>
        


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

