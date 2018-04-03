<?php
//initialimatrixfunde the session
if (!isset($_SESSION)) {
  session_start();
}

require_once('../Connections/MMM.php');

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.html";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>


<?

$email = $_SESSION['MM_Username'];
$query = "SELECT * FROM register WHERE Email = '$email' " or die("error");
//mysql_select_db('register');

$sql = mysql_query($query) or die("You are logged out");

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
	 
	      //for ($j = 0; $j<=10; $j++)
		 //echo "<script> alert('$row[$j]')</script>";
	     //echo "<script> alert(' Your package is: $Package')</script>";
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
                        <a href="<?php echo $logoutAction ?>" class="page-scroll" >Logout</a>
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
 
                   
					<p class="text-faded">Apply for a package.<br> </p><hr class="light"><a href="http://www.MATRIXFUND.com/packages.php" class="btn btn-success btn-xl page-scroll">Pick A Package</a><p></p>                   
                    
                </div>
            </div>
        </div>
    </section>
	
	
	  <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Packages</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
       
        
        
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons" data-sr-id="2" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bematrixfundier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bematrixfundier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bematrixfundier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bematrixfundier(0.6, 0.2, 0.1, 1) 0s; "></i>
                        <h3>STARTER</h3>
                        <p class="text-muted">You make a donation of:</p>
						<p class="text-muted">₦10,000</p>
						<p class="text-muted">Recieve:</p>
						<p class="text-muted">₦30,000</p>
						<form method="POST" action="package.php">
						<input name="memberid" value="1795" type="hidden">
						<input name="status" value="10k" type="hidden">
                                                <button name="btn-10k" class="btn btn-success btn-xl page-scroll">Apply</button>						</form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons" data-sr-id="3" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bematrixfundier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bematrixfundier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bematrixfundier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bematrixfundier(0.6, 0.2, 0.1, 1) 0s; "></i>
                        <h3>BRONmatrixfundE</h3>
                        <p class="text-muted">You make a donation of:</p>
						 <p class="text-muted">₦20,000</p>
						 <p class="text-muted">Recieve:</p>
						<p class="text-muted">₦60,000</p>
						<form method="POST" action="package.php">
						<input name="memberid" value="1795" type="hidden">
						<input name="status" value="20k" type="hidden">
						<button name="btn-20k" class="btn btn-success btn-xl page-scroll">Apply</button>						</form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons" data-sr-id="4" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bematrixfundier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bematrixfundier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bematrixfundier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bematrixfundier(0.6, 0.2, 0.1, 1) 0s; "></i>
                        <h3>GOLD</h3>
                         <p class="text-muted">You make a donation of:</p>
						 <p class="text-muted">₦40,000</p>
						 <p class="text-muted">Recieve:</p>
						<p class="text-muted">₦120,000</p>
						<form method="POST" action="package.php">
						<input name="memberid" value="1795" type="hidden">
						<input name="status" value="40k" type="hidden">
						<button name="btn-40k" class="btn btn-success btn-xl page-scroll">Apply</button>						</form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons" data-sr-id="5" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bematrixfundier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bematrixfundier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bematrixfundier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bematrixfundier(0.6, 0.2, 0.1, 1) 0s; "></i>
                        <h3>DIAMOND</h3>
                         <p class="text-muted">You make a donation of:</p>
						 <p class="text-muted">₦50,000</p>
						 <p class="text-muted">Recieve:</p>
						<p class="text-muted">₦150,000</p>
						<form method="POST" action="package.php">
						<input name="memberid" value="1795" type="hidden">
						<input name="status" value="50k" type="hidden">
						<button name="btn-50k" class="btn btn-success btn-xl page-scroll">Apply</button>						</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<hr/>
        
    </section>
	
    <section id="contact">
       <?php include('contact_section.php'); ?>
    </section>
	
                 <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h4>© Copyright 2017 MATRIXFUND</h4><h4>
            </h4></div>
        </div>
    </aside>
    <!-- jQuery -->
    <script src="package_files/jquery_003.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="package_files/bootstrap.js"></script>

    <!-- Plugin JavaScript -->
    <script src="package_files/jquery_002.js"></script>
    <script src="package_files/scrollreveal.js"></script>
    <script src="package_files/jquery.js"></script>

    <!-- Theme JavaScript -->
    <script src="package_files/creative.js"></script>




</body></html>