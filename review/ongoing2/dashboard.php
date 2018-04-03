<?php

//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

require_once('./Connections/MMM.php');

?>


<?

$my_email = $_SESSION['MM_Username'];

mysql_select_db($database_MMM, $MMM);

$sql = mysql_query("SELECT * FROM `register` WHERE Email = '$my_email' ") or die(mysql_error());


 while($row = mysql_fetch_array($sql)) {
	 	 
	 $id  = $row[0]; 	
	 $Fullnames = $row[1];  	
	 $Username = $row[2];  	
	 $Phone = $row[3];  	
	 $Email = $row[4];  	
	 $Password = $row[5];  	
	 $Bank = $row[6];  	
	 $Account = $row[7];  	
	 $Matched = $row[8];  	
	 $ReceiveMoney = $row[9];  	
	 $Package =  $row[10]; 
	 $Status =  $row[11]; 
	 
 }
 
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>matrix fund</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

   

</head>

<body id="page-top">
		
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">matrixfund</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li>
                        <a class="page-scroll" href="dashboard.php">Dashborad</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="./apply.php">Packages</a>
                    </li>
						<li>
                        <a class="page-scroll" href="profile.php"><?php echo $Fullnames; ?></a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
					<li>
                        <a href="logout.php" class="page-scroll" >Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><?php echo $Fullnames; ?></h1>
				<h3 id="homeHeading">DASHBOARD</h3>
                <hr>
                <p>Your way to Financial Freedom</p>
                <h4>Users have 6hrs to make payment.The earlier you confirm and pay, the earlier you receive your money</h4>
                </div></div>
                </header>
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
 
                   <?php 
				   if($Package == "")
				   {
					   $Package = "YOU HAVE NOT APPLIED FOR ANY PACKAGE ";
				   echo "<h4>" . $Package . "</h4>";
echo "<p class='text-faded'>Apply for a package.<br> </p><hr class='light'><a href='./apply.php#services' class='btn btn-success btn-xl page-scroll'>Pick A Package</a><p></p>";                   					
                  
				   }
				   else
				   if($Package != "")
				   {
					      
				   echo "<h4>You have applied for the package <b> " .$Package. "</b></h4> ";  
				   }
				   ?>
                   
                </div>
            </div>
        </div>
    </section>
	
	
	 <section class="bg-primary" id="about" style="background-color:grey;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center"> 
								
			<?php 
								
				   if($Status == "")
				   {
					   $Status = "WAITING TO BE MERGED";
					   echo $Status;
				   }
				   
				  else if($Status != "")
					{
					echo $Status; 
					echo "<br/><br/><br/> Upload evidence of payment"; 				
					}

				?>	
					
					<center>
					<form action="upload.php" method="post" enctype="multipart/form-data">
    				<input type="file" name="fileToUpload" id="fileToUpload">
    				<input type="submit" value="Upload" name="Upload">
					</form>
					</center>
	
						</div>
					</div>
				</div>
												
</section>
    
    
    <section id="contact">
       <?php include('contact_section.php'); ?>
    </section>
	
	
<aside class="bg-dark" >
        <div class="container text-center">
            <div class="call-to-action">
                <h4>&copy; Copyright 2017 matrixfund<h4>
          </div>
        </div>
    </aside>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
<script src="js/registration.js"></script>

</body>

</html>
