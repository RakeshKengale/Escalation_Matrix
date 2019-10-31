<?php
   session_start();
   include('includes/config.php');
   if(isset($_POST['signin']))
   {
   $uname=$_POST['username'];
   $password=md5($_POST['password']);
   $sql ="SELECT Username,Password FROM tbladmin WHERE Username=:uname and Password=:password";
   $query= $dbh -> prepare($sql);
   $query-> bindParam(':uname', $uname, PDO::PARAM_STR);
   $query-> bindParam(':password', $password, PDO::PARAM_STR);
   $query-> execute();
   $results=$query->fetchAll(PDO::FETCH_OBJ);
   if($query->rowCount() > 0)
   {
   $_SESSION['alogin']=$_POST['username'];
   echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
   } else{
     
     echo "<script>alert('Invalid Details');</script>";
   
   }
   
   }
   
   ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Escalation Matrix | Admin </title>
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
                  <h4 class="header-line">Admin Login Form</h4>
               </div>
            </div>
            <!--LOGIN PANEL START-->           
            <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
                  <div class="panel panel-danger">
                     <div class="panel-heading">
                       Admin  Login 
                     </div>
                     <div class="panel-body">
                        <form name="signin" method="post">
                           <div class="form-group">
                              <label>Username</label>
                              <input class="form-control" type="text" placeholder="Enter Username" name="username" required autocomplete="off" />
                           </div>
                           <div class="form-group">
                              <label>Password</label>
                              <input class="form-control" type="password" placeholder="Enter Password" name="password" required autocomplete="off"  />
                           </div>
                           <center><button type="submit" name="signin" class="btn btn-info">LOGIN </button></center>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!---LOGIN PABNEL END-->            
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