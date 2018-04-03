


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

<?php

require_once('../Connections/MMM.php'); 
$email = $_POST["email"];
$query = "SELECT * FROM mmm WHERE Email = '$email'";
$sql = mysql_query($query);
if(mysql_num_rows("$sql") > 0){

echo "Found";
	
}

/*
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contact us. As early as possible  we will contact you '
	);
*/

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'email@email.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    //echo json_encode($status);
    //die;
	
	?>
		
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
		 <div>
			<form role="form" method="post" action="#" autocomplete="off">
				<h2>Your password has been sent to your e-mail and phone number</h2>
				

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
                <h4>&copy; Copyright 2017 MATRIXFUND<h4>
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


<!-- Mirrored from www.MATRIXFUND.com/reset.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2017 01:21:23 GMT -->
</html>
