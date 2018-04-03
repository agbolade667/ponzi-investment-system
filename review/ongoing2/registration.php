<?php require_once('../../Connections/MMM.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "register")) {
  $insertSQL = sprintf("INSERT INTO register (Fullnames, Username, Phone, Email, Password, Bank, Account, Matched, location) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['phone'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['bank'], "text"),
                       GetSQLValueString($_POST['actnum'], "text"),
                       GetSQLValueString($_POST['matched'], "text"),
                       GetSQLValueString($_POST['location'], "text"));

  mysql_select_db($database_MMM, $MMM);
  $Result1 = mysql_query($insertSQL, $MMM) or die(mysql_error());

  $insertGoTo = "login.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
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

    <title>MATRIXFUND</title>

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
		
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index-2.html">matrixfund</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="./index.html#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="./index.html#services">Packages</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="faq.html">FAQ</a>
                    </li>
					 <li>
                        <a class="page-scroll" href="login.php">Login</a>
                    </li>
					 <li>
                        <a class="page-scroll" href="./index.html#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="registration.php">JOIN</a>
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
                <div class="container">
    <div class="row">
        <div class="col-md-6 center-block">
		 <form action="<?php echo $editFormAction; ?>" name="register" method="POST" id="register" >
		 <div>
			Register matrixfund
		 </div><br>
		 <div>
	 		  </div>
                        <div class="form-group">
                           
						   <div class="input-group">
						   <span class="input-group-addon"><i class="fa fa-female"></i></span>
                                <input id="name" pattern="[a-z A-Z]*" class="form-control" placeholder="Enter your fullname" value="" name="name" required autofocus type="text">
						  </div>
			  </div>
                            
                        <div class="form-group">
                           
                           <div class="input-group">
						   <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input id="username" placeholder="Enter Username" class="form-control" name="username"  required="" value="" type="text">
						  </div>
                        </div>

                        

                        <div class="form-group">
                           
							<div class="input-group">
						   <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input id="phone" pattern="[0-9]{11}" placeholder="Enter phone number" class="form-control" 
                                name="phone" required value="" type="text">
							</div>
                        </div>
						   <div class="form-group">
                           
                            <div class="input-group">
						   <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input id="email" placeholder="Enter email address" class="form-control" name="email" value=""  required="" type="email">
							</div>
                          
                        </div>


                        <div class="form-group">
                           
						   <div class="input-group">
						   <span class="input-group-addon"><i class="fa fa-female"></i></span>
                             <input id="location" pattern="[a-z A-Z]*" class="form-control" placeholder="Enter your location" value="" name="location" required autofocus type="text">
						  </div>
			  </div>
                            
                            
                        <div class="form-group">
                            
							<div class="input-group">
						   <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input id="password" placeholder="Enter password" class="form-control" name="password" required type="password">
							</div>
						</div>


						<div class="form-group">
                            
							<div class="input-group">
						   <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input id="bank" placeholder="Bank Name" class="form-control" name="bank" required type="text">
							</div>
						</div>
						<div class="form-group">
                            
							<div class="input-group">
						   <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input id="actnum" pattern="[0-9]*" placeholder="Account Number" class="form-control" name="actnum" required type="text">
							</div>
						</div>
                       

						
                        
                            
							 <a href="#"> Terms & conditions</a>
                             <input type="hidden" id="matched" name="matched" value="none">
						
                        <div class="form-group">
                           
                                <button type="submit" name="btn-register" class="btn  btn-block" id="btn-register" style="background-color:#4682B4;">
                                    <i class="fa fa-check-circle"></i> Create account
                                </button>
                           
                            
                            
                        </div>
                        <input type="hidden" name="MM_insert" value="register">
         </form>
							</div>
                  </div>
		      </div>
	      </div>
      </div>
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
