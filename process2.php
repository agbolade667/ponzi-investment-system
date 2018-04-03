<?php

//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

require_once('./Connections/MMM.php');
mysql_select_db($database_MMM, $MMM);

$email = $_POST['memberid'];
$package = $_POST['status'];

  
$query = "SELECT * FROM register WHERE Email = '$email' " or die("error");
//mysql_select_db('register');

$sql = mysql_query($query) or die("You are logged out");

 while($row = mysql_fetch_array($sql)) {
	 	 
	 $id  = $row['id']; 	
	 $Fullnames = $row['Fullnames'];  	
	 $Username = $row['Username'];  	
	 $Phone = $row['Phone']; 	
	 $Email = $row['Email'];  	
	 $Password = $row['Password']; 	
	 $Bank = $row['Bank'];
	 $Account = $row['Account']; 	
	 $Matched = $row['Matched'];  	
	 $ReceiveMoney = $row['ReceiveMoney']; 	
	 $Package =  $row['Package'];
	 $Status =  $$row['Status'];
}
	 
	 $amount = '';
	 
	 if($package == "starter")
	 {
		 $amount = 'N20,000'; 
		 include("starter.php");
	 }
	 
	 else
		 if($package == "bronze")
			 {
				$amount = 'N50,000';
				 include("bronze.php");
			 }
	 else
		if($package == "gold")
			 {
				$amount = 'N100,000'; 
				 include("gold.php");
			 }
	 else
		 if($package == "diamond")
			 {
				$amount = 'N200,000'; 
				 include("diamond.php");
			 }
	  
	 echo "Hello " .$Username. " your id is " .$id;
	 
         echo "Phone number " . $user_Phone;  	  	
	 echo "<br/> Full names " . $user_Fullnames; 
	 echo "<br/> Bank name" . $user_Bank; 
	 echo "<br/> Account number " .  $user_Account; 
	 
	 
	 $query = "UPDATE register SET Status = 'You have been merged to $user_Fullnames. <br/> Please pay 

$amount to: <br/>
Account name: $user_Fullnames <br/>
Phone number: $user_Phone <br/>
Bank name: $user_Bank<br/>
Account Number:  $user_Account' 
	 
	 WHERE Email = '$email' ";
	 $sql = mysql_query($query);
	 
	$query2 = "UPDATE register SET Package = '$package'  WHERE Email = '$email' ";
	$sql2 = mysql_query($query2);
	
	
 $query_1 = "UPDATE register SET Status = 'A new user has been assigned to pay you.<br/>
Full names: $Fullnames <br/>
Phone number:  $Phone <br/>
Email: $Email' 
	 
	 WHERE Email = '$user_Email' ";
	 $sql_1 = mysql_query($query_1);
	 
	  $query_2 = "UPDATE starter SET Leg1 = 'true' WHERE Email = '$user_Email' ";
	  $sql_2 = mysql_query($query_2);
	
	header('Location: ./dashboard.php');

?>