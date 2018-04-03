<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

require_once('./Connections/MMM.php');

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
                <p>
				
				<table align="center">

				<tr>
				<td>Username</td>
				<td><?php echo $Username; ?></td>
				</tr>
				
				<tr>
				<td>Phone</td>
				<td><?php echo $Phone; ?></td>
				</tr>
				
				<tr>
				<td>Email</td>
				<td><?php echo $Email; ?></td>
				</tr>
				
				<tr>
				<td>Bank name</td>
				<td><?php echo $Bank; ?></td>
				</tr>
				
				<tr>
				<td>Account</td>
				<td><?php echo $Account; ?></td>
				</tr>
				
				<tr>
				<td>Package</td>
				<td><?php echo $Package; ?></td>
				</tr>
				
				</table>
				
				
                </div></div>
                </header>
	
	  
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
