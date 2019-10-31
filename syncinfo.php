

<?php
   session_start();
   //error_reporting(0);
   include('includes/config1.php');
   if(strlen($_SESSION['login'])==0)
     { 
   header('location:index.php');
   }
   
   if(isset($_GET['up']))
   		  {
    
   		         $query = mysqli_query($dbh,"UPDATE
    tblinfo
   LEFT JOIN tblzone ON tblinfo.Zone = tblzone.Zoneid
   LEFT JOIN tblregion ON tblinfo.Region = tblregion.Regionid
   LEFT JOIN tbllocation ON tblinfo.Location = tbllocation.Locationid
   LEFT JOIN tblhub ON tblinfo.Hub = tblhub.id
   SET
   
    tblinfo.Zone = tblzone.Zonename,
    tblinfo.Region = tblregion.Regionname,
    tblinfo.Location = tblLocation.Locationname,
    tblinfo.Hub = tblhub.Hubname,
   tblinfo.Status=1
   WHERE
    tblinfo.id ='".$_GET['id']."'");
                    if ($query) {
   
   		header("Location:dashboard.php");
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
      <title>Escalation Matrix | Synchronize Information</title>
   </head>
   <body>
      <?php include('includes/header.php');?>
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-lg-3">
               <div class="form-group">
                  <h3>	
                     User Id -
                     <i class="text-muted"><?php echo $_SESSION["uid"]?></i>
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
                     <i class="text-muted"><?php echo $_SESSION["fullname"]?></i>
                  </h3>
               </div>
            </div>
         </div>
         <hr>
      </div>
      <!--Table-->
      <div class="container">
         <div align='center'>
            <h3>	
               Sync Information
            </h3>
         </div>
         <hr>
         <div class="row pad-botm">
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
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    $sql=mysqli_query($dbh,"SELECT *  FROM tblinfo WHERE Status=0");
                                    $cnt=1;
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                    ?>                               
                                 <tr class="odd gradeX">
                                    <td class="center"><?php echo $cnt;?></td>
                                    <td><?php echo $row['Zone'];?></td>
                                    <td><?php echo $row['Region'];?></td>
                                    <td><?php echo $row['Location'];?></td>
                                    <td><?php echo $row['Hub'];?></td>
                                    <td class="center">
                                       <button type="button" class="btn btn-success btn-lg"><a href="syncinfo.php?id=<?php echo $row['id']?>&up=Sync" onClick="return confirm('You can only once for Number Infield, So be careful...!')"><i class="fa fa-refresh" style="color:#FFFFFF;"> Sync Info</i></a> </button>				   
                                    </td>
                                 </tr>
                                 <?php $cnt=$cnt+1;} ?>                                      
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

