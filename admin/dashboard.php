<?php
   session_start();
   error_reporting(0);
   include('includes/config.php');
   if(strlen($_SESSION['alogin'])==0)
     { 
   header('location:index.php');
   }
   else{?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <![endif]-->
      <title>Online Escalation Matrix | Admin Dashboard</title>
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
                  <h4 class="header-line">ADMIN DASHBOARD</h4>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="alert alert-danger back-widget-set text-center">
                     <i class="fa fa-university fa-5x"></i>
                     <?php 
                        $sql ="SELECT Zoneid from tblzone ";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $listdbooks=$query->rowCount();
                        ?>
                     <h3><?php echo htmlentities($listdbooks);?></h3>
                     Zone
                  </div>
               </div>
               <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="alert alert-warning back-widget-set text-center">
                     <i class="fa fa-link fa-5x"></i>
                     <?php 
                        $sql1 ="SELECT Regionid from tblregion ";
                        $query1 = $dbh -> prepare($sql1);
                        $query1->execute();
                        $results1=$query1->fetchAll(PDO::FETCH_OBJ);
                        $issuedbooks=$query1->rowCount();
                        ?>
                     <h3><?php echo htmlentities($issuedbooks);?> </h3>
                     Region
                  </div>
               </div>
               <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="alert alert-success back-widget-set text-center">
                     <i class="fa fa-thumb-tack fa-5x"></i>
                     <?php 
                        $status=1;
                        $sql2 ="SELECT Locationid from tbllocation";
                        $query2 = $dbh -> prepare($sql2);
                        $query2->bindParam(':status',$status,PDO::PARAM_STR);
                        $query2->execute();
                        $results2=$query2->fetchAll(PDO::FETCH_OBJ);
                        $returnedbooks=$query2->rowCount();
                        ?>
                     <h3><?php echo htmlentities($returnedbooks);?></h3>
                     Location
                  </div>
               </div>
               <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="alert alert-info back-widget-set text-center">
                     <i class="fa fa-group fa-5x"></i>
                     <?php 
                        $sql3 ="SELECT id from tblhub ";
                        $query3 = $dbh -> prepare($sql3);
                        $query3->execute();
                        $results3=$query3->fetchAll(PDO::FETCH_OBJ);
                        $regstds=$query3->rowCount();
                        ?>
                     <h3><?php echo htmlentities($regstds);?></h3>
                     Hub
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="alert alert-info back-widget-set text-center">
                     <i class="fa fa-database fa-5x"></i>
                     <?php 
                        $sql4 ="SELECT id from tblinfo";
                        $query4 = $dbh -> prepare($sql4);
                        $query4->execute();
                        $results4=$query4->fetchAll(PDO::FETCH_OBJ);
                        $listdathrs=$query4->rowCount();
                        ?>
                     <h3><?php echo htmlentities($listdathrs);?></h3>
                     Escalation Matrix
                  </div>
               </div>
			   <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="alert alert-success back-widget-set text-center">
                     <i class="fa fa-user fa-5x"></i>
                     <?php 
                        $sql5 ="SELECT id from tblusers ";
                        $query5 = $dbh -> prepare($sql5);
                        $query5->execute();
                        $results5=$query5->fetchAll(PDO::FETCH_OBJ);
                        $listdbooks=$query5->rowCount();
                        ?>
                     <h3><?php echo htmlentities($listdbooks);?></h3>
                     Total User's
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- CONTENT-WRAPPER SECTION END-->
      <?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
      <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
      <!-- CORE JQUERY  -->
      <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS  -->
      <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
      <script src="assets/js/custom.js"></script>
   </body>
</html>
<?php } ?>