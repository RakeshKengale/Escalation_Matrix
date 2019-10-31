<?php
   session_start();
   error_reporting(0);
   include('includes/config.php');
   if(strlen($_SESSION['login'])==0)
       {   
   header('location:index.php');
   }
   else{
   if(isset($_POST['adddata']))
   {
   $uid=$_SESSION['uid'];
   $zone=$_POST['zone'];
   $region=$_POST['region'];
   $location=$_POST['location'];
   $hub=$_POST['hub'];
   $mname=$_POST['mname'];
   $memail=$_POST['memail'];
   $mcontact=$_POST['mcontact'];
   $mmname=$_POST['mmname'];
   $mmemail=$_POST['mmemail'];
   $mmcontact=$_POST['mmcontact'];
   $oname=$_POST['oname'];
   $oemail=$_POST['oemail'];
   $ocontact=$_POST['ocontact'];
   $ooname=$_POST['ooname'];
   $ooemail=$_POST['ooemail'];
   $oocontact=$_POST['oocontact'];   
   $bmname=$_POST['bmname'];
   $bmemail=$_POST['bmemail'];
   $bmcontact=$_POST['bmcontact'];
   $sdmname=$_POST['sdmname'];
   $sdmemail=$_POST['sdmemail'];
   $sdmcontact=$_POST['sdmcontact'];   
   $amname=$_POST['amname'];
   $amemail=$_POST['amemail'];
   $amcontact=$_POST['amcontact'];
   $adname=$_POST['adname'];
   $ademail=$_POST['ademail'];
   $adcontact=$_POST['adcontact'];   
   $dname=$_POST['dname'];
   $demail=$_POST['demail'];
   $dcontact=$_POST['dcontact'];
   $status=1; 
   $sql="INSERT INTO tblinfo(Uid,Zone,Region,Location,Hub,MName,MContact,MEmailid,MMName,MMContact,MMEmailid,OName,OContact,OEmailid,OOName,OOContact,OOEmailid,BMName,BMContact,BMEmailid,SDMName,SDMContact,SDMEmailid,AMName,AMContact,AMEmailid,ADName,ADContact,ADEmailid,DName,DContact,DEmailid,Status) VALUES(:uid,:zone,:region,:location,:hub,:mname,:mcontact,:memail,:mmname,:mmcontact,:mmemail,:oname,:ocontact,:oemail,:ooname,:oocontact,:ooemail,:bmname,:bmcontact,:bmemail,:sdmname,:sdmcontact,:sdmemail,:amname,:amcontact,:amemail,:adname,:adcontact,:ademail,:dname,:dcontact,:demail,:status)";
   $query = $dbh->prepare($sql);
   $query->bindParam(':uid',$uid,PDO::PARAM_STR);
   $query->bindParam(':zone',$zone,PDO::PARAM_STR);
   $query->bindParam(':region',$region,PDO::PARAM_STR);
   $query->bindParam(':location',$location,PDO::PARAM_STR);
   $query->bindParam(':hub',$hub,PDO::PARAM_STR);
   $query->bindParam(':mname',$mname,PDO::PARAM_STR);
   $query->bindParam(':mcontact',$mcontact,PDO::PARAM_STR);
   $query->bindParam(':memail',$memail,PDO::PARAM_STR);
   $query->bindParam(':mmname',$mmname,PDO::PARAM_STR);
   $query->bindParam(':mmcontact',$mmcontact,PDO::PARAM_STR);
   $query->bindParam(':mmemail',$mmemail,PDO::PARAM_STR);   
   $query->bindParam(':oname',$oname,PDO::PARAM_STR);
   $query->bindParam(':ocontact',$ocontact,PDO::PARAM_STR);
   $query->bindParam(':oemail',$oemail,PDO::PARAM_STR);
   $query->bindParam(':ooname',$ooname,PDO::PARAM_STR);
   $query->bindParam(':oocontact',$oocontact,PDO::PARAM_STR);
   $query->bindParam(':ooemail',$ooemail,PDO::PARAM_STR);   
   $query->bindParam(':bmname',$bmname,PDO::PARAM_STR);
   $query->bindParam(':bmcontact',$bmcontact,PDO::PARAM_STR);
   $query->bindParam(':bmemail',$bmemail,PDO::PARAM_STR);
   $query->bindParam(':sdmname',$sdmname,PDO::PARAM_STR);
   $query->bindParam(':sdmcontact',$sdmcontact,PDO::PARAM_STR);
   $query->bindParam(':sdmemail',$sdmemail,PDO::PARAM_STR);   
   $query->bindParam(':amname',$amname,PDO::PARAM_STR);
   $query->bindParam(':amcontact',$amcontact,PDO::PARAM_STR);
   $query->bindParam(':amemail',$amemail,PDO::PARAM_STR);
   $query->bindParam(':adname',$adname,PDO::PARAM_STR);
   $query->bindParam(':adcontact',$adcontact,PDO::PARAM_STR);
   $query->bindParam(':ademail',$ademail,PDO::PARAM_STR);   
   $query->bindParam(':dname',$dname,PDO::PARAM_STR);
   $query->bindParam(':dcontact',$dcontact,PDO::PARAM_STR);
   $query->bindParam(':demail',$demail,PDO::PARAM_STR);   
   $query->bindParam(':status',$status,PDO::PARAM_STR);
   $query->execute();
   $lastInsertId = $dbh->lastInsertId();
   if($lastInsertId)
   {
      echo"<script>alert('All Details Added Successfully');document.location = 'dashboard_add.php';</script>";
   }
   else 
   {
   	   echo"<script>alert('Something went wrong. Please try again');document.location = 'dashboard_add.php';</script>";
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
      <title>Escalation Matrix | Dashboard</title>
   </head>
   <body>
      <?php include('includes/header.php');?>
      <div class="container">
         <div align='center'>
            <h3>	
               Name :
               <small class="text-muted"><?php echo $_SESSION["fullname"]?></small>
            </h3>
         </div>
         <div align='center'>
            <h3>
               User ID :
               <small class="text-muted"><?php echo $_SESSION["uid"]?></small>
            </h3>
         </div>
         <hr>
         <form method="post">
            <div class="row">
               <div class="col-md-6 col-lg-3">
                  <div class="form-group">
                     <label>Zone</label>
                     <select required class="form-control" name="zone" autocomplete="off">
                        <option value="">Select Zone</option>
                        <?php $sql = "SELECT  Zoneid,Zonename from tblzone";
                           $query = $dbh -> prepare($sql);
                           $query->execute();
                           $results=$query->fetchAll(PDO::FETCH_OBJ);
                           $cnt=1;
                           if($query->rowCount() > 0)
                           {
                           foreach($results as $result)
                           {   ?>                                            
                        <option value="<?php echo htmlentities($result->Zonename);?>"><?php echo htmlentities($result->Zonename);?></option>
                        <?php }} ?>
                     </select>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="form-group">
                     <label>Region</label>
                     <select required class="form-control" name="region" autocomplete="off">
                        <option value="">Select Region</option>
                        <?php $sql = "SELECT  Regionid,Regionname from tblregion";
                           $query = $dbh -> prepare($sql);
                           $query->execute();
                           $results=$query->fetchAll(PDO::FETCH_OBJ);
                           $cnt=1;
                           if($query->rowCount() > 0)
                           {
                           foreach($results as $result)
                           {   ?>                                            
                        <option value="<?php echo htmlentities($result->Regionname);?>"><?php echo htmlentities($result->Regionname);?></option>
                        <?php }} ?>
                     </select>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="form-group">
                     <label>Location</label>
                     <select required class="form-control" name="location" autocomplete="off">
                        <option value="">Select Location</option>
                        <?php $sql = "SELECT  Locationid,Locationname from tbllocation";
                           $query = $dbh -> prepare($sql);
                           $query->execute();
                           $results=$query->fetchAll(PDO::FETCH_OBJ);
                           $cnt=1;
                           if($query->rowCount() > 0)
                           {
                           foreach($results as $result)
                           {   ?>                                            
                        <option value="<?php echo htmlentities($result->Locationname);?>"><?php echo htmlentities($result->Locationname);?></option>
                        <?php }} ?>
                     </select>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="form-group">
                     <label>Hub</label>
                     <select required class="form-control" name="hub" autocomplete="off">
                        <option value="">Select Hub</option>
                        <?php $sql = "SELECT  id,Hubname from tblhub";
                           $query = $dbh -> prepare($sql);
                           $query->execute();
                           $results=$query->fetchAll(PDO::FETCH_OBJ);
                           $cnt=1;
                           if($query->rowCount() > 0)
                           {
                           foreach($results as $result)
                           {   ?>                                            
                        <option value="<?php echo htmlentities($result->Hubname);?>"><?php echo htmlentities($result->Hubname);?></option>
                        <?php }} ?>
                     </select>
                  </div>
               </div>
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
                        <center>
                           <h4>View's</h4>
                        </center>
                        <div class="table-responsive text-nowrap">
                           <table class="table table-hover table-bordered">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>Zone</th>
                                    <th>Region</th>
                                    <th>Location</th>
                                    <th>Hub</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    $userid=$_SESSION['uid'];
                                    $sql="SELECT * FROM tblinfo WHERE Uid=:userid";
                                    $query = $dbh -> prepare($sql);
                                    $query-> bindParam(':userid', $userid, PDO::PARAM_STR);
                                    $query->execute();
                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                    $cnt=1;
                                    if($query->rowCount() > 0)
                                    {
                                    foreach($results as $result)
                                    {               ?>
                                 <tr>
                                    <td><?php echo htmlentities($cnt);?></td>
                                    <td><?php echo htmlentities($result->Zone);?></td>
                                    <td><?php echo htmlentities($result->Region);?></td>
                                    <td><?php echo htmlentities($result->Location);?></td>
                                    <td><?php echo htmlentities($result->Hub);?></td>
                                    <?php $cnt=$cnt+1;}} ?> 
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
          
            <hr>
      </div>
      <div class="container">
      <div class="row">
      <div class="col-lg-6 mb-2">
      <div class="card">
      <h2 class="card-header" align="center">MIS 1</h2>
      <!--remove-->
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <div class="col-md-6 col-lg-12">
      <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="mname" placeholder="Enter Name" required>
      </div>
      <div class="form-group">
      <label>Email address</label>
      <input type="email" class="form-control" name="memail" placeholder="Enter Email">
      </div>
      <div class="form-group">
      <label>Contact No</label>
      <input type="text" class="form-control" maxlength="10" name="mcontact" placeholder="Enter Contact No">
      </div>
      <hr />
      </div>
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <center>
      <h4>View's</h4>
      </center>
      <div class="table-responsive text-nowrap">
      <table class="table table-hover table-bordered">
      <thead>
      <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email ID</th>
      <th>Contact No</th>
      </tr>
      </thead>
      <tbody>
      <?php 
         $userid=$_SESSION['uid'];
         $sql="SELECT * FROM tblinfo WHERE Uid=:userid";
         $query = $dbh -> prepare($sql);
         $query-> bindParam(':userid', $userid, PDO::PARAM_STR);
         $query->execute();
         $results=$query->fetchAll(PDO::FETCH_OBJ);
         $cnt=1;
         if($query->rowCount() > 0)
         {
         foreach($results as $result)
         {               ?>
      <tr>
      <td><?php echo htmlentities($cnt);?></td>
      <td><?php echo htmlentities($result->MName);?></td>
      <td><?php echo htmlentities($result->MEmailid);?></td>
      <td><?php echo htmlentities($result->MContact);?></td>
      <?php $cnt=$cnt+1;}} ?> 
      </tr>
      </tbody>
      </table>
      </div>
      </div>
      </div>
      </div>
      </div>
      <!--remove-->
      </div>
      </div>
      <div class="col-lg-6 mb-2">
      <div class="card">
      <h2 class="card-header" align="center">MIS 2</h2>
      <!--remove-->
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <div class="col-md-6 col-lg-12">
      <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="mmname" placeholder="Enter Name" required>
      </div>
      <div class="form-group">
      <label>Email address</label>
      <input type="email" class="form-control" name="mmemail" placeholder="Enter Email">
      </div>
      <div class="form-group">
      <label>Contact No</label>
      <input type="text" class="form-control" maxlength="10" name="mmcontact" placeholder="Enter Contact No">
      </div>
      <hr />
      </div>
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <center>
      <h4>View's</h4>
      </center>
      <div class="table-responsive text-nowrap">
      <table class="table table-hover table-bordered">
      <thead>
      <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email ID</th>
      <th>Contact No</th>
      </tr>
      </thead>
      <tbody>
      <?php 
         $userid=$_SESSION['uid'];
         $sql="SELECT * FROM tblinfo WHERE Uid=:userid";
         $query = $dbh -> prepare($sql);
         $query-> bindParam(':userid', $userid, PDO::PARAM_STR);
         $query->execute();
         $results=$query->fetchAll(PDO::FETCH_OBJ);
         $cnt=1;
         if($query->rowCount() > 0)
         {
         foreach($results as $result)
         {               ?>
      <tr>
      <td><?php echo htmlentities($cnt);?></td>
      <td><?php echo htmlentities($result->MMName);?></td>
      <td><?php echo htmlentities($result->MMEmailid);?></td>
      <td><?php echo htmlentities($result->MMContact);?></td>
      <?php $cnt=$cnt+1;}} ?> 
      </tr>
      </tbody>
      </table>
      </div>
      </div>
      </div>
      </div>
      </div>
      <!--remove-->
      </div>
      </div>
      </div>
      <hr />
      </div>
      <div class="container">
      <div class="row">
      <div class="col-lg-6 mb-2">
      <div class="card">
      <h2 class="card-header" align="center">Operation's 1</h2>
      <!--remove-->
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <div class="col-md-6 col-lg-12">
      <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="oname" placeholder="Enter Name" required>
      </div>
      <div class="form-group">
      <label>Email address</label>
      <input type="email" class="form-control" name="oemail" placeholder="Enter Email">
      </div>
      <div class="form-group">
      <label>Contact No</label>
      <input type="text" class="form-control" maxlength="10" name="ocontact" placeholder="Enter Contact No">
      </div>
      <hr />
      </div>
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <center>
      <h4>View's</h4>
      </center>
      <div class="table-responsive">
      <table class="table table-hover table-bordered">
      <thead>
      <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email ID</th>
      <th>Contact No</th>
      </tr>
      </thead>
      <tbody>
      <?php 
         $userid=$_SESSION['uid'];
         $sql="SELECT * FROM tblinfo WHERE Uid=:userid";
         $query = $dbh -> prepare($sql);
         $query-> bindParam(':userid', $userid, PDO::PARAM_STR);
         $query->execute();
         $results=$query->fetchAll(PDO::FETCH_OBJ);
         $cnt=1;
         if($query->rowCount() > 0)
         {
         foreach($results as $result)
         {               ?>
      <tr>
      <td><?php echo htmlentities($cnt);?></td>
      <td><?php echo htmlentities($result->OName);?></td>
      <td><?php echo htmlentities($result->OEmailid);?></td>
      <td><?php echo htmlentities($result->OContact);?></td>
      <?php $cnt=$cnt+1;}} ?> 
      </tr>
      </tbody>
      </table>
      </div>
      </div>
      </div>
      </div>
      </div>
      <!--remove-->
      </div>
      </div>
      <div class="col-lg-6 mb-2">
      <div class="card">
      <h2 class="card-header" align="center">Operation's 2</h2>
      <!--remove-->
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <div class="col-md-6 col-lg-12">
      <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="ooname"  placeholder="Enter Name" required>
      </div>
      <div class="form-group">
      <label>Email address</label>
      <input type="email" class="form-control" name="ooemail" placeholder="Enter Email">
      </div>
      <div class="form-group">
      <label>Contact No</label>
      <input type="text" class="form-control" maxlength="10" name="oocontact" placeholder="Enter Contact No">
      </div>
      <hr />
      </div>
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <center>
      <h4>View's</h4>
      </center>
      <div class="table-responsive">
      <table class="table table-hover table-bordered">
      <thead>
      <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email ID</th>
      <th>Contact No</th>
      </tr>
      </thead>
      <tbody>
      <?php 
         $userid=$_SESSION['uid'];
         $sql="SELECT * FROM tblinfo WHERE Uid=:userid";
         $query = $dbh -> prepare($sql);
         $query-> bindParam(':userid', $userid, PDO::PARAM_STR);
         $query->execute();
         $results=$query->fetchAll(PDO::FETCH_OBJ);
         $cnt=1;
         if($query->rowCount() > 0)
         {
         foreach($results as $result)
         {               ?>
      <tr>
      <td><?php echo htmlentities($cnt);?></td>
      <td><?php echo htmlentities($result->OOName);?></td>
      <td><?php echo htmlentities($result->OOEmailid);?></td>
      <td><?php echo htmlentities($result->OOContact);?></td>
      <?php $cnt=$cnt+1;}} ?> 
      </tr>
      </tbody>
      </table>
      </div>
      </div>
      </div>
      </div>
      </div>
      <!--remove-->
      </div>
      </div>
      </div>
      <hr />
      </div>
      <div class="container">
      <div class="row">
      <div class="col-lg-6 mb-2">
      <div class="card">
      <h2 class="card-header" align="center">Branch Manager</h2>
      <!--remove-->
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <div class="col-md-6 col-lg-12">
      <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="bmname" placeholder="Enter Name" required>
      </div>
      <div class="form-group">
      <label>Email address</label>
      <input type="email" class="form-control" name="bmemail" placeholder="Enter Email">
      </div>
      <div class="form-group">
      <label>Contact No</label>
      <input type="text" class="form-control" maxlength="10" name="bmcontact" placeholder="Enter Contact No">
      </div>
      <hr />
      </div>
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <center>
      <h4>View's</h4>
      </center>
      <div class="table-responsive">
      <table class="table table-hover table-bordered">
      <thead>
      <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email ID</th>
      <th>Contact No</th>
      </tr>
      </thead>
      <tbody>
      <?php 
         $userid=$_SESSION['uid'];
         $sql="SELECT * FROM tblinfo WHERE Uid=:userid";
         $query = $dbh -> prepare($sql);
         $query-> bindParam(':userid', $userid, PDO::PARAM_STR);
         $query->execute();
         $results=$query->fetchAll(PDO::FETCH_OBJ);
         $cnt=1;
         if($query->rowCount() > 0)
         {
         foreach($results as $result)
         {               ?>
      <tr>
      <td><?php echo htmlentities($cnt);?></td>
      <td><?php echo htmlentities($result->BMName);?></td>
      <td><?php echo htmlentities($result->BMEmailid);?></td>
      <td><?php echo htmlentities($result->BMContact);?></td>
      <?php $cnt=$cnt+1;}} ?> 
      </tr>
      </tbody>
      </table>
      </div>
      </div>
      </div>
      </div>
      </div>
      <!--remove-->
      </div>
      </div>
      <div class="col-lg-6 mb-2">
      <div class="card">
      <h2 class="card-header" align="center">Service Deliver Manager</h2>
      <!--remove-->
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <div class="col-md-6 col-lg-12">
      <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="sdmname" placeholder="Enter Name" required>
      </div>
      <div class="form-group">
      <label>Email address</label>
      <input type="email" class="form-control" name="sdmemail" placeholder="Enter Email">
      </div>
      <div class="form-group">
      <label>Contact No</label>
      <input type="text" class="form-control" maxlength="10" name="sdmcontact" placeholder="Enter Contact No">
      </div>
      <hr />
      </div>
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <center>
      <h4>View's</h4>
      </center>
      <div class="table-responsive">
      <table class="table table-hover table-bordered">
      <thead>
      <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email ID</th>
      <th>Contact No</th>
      </tr>
      </thead>
      <tbody>
      <?php 
         $userid=$_SESSION['uid'];
         $sql="SELECT * FROM tblinfo WHERE Uid=:userid";
         $query = $dbh -> prepare($sql);
         $query-> bindParam(':userid', $userid, PDO::PARAM_STR);
         $query->execute();
         $results=$query->fetchAll(PDO::FETCH_OBJ);
         $cnt=1;
         if($query->rowCount() > 0)
         {
         foreach($results as $result)
         {               ?>
      <tr>
      <td><?php echo htmlentities($cnt);?></td>
      <td><?php echo htmlentities($result->SDMName);?></td>
      <td><?php echo htmlentities($result->SDMEmailid);?></td>
      <td><?php echo htmlentities($result->SDMContact);?></td>
      <?php $cnt=$cnt+1;}} ?> 
      </tr>
      </tbody>
      </table>
      </div>
      </div>
      </div>
      </div>
      </div>
      <!--remove-->
      </div>
      </div>
      </div>
      <hr />
      </div>
      <div class="container">
      <div class="row">
      <div class="col-lg-6 mb-2">
      <div class="card">
      <h2 class="card-header" align="center">Area Manager</h2>
      <!--remove-->
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <div class="col-md-6 col-lg-12">
      <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="amname"  placeholder="Enter Name" required>
      </div>
      <div class="form-group">
      <label>Email address</label>
      <input type="email" class="form-control" name="amemail" placeholder="Enter Email">
      </div>
      <div class="form-group">
      <label>Contact No</label>
      <input type="text" class="form-control" maxlength="10" name="amcontact" placeholder="Enter Contact No">
      </div>
      <hr />
      </div>
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <center>
      <h4>View's</h4>
      </center>
      <div class="table-responsive">
      <table class="table table-hover table-bordered">
      <thead>
      <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email ID</th>
      <th>Contact No</th>
      </tr>
      </thead>
      <tbody>
      <?php 
         $userid=$_SESSION['uid'];
         $sql="SELECT * FROM tblinfo WHERE Uid=:userid";
         $query = $dbh -> prepare($sql);
         $query-> bindParam(':userid', $userid, PDO::PARAM_STR);
         $query->execute();
         $results=$query->fetchAll(PDO::FETCH_OBJ);
         $cnt=1;
         if($query->rowCount() > 0)
         {
         foreach($results as $result)
         {               ?>
      <tr>
      <td><?php echo htmlentities($cnt);?></td>
      <td><?php echo htmlentities($result->AMName);?></td>
      <td><?php echo htmlentities($result->AMEmailid);?></td>
      <td><?php echo htmlentities($result->AMContact);?></td>
      <?php $cnt=$cnt+1;}} ?> 
      </tr>
      </tbody>
      </table>
      </div>
      </div>
      </div>
      </div>
      </div>
      <!--remove-->
      </div>
      </div>
      <div class="col-lg-6 mb-2">
      <div class="card">
      <h2 class="card-header" align="center">Associate Director</h2>
      <!--remove-->
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <div class="col-md-6 col-lg-12">
      <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="adname" placeholder="Enter Name" required>
      </div>
      <div class="form-group">
      <label>Email address</label>
      <input type="email" class="form-control" name="ademail"  placeholder="Enter Email">
      </div>
      <div class="form-group">
      <label>Contact No</label>
      <input type="text" class="form-control" maxlength="10" name="adcontact"  placeholder="Enter Contact No">
      </div>
      <hr />
      </div>
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <center>
      <h4>View's</h4>
      </center>
      <div class="table-responsive">
      <table class="table table-hover table-bordered">
      <thead>
      <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email ID</th>
      <th>Contact No</th>
      </tr>
      </thead>
      <tbody>
      <?php 
         $userid=$_SESSION['uid'];
         $sql="SELECT * FROM tblinfo WHERE Uid=:userid";
         $query = $dbh -> prepare($sql);
         $query-> bindParam(':userid', $userid, PDO::PARAM_STR);
         $query->execute();
         $results=$query->fetchAll(PDO::FETCH_OBJ);
         $cnt=1;
         if($query->rowCount() > 0)
         {
         foreach($results as $result)
         {               ?>
      <tr>
      <td><?php echo htmlentities($cnt);?></td>
      <td><?php echo htmlentities($result->ADName);?></td>
      <td><?php echo htmlentities($result->ADEmailid);?></td>
      <td><?php echo htmlentities($result->ADContact);?></td>
      <?php $cnt=$cnt+1;}} ?> 
      </tr>
      </tbody>
      </table>
      </div>
      </div>
      </div>
      </div>
      </div>
      <!--remove-->
      </div>
      </div>
      </div>
      <hr />
      </div>
      <div class="container">
      <div class="row">
      <div class="col-lg-6 mb-2">
      <div class="card">
      <h2 class="card-header" align="center">Director</h2>
      <!--remove-->
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <div class="col-md-6 col-lg-12">
      <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="dname"  placeholder="Enter Name" required>
      </div>
      <div class="form-group">
      <label>Email address</label>
      <input type="email" class="form-control" name="demail" placeholder="Enter Email">
      </div>
      <div class="form-group">
      <label>Contact No</label>
      <input type="text" class="form-control" maxlength="10" name="dcontact" placeholder="Enter Contact No">
      </div>
      <hr />
      </div>
      <div class="row">
      <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
      <center>
      <h4>View's</h4>
      </center>
      <div class="table-responsive">
      <table class="table table-hover table-bordered">
      <thead>
      <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email ID</th>
      <th>Contact No</th>
      </tr>
      </thead>
      <tbody>
      <?php 
         $userid=$_SESSION['uid'];
         $sql="SELECT * FROM tblinfo WHERE Uid=:userid";
         $query = $dbh -> prepare($sql);
         $query-> bindParam(':userid', $userid, PDO::PARAM_STR);
         $query->execute();
         $results=$query->fetchAll(PDO::FETCH_OBJ);
         $cnt=1;
         if($query->rowCount() > 0)
         {
         foreach($results as $result)
         {               ?>
      <tr>
      <td><?php echo htmlentities($cnt);?></td>
      <td><?php echo htmlentities($result->DName);?></td>
      <td><?php echo htmlentities($result->DEmailid);?></td>
      <td><?php echo htmlentities($result->DContact);?></td>
      <?php $cnt=$cnt+1;}} ?> 
      </tr>
      </tbody>
      </table>
      </div>
      </div>
      </div>
      </div>
      </div>
      <!--remove-->
      </div>
      </div>
      <div class="col-lg-3 mb-2">
      <div class="row">
      <!--<br /><br /><br />--><br /><br />
      <center> <button type="submit" name="adddata" class="button" align="center"><span>Submit </span></button></center>
      </div></form>
      </div>
      </div>
      </div>
      <!--Table-->
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
                                       <th>Region </th>
                                       <th>Location</th>
                                       <th>Hub</th>
                                       <th>MIS 1</th>
                                       <th>MIS 2</th>
                                       <th>Operation 1</th>
                                       <th>Operation 2</th>
                                       <th>BM</th>
                                       <th>SDM</th>
                                       <th>AM</th>
                                       <th>AD</th>
                                       <th>D</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                       $userid=$_SESSION['uid'];
                                       $sql="SELECT * FROM tblinfo WHERE Uid=:userid";
                                       $query = $dbh -> prepare($sql);
                                       $query-> bindParam(':userid', $userid, PDO::PARAM_STR);
                                       $query->execute();
                                       $results=$query->fetchAll(PDO::FETCH_OBJ);
                                       $cnt=1;
                                       if($query->rowCount() > 0)
                                       {
                                       foreach($results as $result)
                                       {               ?>                                     
                                    <tr class="odd gradeX">
                                       <td class="center"><?php echo htmlentities($cnt);?></td>
                                       <td class="center"><?php echo htmlentities($result->Zone);?></td>
                                       <td class="center"><?php echo htmlentities($result->Region);?></td>
                                       <td class="center"><?php echo htmlentities($result->Location);?></td>
                                       <td class="center"><?php echo htmlentities($result->Hub);?></td>
                                       <td class="center"><?php echo htmlentities($result->MName);?></td>
                                       <td class="center"><?php echo htmlentities($result->MMName);?></td>
                                       <td class="center"><?php echo htmlentities($result->OName);?></td>
                                       <td class="center"><?php echo htmlentities($result->OOName);?></td>
                                       <td class="center"><?php echo htmlentities($result->BMName);?></td>
                                       <td class="center"><?php echo htmlentities($result->SDMName);?></td>
                                       <td class="center"><?php echo htmlentities($result->AMName);?></td>
                                       <td class="center"><?php echo htmlentities($result->ADName);?></td>
                                       <td class="center"><?php echo htmlentities($result->DName);?></td>
                                       <td class="center">
                                          <a href="dashboard_edit.php?id=<?php echo htmlentities($result->id);?>"><button class="btn btn-primary btn-xs"><i class="fa fa-edit "></i> Edit</button> 
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
   </body>
</html>
<?php }?>