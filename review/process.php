<?php

//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

require_once('../Connections/MMM.php');

$email = $_POST['memberid'];
$package = $_POST['status'];

  
$query = "SELECT * FROM register WHERE Email = '$email' " or die("error");
//mysql_select_db('register');

$sql = mysql_query($query) or die("You are logged out. <br><br> <a href='login.php'>LOGIN</a>");

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
	 
	 $amount = '';
	 
	 if($package == "starter")
		 $amount = 'N25,000'; 
	 
	 else
		 if($package == "bronze")
		 $amount = 'N50,000';
	 
	 else
		 if($package == "gold")
		 $amount = 'N25,000'; 
	 
	 else
		 if($package == "diamond")
		 $amount = 'N25,000'; 
	 
		 
$info = "You have been merged to Engineer Douglas. <br/> Please pay $amount to: <br/>
Account name: Engineer Douglas <br/>
Bank name: $Bank <br/>
Account Number:  $Account "; 

	 //$query = "UPDATE register SET Status = '$info' AND Package = '$package' WHERE Email = '$email' ";
	 
	 $query = "UPDATE register SET Status = 'You have been merged to AKHUETIE HENRY. <br/> Please pay $amount to: <br/>
Account name: AKHUETIE HENRY <br/>
Bank name: G T Bank. <br/>
Account Number:  0131914310' 
	 
	 WHERE Email = '$email' ";
	 $sql = mysql_query($query);
	 
	 
	$query2 = "UPDATE register SET Package = '$package'  WHERE Email = '$email' ";
	$sql2 = mysql_query($query2);

	header('Location: ./dashboard.php');

?>