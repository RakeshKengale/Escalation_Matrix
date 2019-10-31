

<?php
   //Include the database configuration file
    include('includes/config1.php');
   
   if(!empty($_POST["Zoneid"])){
       //Fetch all region data
       $query = $dbh->query("SELECT * FROM tblregion WHERE Zoneid = ".$_POST['Zoneid']." AND status = 1 ORDER BY Regionname ASC");
       
       //Count total number of rows
       $rowCount = $query->num_rows;
       
       //region option list
       if($rowCount > 0){
           echo '<option value="">Select Region</option>';
           while($row = $query->fetch_assoc()){ 
               echo '<option value="'.$row['Regionid'].'">'.$row['Regionname'].'</option>';
           }
       }else{
           echo '<option value="">Region not available</option>';
       }
   }elseif(!empty($_POST["Regionid"])){
       //Fetch all location data
       $query = $dbh->query("SELECT * FROM tbllocation WHERE Regionid = ".$_POST['Regionid']." AND status = 1 ORDER BY Locationname ASC");
       
       //Count total number of rows
       $rowCount = $query->num_rows;
       
       //location option list
       if($rowCount > 0){
           echo '<option value="">Select Location</option>';
           while($row = $query->fetch_assoc()){ 
               echo '<option value="'.$row['Locationid'].'">'.$row['Locationname'].'</option>';
           }
       }else{
           echo '<option value="">Location not available</option>';
       }
   }
   elseif(!empty($_POST["Locationid"])){
       //Fetch all Hub data
       $query = $dbh->query("SELECT * FROM tblhub WHERE Locationid = ".$_POST['Locationid']." AND status = 1 ORDER BY Hubname ASC");
       
       //Count total number of rows
       $rowCount = $query->num_rows;
       
       //Hub option list
       if($rowCount > 0){
           echo '<option value="">Select Hub</option>';
           while($row = $query->fetch_assoc()){ 
               echo '<option value="'.$row['id'].'">'.$row['Hubname'].'</option>';
           }
       }else{
           echo '<option value="">Location not available</option>';
       }
   }
   ?>

