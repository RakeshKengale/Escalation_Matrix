<?php

   error_reporting(0);
   ob_start();
   include('includes/config.php');
   
   if(isset($_POST['submit']))
     {
   $userid=$_POST['userid'];	  
   $fullname=$_POST['fullname'];
   $email=$_POST['email']; 
   $password=$_POST['password'];
   $status=1;
   $sql="INSERT INTO  tblusers(Userid,Fullname,Emailid,Password,Status) VALUES(:userid,:fullname,:email,:password,:status)";
   $query = $dbh->prepare($sql);
   $query->bindParam(':userid',$userid,PDO::PARAM_STR);
   $query->bindParam(':fullname',$fullname,PDO::PARAM_STR);
   $query->bindParam(':email',$email,PDO::PARAM_STR);  
   $query->bindParam(':password',$password,PDO::PARAM_STR);
   $query->bindParam(':status',$status,PDO::PARAM_STR);
   $query->execute();
   $lastInsertId = $dbh->lastInsertId();
   if($lastInsertId)
   {	
   echo"<script>alert('You have successfully registered and logged in.');document.location = 'index.php';</script>";
   }
   else 
   {
   echo"<script>alert(' Registration Failed');</script>";
   }
   }
   ob_end_flush();
   ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Escalation Matrix </title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
<div class="content-wrapper">
<div class="container">
<div class="row pad-botm">
<div class="col-md-12">
<h4 class="header-line">New User Registration</h4>
</div>
</div>
             
<!--Registration PANEL START-->           
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
<div class="panel panel-info">
<div class="panel-heading">
 New User Registration
</div>
<div class="panel-body">
<form role="form" method="post">

<div class="form-group">
						
						       <?php 
                                       function useridgen($length=8)
                                       {
                                           $chars ="1234567890";
                                           $final_rand ='';
                                           for($i=0;$i<$length; $i++)
                                           {
                                               $final_rand .= $chars[ rand(0,strlen($chars)-1)];
                                           }
                                           return $final_rand;
                                       }
                                       ; //generates a string 
                                       ?>
				<input class="form-control" type="hidden"  name="userid" value="<?php echo useridgen();?>" readonly="readonly" />
                             
						

                        </div>
<div class="form-group">
<label>Enter Name</label>
<input class="form-control" type="text" placeholder="Enter Name"  name="fullname" required autocomplete="off" />
</div>
<div class="form-group">
<label>Enter Email id</label>
<input class="form-control" type="email" placeholder="Enter Email Id" name="email" required autocomplete="off" />
</div>
<div class="form-group">
<label>Password</label>
<input class="form-control" type="password" placeholder="Enter Password" name="password" required autocomplete="off"  />

</div>


<center>
 <button type="submit" name="submit" class="btn btn-info">Registration </button> </center>
</form>
 </div>
</div>
</div>
</div>  
<!---Registration PABNEL END-->            
             
 
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
 <?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
