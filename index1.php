

<?php
   //Include the database configuration file
   include('includes/config.php');
   
   //Fetch all the zone data
   $query = $dbh->query("SELECT * FROM tblzone WHERE status = 1 ORDER BY Zonename ASC");
   
   //Count total number of rows
   
   $rowCount = $query->num_rows;
   ?>
<select id="zone">
   <option value="">Select Zone</option>
   <?php
      if($rowCount > 0){
          while($row = $query->fetch_assoc()){ 
              echo '<option value="'.$row['Zoneid'].'">'.$row['Zonename'].'</option>';
          }
      }else{
          echo '<option value="">Zone not available</option>';
      }
      ?>
</select>
<select id="region">
   <option value="">Select Region</option>
</select>
<select id="location">
   <option value="">Select Location</option>
</select>
<select id="hub">
   <option value="">Select Hub</option>
</select>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
       $('#zone').on('change',function(){
           var Zoneid = $(this).val();
           if(Zoneid){
               $.ajax({
                   type:'POST',
                   url:'ajaxData.php',
                   data:'Zoneid='+Zoneid,
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
           var Regionid = $(this).val();
           if(Regionid){
               $.ajax({
                   type:'POST',
                   url:'ajaxData.php',
                   data:'Regionid='+Regionid,
                   success:function(html){
                       $('#location').html(html);
                   }
               }); 
           }else{
               $('#location').html('<option value="">Select region first</option>'); 
           }
       });
	   
	   $('#location').on('change',function(){
           var Locationid = $(this).val();
           if(Locationid){
               $.ajax({
                   type:'POST',
                   url:'ajaxData.php',
                   data:'Locationid='+Locationid,
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

 <?php ?>