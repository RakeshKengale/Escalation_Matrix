<?php
   session_start();
   //error_reporting(0);
   include('includes/config.php');
   $did=intval($_GET['id']);// get doctor id
   ?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS 

         <link rel="stylesheet" href="assets/css/style.css">
      <link href="assets/css/bootstrap.css" rel="stylesheet" />
      <!-- FONT AWESOME STYLE  -->
        <!-- <link href="assets/css/font-awesome.css" rel="stylesheet" />
      <!-- DATATABLE STYLE  -->
        <!--  <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
      <!-- CUSTOM STYLE  -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link href="assets/css/style.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <style>
            body {
                font-family: 'Ubuntu', sans-serif;
                line-height: 48px;
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
        <title>Escalation Matrix | View Information</title>
    </head>

    <body>

        <div class="container">
            <div align='center'>
                <h3>	
               View All Information
            </h3>
            </div>
            <hr>
            <div class="row">
                <?php 
                              $did=intval($_GET['id']);
                              $sql = "SELECT * from tblinfo WHERE id=:did";
                              $query = $dbh -> prepare($sql);
                              $query->bindParam(':did',$did,PDO::PARAM_STR);
                              $query->execute();
                              $results=$query->fetchAll(PDO::FETCH_OBJ);
                              $cnt=1;
                              if($query->rowCount() > 0)
                              {
                              foreach($results as $result)
                              {               ?>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="bg-primary text-white">
                                    <center>ZONE</center>
                                </th>
                                <th class="bg-primary text-white">
                                    <center>REGION</center>
                                </th>
                                <th class="bg-primary text-white">
                                    <center>LOCATION</center>
                                </th>
                                <th class="bg-primary text-white">
                                    <center>HUB</center>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <center>
                                        <?php echo htmlentities($result->Zone);?>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <?php echo htmlentities($result->Region);?>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <?php echo htmlentities($result->Location);?>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <?php echo htmlentities($result->Hub);?>
                                    </center>
                                </td>

                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-primary">
                        <tr>
                            <th class="bg-primary text-white" align="center" rowspan="2">
                                <center>MIS 1</center>
                            </th>
                            <th>
                                <center>Name</center>
                            </th>
                            <th>
                                <center>Email ID</center>
                            </th>
                            <th>
                                <center>Contact No.</center>
                            </th>

                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->MName);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->MEmailid);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->MContact);?>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white" align="center" rowspan="2">
                                <center>MIS 2</center>
                            </th>
                            <th>
                                <center>Name</center>
                            </th>
                            <th>
                                <center>Email ID</center>
                            </th>
                            <th>
                                <center>Contact No.</center>
                            </th>

                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->MMName);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->MMEmailid);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->MMContact);?>
                                </center>
                            </td>
                        </tr>

                        <tr>
                            <th class="bg-primary text-white" align="center" rowspan="2">
                                <center>OPERATION 1</center>
                            </th>
                            <th>
                                <center>Name</center>
                            </th>
                            <th>
                                <center>Email ID</center>
                            </th>
                            <th>
                                <center>Contact No.</center>
                            </th>

                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->OName);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->OEmailid);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->OContact);?>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white" align="center" rowspan="2">
                                <center>OPERATION 2</center>
                            </th>
                            <th>
                                <center>Name</center>
                            </th>
                            <th>
                                <center>Email ID</center>
                            </th>
                            <th>
                                <center>Contact No.</center>
                            </th>

                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->OOName);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->OOEmailid);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->OOContact);?>
                                </center>
                            </td>
                        </tr>

                        <tr>
                            <th class="bg-primary text-white" align="center" rowspan="2">
                                <center>BRANCH MANAGER</center>
                            </th>
                            <th>
                                <center>Name</center>
                            </th>
                            <th>
                                <center>Email ID</center>
                            </th>
                            <th>
                                <center>Contact No.</center>
                            </th>

                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->BMName);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->BMEmailid);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->BMContact);?>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white" align="center" rowspan="2">
                                <center>SERVICE DELIVER MANAGER</center>
                            </th>
                            <th>
                                <center>Name</center>
                            </th>
                            <th>
                                <center>Email ID</center>
                            </th>
                            <th>
                                <center>Contact No.</center>
                            </th>

                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->SDMName);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->SDMEmailid);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->SDMContact);?>
                                </center>
                            </td>
                        </tr>

                        <tr>
                            <th class="bg-primary text-white" align="center" rowspan="2">
                                <center>AREA MANAGER</center>
                            </th>
                            <th>
                                <center>Name</center>
                            </th>
                            <th>
                                <center>Email ID</center>
                            </th>
                            <th>
                                <center>Contact No.</center>
                            </th>

                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->AMName);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->AMEmailid);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->AMContact);?>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white" align="center" rowspan="2">
                                <center>ASSCIATE DIRECTOR</center>
                            </th>
                            <th>
                                <center>Name</center>
                            </th>
                            <th>
                                <center>Email ID</center>
                            </th>
                            <th>
                                <center>Contact No.</center>
                            </th>

                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->ADName);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->ADEmailid);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->ADContact);?>
                                </center>
                            </td>
                        </tr>

                        <tr>
                            <th class="bg-primary text-white" align="center" rowspan="2">
                                <center>DIRECTOR</center>
                            </th>
                            <th>
                                <center>Name</center>
                            </th>
                            <th>
                                <center>Email ID</center>
                            </th>
                            <th>
                                <center>Contact No.</center>
                            </th>

                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->DName);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->DEmailid);?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php echo htmlentities($result->DContact);?>
                                </center>
                            </td>
                        </tr>

                    </table>
            </div>
        </div>

        <?php }} ?>
            <!-- Optional JavaScript -->

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