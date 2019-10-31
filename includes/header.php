<?php
   //session_start();
  error_reporting(0);
  
   ?>

<div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
				 
               <a class="navbar-brand" href="index.php">

                    <img src="assets/img/logo.jpg" />
                </a>

            </div>
<?php if($_SESSION['login'])
{
?> 
            <div class="right-div">
                <a href="logout.php" class="btn btn-danger pull-right">LOG OUT</a>
            </div>
            <?php }?>
        </div>
    </div>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['login'])
{
?>    
<section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="menu-top">DASHBOARD</a></li>
                            <li><a href="addinfo.php" class="menu-top">Add Information</a></li>
                            <li><a href="myrecord.php" class="menu-top">My Record's</a></li>
                            <li><a href="about1.php" class="menu-top">About</a></li>
                           
                          
   
                            
                          

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php } else { ?>
        <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">                        
                          
  <li><a href="admin/index.php">Admin Login</a></li>
                            <li><a href="register.php">registration</a></li>
                             <li><a href="index.php">Login</a></li>
							 <li><a href="about.php" class="menu-top">About</a></li>
                          

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php } ?>