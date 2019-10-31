<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{
if(isset($_POST['regionupdate']))
{
$did=intval($_GET['regionid']);    
$region=$_POST['region'];
$zonename=$_POST['zonename'];

   
$sql="update tblregion set Regionname=:region,Zoneid=:zonename where Regionid=:did";
$query = $dbh->prepare($sql);
$query->bindParam(':region',$region,PDO::PARAM_STR);
$query->bindParam(':zonename',$zonename,PDO::PARAM_STR);
$query->bindParam(':did',$did,PDO::PARAM_STR);
$query->execute();
   echo"<script>alert('Region Updated Successfully');document.location = 'region.php';</script>";
}
}
    ?>


<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <link rel="stylesheet" href="style.css">-->
      <link href="assets/css/bootstrap.css" rel="stylesheet" />
      <!-- FONT AWESOME STYLE  -->
      <link href="assets/css/font-awesome.css" rel="stylesheet" />
      <!-- DATATABLE STYLE  -->
      <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
      <!-- CUSTOM STYLE  -->
      <link href="assets/css/style.css" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
      <style>
         body {
         font-family: 'Ubuntu', sans-serif;
         line-height:48px;
         }
      </style>
      <style>
         .button {
         border-radius: 4px;
         background-color: #f4511e;
         border: none;
         color: #FFFFFF;
         text-align: center;
         font-size: 28px;
         padding: 20px;
         width: 300px;
         transition: all 0.5s;
         cursor: pointer;
         margin: 5px;
         }
         .button span {
         cursor: pointer;
         display: inline-block;
         position: relative;
         transition: 0.5s;
         }
         .button span:after {
         content: '\00bb';
         position: absolute;
         opacity: 0;
         top: 0;
         right: -20px;
         transition: 0.5s;
         }
         .button:hover span {
         padding-right: 25px;
         }
         .button:hover span:after {
         opacity: 1;
         right: 0;
         }
      </style>
      <title>Escalation Matrix</title>
   </head>
   <body>
      <?php include('includes/header.php');?>
      <div class="container">
         <div class="row">
            <br >
            <ol class="breadcrumb">
               <li class="breadcrumb-item">
                  <a href="dashboard.php">
                     <h4>Home</h4>
                  </a>
               </li>
               <li class="breadcrumb-item active">Region</li>
            </ol>
            <div class="col-md-6 mb-3">
               <div class="card">
                  <h2 class="card-header" align="center">Region</h2>
                  <!--remove-->
                  <div class="row">
                     <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
                        <div class="col-md-6 col-lg-12">
						  <form  method="post">						  
						  <?php 
                              $did=intval($_GET['regionid']);
                              $sql = "SELECT * from tblregion WHERE Regionid=:did";
                              $query = $dbh -> prepare($sql);
                              $query->bindParam(':did',$did,PDO::PARAM_STR);
                              $query->execute();
                              $results=$query->fetchAll(PDO::FETCH_OBJ);
                              $cnt=1;
                              if($query->rowCount() > 0)
                              {
                              foreach($results as $result)
                              {               ?>
                           <div class="form-group">
                              <label>Zone</label>
                              <select required class="form-control" name="zonename" autocomplete="off">
                                 <!--<option  value="">Select Zone</option>-->
                                 <?php $sql = "SELECT  * from tblzone";
                                    $query = $dbh -> prepare($sql);
                                    $query->execute();
                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                    $cnt=1;
                                    if($query->rowCount() > 0)
                                    {
                                    foreach($results as $resultt)
                                    {   ?>                                            
                                 <option value="<?php echo htmlentities($resultt->Zoneid);?>"><?php echo htmlentities($resultt->Zonename);?></option>
                                 <?php }} ?>
                              </select>
                              
                           </div>
                           <div class="form-group">
                              <label>Region</label>
                              <input type="text" class="form-control" name="region" value="<?php echo htmlentities($result->Regionname); ?>" placeholder="Enter Region">
                           </div><?php }}?>
                           <div class="container">
                              <button type="submit" name="regionupdate" class="btn btn-success btn-lg">Submit</button>
                              <br >
                           </div>
						   </form>
                        </div>
                     </div>
                  </div>
                  <!--remove-->
               </div>
            </div>
         </div>
      </div>
							  
      <div class="content-wrapper">
         <div class="container">
            <div class="row pad-botm">
               <hr />
               <div class="col-md-12">
                  <center>
                     <h4 class="header-line">Manage All Record's</h4>
                  </center>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <!-- Advanced Tables -->
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           All Data 
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Zone</th>
                                       <th>Region Name</th>
                                       <th>Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php $sql = "SELECT * FROM tblregion INNER JOIN tblzone ON tblregion.Zoneid=tblzone.Zoneid";
                                       $query = $dbh -> prepare($sql);
                                       $query->execute();
                                       $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       $cnt=1;
                                       if($query->rowCount() > 0)
                                       {
                                       foreach($results as $result)
                                       {               ?>                                      
                                    <tr class="odd gradeX">
                                       <td class="center"><?php echo htmlentities($cnt);?></td>
                                       <td class="center"><?php echo htmlentities($result->Zonename);?></td>
                                       <td class="center"><?php echo htmlentities($result->Regionname);?></td>
                                       <td class="center"><?php $stats=$result->Status;
                                          if($stats){
                                                                                       ?>
                                          <a class="btn btn-success btn-xs">Active</a>
                                          <?php } else { ?>
                                          <a class="btn btn-danger btn-xs">Inactive</a>
                                          <?php } ?>
                                       </td>
                                    </tr>
                                    <?php $cnt=$cnt+1;}} ?>                                      
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <!--End Advanced Tables -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Table-->
      <!-- Optional JavaScript -->
      <?php include('includes/footer.php');?>
      <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
      <!-- CORE JQUERY  -->
      <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS  -->
      <script src="assets/js/bootstrap.js"></script>
      <!-- DATATABLE SCRIPTS  -->
      <script src="assets/js/dataTables/jquery.dataTables.js"></script>
      <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
      <script src="assets/js/custom.js"></script>
      <!-- jQuery first, then Popper.js, then Bootstrap JS 
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
   </body>
</html>

							 