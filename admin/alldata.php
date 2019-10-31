

<?php
   session_start();
   //error_reporting(0);
   include('includes/config.php');
   if(strlen($_SESSION['alogin'])==0)
     { 
   header('location:index.php');
   }?>
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
	  <script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
   </head>
   <body>
      <?php include('includes/header.php');?>
      <div class="content-wrapper">
         <div class="container">
            <div class="row pad-botm">
               <div class="container">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="dashboard.php">
                           <h4>Home</h4>
                        </a>
                     </li>
                     <li class="breadcrumb-item active">Escalation Matrix</li>
                  </ol>
                  <hr />
               </div>
               <div class="col-md-12">
                  <center>
                     <h4 class="header-line"> Escalation Matrix</h4>
                  </center>
               </div>
               
               <div class="container">
                  <a href="download.php" type="submit" class="btn btn-success btn-lg" value='export'>Download in CSV</a>
                  <br >
                  <hr />
               </div>
               <div class="container">
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
                                          <th>UserID</th>
                                          <th>Zone</th>
                                          <th>Region </th>
                                          <th>Location</th>
                                          <th>Hub</th>
                                          <th>MIS 1</th>
                                          <th>MIS 2</th>
                                          <th>Operation 1 </th>
                                          <th>Operation 2</th>
                                          <th>Branch Manager</th>
                                          <th>Service Deliver Manager</th>
                                          <th>Area Manager</th>
                                          <th>Associate Director</th>
                                          <th>Director</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php $sql = "SELECT * from  tblinfo";
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
                                          <td class="center"><?php echo htmlentities($result->Uid);?></td>
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
										  
				<a href="javascript:void(0);" onClick="popUpWindow('viewdata.php?id=<?php echo ($result->id);?>');"><button class="btn btn-primary btn-xs"><i class="fa fa-search "></i> View</button> </a>
                                             <!--<a href="edit-category.php?catid=<?php echo htmlentities($result->id);?>"><button class="btn btn-primary btn-xs"><i class="fa fa-search "></i> View</button> -->
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

