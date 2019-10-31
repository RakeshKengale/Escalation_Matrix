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
                <a href="index.php" class="navbar-brand">

                    <img src="assets/img/logo.jpg" />
                </a>

            </div>
<?php if($_SESSION['alogin'])
{
?>
            <div class="right-div">
                <a href="logout.php" class="btn btn-danger pull-right">LOG OUT</a>
            </div>
			 <?php }?>
        </div>
    </div>
    <!-- LOGO HEADER END-->
	<?php if($_SESSION['alogin'])
{
?> 
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="menu-top">DASHBOARD</a></li>
							<li><a href="user.php" class="menu">All User's</a></li>
							<li><a href="zone.php" class="menu">Zone</a></li>
							<li><a href="region.php" class="menu">Region</a></li>
							<li><a href="location.php" class="menu">Location</a></li>
							<li><a href="hub.php" class="menu">Hub</a></li>
							<li><a href="alldata.php" class="menu">Escalation Matrix</a></li>
							<li><a href="about1.php" class="menu">About</a></li>
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

                            <li><a href="../index.php">Home</a></li>                          
  <li><a href="about.php">About</a></li>

                             <li><a href="#"></a></li>
                          

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php } ?>