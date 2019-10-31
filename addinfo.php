<?php
   session_start();
   //error_reporting(0);
   include ('includes/config1.php');
   if (strlen($_SESSION['login']) == 0) {
       header('location:index.php');
   }
   if (isset($_POST['addinfo'])) {
       $uid = $_SESSION['uid'];
       $zone = $_POST['zone'];
       $region = $_POST['region'];
       $location = $_POST['location'];
       $hub = $_POST['hub'];
       $mname = $_POST['mname'];
       $memail = $_POST['memail'];
       $mcontact = $_POST['mcontact'];
       $mmname = $_POST['mmname'];
       $mmemail = $_POST['mmemail'];
       $mmcontact = $_POST['mmcontact'];
       $oname = $_POST['oname'];
       $oemail = $_POST['oemail'];
       $ocontact = $_POST['ocontact'];
       $ooname = $_POST['ooname'];
       $ooemail = $_POST['ooemail'];
       $oocontact = $_POST['oocontact'];
       $bmname = $_POST['bmname'];
       $bmemail = $_POST['bmemail'];
       $bmcontact = $_POST['bmcontact'];
       $sdmname = $_POST['sdmname'];
       $sdmemail = $_POST['sdmemail'];
       $sdmcontact = $_POST['sdmcontact'];
       $amname = $_POST['amname'];
       $amemail = $_POST['amemail'];
       $amcontact = $_POST['amcontact'];
       $adname = $_POST['adname'];
       $ademail = $_POST['ademail'];
       $adcontact = $_POST['adcontact'];
       $dname = $_POST['dname'];
       $demail = $_POST['demail'];
       $dcontact = $_POST['dcontact'];
       $status = 0;

	   
       $query = mysqli_query($dbh, "INSERT  INTO tblinfo (Uid,Zone,Region,Location,Hub,MName,MContact,MEmailid,MMName,MMContact,MMEmailid,OName,OContact,OEmailid,OOName,OOContact,OOEmailid,BMName,BMContact,BMEmailid,SDMName,SDMContact,SDMEmailid,AMName,AMContact,AMEmailid,ADName,ADContact,ADEmailid,DName,DContact,DEmailid,Status) VALUES ('$uid','$zone','$region','$location','$hub','$mname','$memail','$mcontact','$mmname','$mmcontact','$mmemail','$oname','$ocontact','$oemail','$ooname','$oocontact','$ooemail','$bmname','$bmcontact','$bmemail','$sdmname','$sdmcontact','$sdmemail','$amname','$amcontact','$amemail','$adname','$adcontact','$ademail','$dname','$dcontact','$demail','$status')");
       if ($query) {
   
   		echo"<script>alert('All Details Added Successfully');document.location = 'syncinfo.php';</script>";
       }
	   else {
        echo"<script>alert('Invalid Details');document.location = 'addinfo.php';</script>";
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
      <link rel="stylesheet" href="assets/css/style.css">
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
      <title>Escalation Matrix | Add Information</title>
   </head>
   <body>
      <?php include ('includes/header.php'); ?>
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-lg-3">
               <div class="form-group">
                  <h3>	
                     User Id -
                     <i class="text-muted"><?php echo $_SESSION["uid"] ?></i>
                  </h3>
               </div>
            </div>
            <div class="col-md-6 col-lg-3">
               <div class="form-group">
               </div>
            </div>
            <div class="col-md-6 col-lg-3">
               <div class="form-group">
               </div>
            </div>
            <div class="col-md-6 col-lg-3">
               <div class="form-group">
                  <h3>
                     Name -
                     <i class="text-muted"><?php echo $_SESSION["fullname"] ?></i>
                  </h3>
               </div>
            </div>
         </div>
         <hr >
      </div>
      <div class="container">
         <div align='center'>
            <h3>	
               Add Information
            </h3>
         </div>
         <hr>
         <div class="row">
            <div align='center'>
               <u>All fields marked with an asterisk <span style="color:red;font-weight:bold">*</span> are required.</u>
            </div>
            <?php
               //Fetch all the zone data
               $query1 = $dbh->query("SELECT * FROM tblzone WHERE Status = 1 ORDER BY Zonename ASC");
               //Count total number of rows
               $rowCount = $query1->num_rows;
               ?>
            <form method="post">
               <div class="col-md-6 col-lg-3">
                  <div class="form-group">
                     <div class="form-group">
                        <label>Zone</label> <span style="color:red;font-weight:bold">*</span>
                        <select required id="zone" class="form-control" name="zone" autocomplete="off">
                           <option value="">Select Zone</option>
                           <?php
                              if ($rowCount > 0) {
                                  while ($row = $query1->fetch_assoc()) {
                                      echo '<option value="' . $row['Zoneid'] . '">' . $row['Zonename'] . '</option>';
                                  }
                              } else {
                                  echo '<option value="">Zone not available</option>';
                              }
                              ?>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="form-group">
                     <div class="form-group">
                        <label>Region</label> <span style="color:red;font-weight:bold">*</span>
                        <select  id="region" class="form-control" name="region" autocomplete="off">
                           <option value="">Select Region</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="form-group">
                     <div class="form-group">
                        <label>Location</label> <span style="color:red;font-weight:bold">*</span>
                        <select  id="location" class="form-control" name="location" autocomplete="off">
                           <option value="">Select Location</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="form-group">
                     <div class="form-group">
                        <label>Hub</label> <span style="color:red;font-weight:bold">*</span>
                        <select  id="hub" class="form-control" name="hub" autocomplete="off">
                           <option value="">Select Hub</option>
                        </select>
                     </div>
                  </div>
               </div>
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
               <script type="text/javascript">
                  $(document).ready(function(){
                      $('#zone').on('change',function(){
                          var ZoneID = $(this).val();
                          if(ZoneID){
                              $.ajax({
                                  type:'POST',
                                  url:'ajaxData.php',
                                  data:'Zoneid='+ZoneID,
                                  success:function(html){
                                      $('#region').html(html);
                                      $('#location').html('<option value="">Select Location first</option>');
                  $('#hub').html('<option value="">Select Hub first</option>'); 
                  		   
                                  }
                              }); 
                          }else{
                              $('#region').html('<option value="">Select Zone first</option>');
                              $('#location').html('<option value="">Select Region first</option>'); 
                  $('#hub').html('<option value="">Select location first</option>'); 
                     
                          }
                      });
                      
                      $('#region').on('change',function(){
                          var RegionID = $(this).val();
                          if(RegionID){
                              $.ajax({
                                  type:'POST',
                                  url:'ajaxData.php',
                                  data:'Regionid='+RegionID,
                                  success:function(html){
                                      $('#location').html(html);
                                  }
                              }); 
                          }else{
                              $('#location').html('<option value="">Select region first</option>'); 
                          }
                      });
                   
                   $('#location').on('change',function(){
                          var LocationID = $(this).val();
                          if(LocationID){
                              $.ajax({
                                  type:'POST',
                                  url:'ajaxData.php',
                                  data:'Locationid='+LocationID,
                                  success:function(html){
                                      $('#hub').html(html);
                                  }
                              }); 
                          }else{
                              $('#hub').html('<option value="">Select location first</option>'); 
                          }
                      });
                   
                   
                  });
               </script>
           <!--    <div class="row">
                  <div class="col-lg-12" style="padding-bottom: 1%; padding-top:1%; padding-left: 5%; padding-right: 5%;">
                     <center>
                        <h4>View's</h4>
                     </center>
                     <div class="table-responsive">
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
                                 $sql = mysqli_query($dbh, "SELECT *  FROM tblinfo WHERE UId='" . $_SESSION['uid'] . "'");
                                 $cnt = 1;
                                 while ($row = mysqli_fetch_array($sql)) {
                                 ?>
                              <tr>
                                 <td><?php echo $cnt; ?></td>
                                 <td><?php echo $row['Zone']; ?></td>
                                 <td><?php echo $row['Region']; ?></td>
                                 <td><?php echo $row['Location']; ?></td>
                                 <td><?php echo $row['Hub']; ?></td>
                                 <?php $cnt = $cnt + 1;
                                    } ?> 
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>-->
         </div>
         <hr>
      </div>
     <div class="container">
   <div class="row">
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <h3 class="card-header" align="center">MIS 1</h3>
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Name</label> <span style="color:red;font-weight:bold">*</span>
            <input name="mname" type="text" class="form-control"  placeholder="Enter Name" required>
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Email Id</label>
            <input name="memail" type="email" class="form-control"  placeholder="Enter Email Id">
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Contact No</label>
            <input name="mcontact" type="text" maxlength="10" class="form-control" onkeypress="return isNumberKey(event)"  placeholder="Enter Contact No">
         </div>
      </div>
   </div>
   <hr >
</div>
 <div class="container">
   <div class="row">
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <h3 class="card-header" align="center">MIS 2</h3>
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Name</label> <span style="color:red;font-weight:bold">*</span>
            <input name="mmname" type="text" class="form-control"  placeholder="Enter Name" >
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Email Id</label>
            <input name="mmemail" type="email" class="form-control"  placeholder="Enter Email Id">
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Contact No</label>
            <input name="mmcontact" type="text" maxlength="10" class="form-control" onkeypress="return isNumberKey(event)"  placeholder="Enter Contact No">
         </div>
      </div>
   </div>
   <hr >
</div>
<div class="container">
   <div class="row">
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <h3 class="card-header" align="center">Operation 1</h3>
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Name</label> <span style="color:red;font-weight:bold">*</span>
            <input name="oname" type="text" class="form-control"  placeholder="Enter Name" >
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Email Id</label>
            <input name="oemail" type="email" class="form-control"  placeholder="Enter Email Id">
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Contact No</label>
            <input name="ocontact" maxlength="10" type="text" class="form-control" onkeypress="return isNumberKey(event)"  placeholder="Enter Contact No">
         </div>
      </div>
   </div>
   <hr >
</div>
<div class="container">
   <div class="row">
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <h3 class="card-header" align="center">Operation 2</h3>
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Name</label> <span style="color:red;font-weight:bold">*</span>
            <input name="ooname" type="text" class="form-control"  placeholder="Enter Name" >
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Email Id</label>
            <input name="ooemail" type="email" class="form-control"  placeholder="Enter Email Id">
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Contact No</label>
            <input name="oocontact" type="text" maxlength="10" class="form-control" onkeypress="return isNumberKey(event)"  placeholder="Enter Contact No">
         </div>
      </div>
   </div>
   <hr >
</div>
<div class="container">
   <div class="row">
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <h3 class="card-header" align="center">Branch Manager</h3>
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Name</label> <span style="color:red;font-weight:bold">*</span>
            <input name="bmname" type="text" class="form-control"  placeholder="Enter Name" >
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Email Id</label>
            <input name="bmemail" type="email" class="form-control"  placeholder="Enter Email Id">
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Contact No</label>
            <input name="bmcontact" type="text" maxlength="10" class="form-control" onkeypress="return isNumberKey(event)"  placeholder="Enter Contact No">
         </div>
      </div>
   </div>
   <hr >
</div>
<div class="container">
   <div class="row">
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <h3 class="card-header" align="center">Service Deliver Manager</h3>
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Name</label> <span style="color:red;font-weight:bold">*</span>
            <input name="sdmname" type="text" class="form-control"  placeholder="Enter Name" >
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Email Id</label>
            <input name="sdmemail" type="email" class="form-control"  placeholder="Enter Email Id">
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Contact No</label>
            <input name="sdmcontact" type="text" maxlength="10" class="form-control" onkeypress="return isNumberKey(event)"  placeholder="Enter Contact No">
         </div>
      </div>
   </div>
   <hr >
</div>
<div class="container">
   <div class="row">
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <h3 class="card-header" align="center">Area Manager</h3>
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Name</label> <span style="color:red;font-weight:bold">*</span>
            <input name="amname" type="text" class="form-control"  placeholder="Enter Name" >
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Email Id</label>
            <input name="amemail" type="email" class="form-control"  placeholder="Enter Email Id">
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Contact No</label>
            <input name="amcontact" type="text" maxlength="10" class="form-control" onkeypress="return isNumberKey(event)" placeholder="Enter Contact No">
         </div>
      </div>
   </div>
   <hr >
</div>
<div class="container">
   <div class="row">
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <h3 class="card-header" align="center">Associate Director</h3>
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Name</label> <span style="color:red;font-weight:bold">*</span>
            <input name="adname" type="text" class="form-control"  placeholder="Enter Name" >
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Email Id</label>
            <input name="ademail" type="email" class="form-control"  placeholder="Enter Email Id">
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Contact No</label>
            <input name="adcontact" type="text" maxlength="10" class="form-control" onkeypress="return isNumberKey(event)"  placeholder="Enter Contact No">
         </div>
      </div>
   </div>
   <hr >
</div>
<div class="container">
   <div class="row">
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <h3 class="card-header" align="center">Director</h3>
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Name</label> <span style="color:red;font-weight:bold">*</span>
            <input name="dname" type="text" class="form-control"  placeholder="Enter Name" >
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Email Id</label>
            <input name="demail" type="email" class="form-control"  placeholder="Enter Email Id">
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="form-group">
            <label>Contact No</label>
            <input name="dcontact" type="text" maxlength="10" class="form-control" onkeypress="return isNumberKey(event)"  placeholder="Enter Contact No">
         </div>
      </div>
   </div>
   <hr >
</div>
<div class="container">
   <div class="row">
      <div class="form-group">
         <br >
         <center> <button type="submit" name="addinfo" class="button" align="center"><span>Submit </span></button></center>
         </form>
      </div>
   </div>
</div>
    
      <!-- Optional JavaScript -->
      <?php include ('includes/footer.php'); ?>
      <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
      <!-- CORE JQUERY  -->
      <!--  <script src="assets/js/jquery-1.10.2.js"></script>
         <script src="assets/js/jquery-3.3.1.min.js"></script>
            <script src="assets/js/jquery-3.3.1.min.map"></script>-->
			
	<!-- Only Number In TextBox -->
 <SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
	<!-- Only Number In TextBox -->	
			
			
      <!-- BOOTSTRAP SCRIPTS  -->
      <script src="assets/js/bootstrap.js"></script>
      <!-- DATATABLE SCRIPTS  -->
      <script src="assets/js/dataTables/jquery.dataTables.js"></script>
      <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
      <script src="assets/js/custom.js"></script>
   </body>
</html>