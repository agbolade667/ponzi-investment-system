<?php


echo "<br/>Full names is " . $Fullnames;
echo "<br/>Phone is " . $Phone;
echo "<br/>Email is " . $Email;
echo "<br/>Bank name is " . $Bank;
echo "<br/>Account number is " . $Account;


$query = "INSERT INTO diamond (
`id` ,
`full_names` ,
`phone` ,
`email` ,
`bank_name` ,
`account_number`
)
VALUES (
NULL , '$Fullnames', '$Phone', '$Email', '$Bank', '$Account'
)";

$sql2  = mysql_query($query); 	 

$sql = 'SELECT MAX( id )'
        . ' FROM `diamond`'; 
$max_value = mysql_query($sql); 
		
while($row = mysql_fetch_array($max_value)) 
{ 	 
	 $current_id =  $row[0];	
}

$query5 = "SELECT * FROM diamond WHERE id <= $current_id " or die("error");

$sql5 = mysql_query($query5) or die("You are logged out. <br><br> <a href='login.php'>LOGIN</a>");

$count = mysql_num_rows($sql5);

for($counter = 1; $counter <= $count; $counter++)
{

$query55 = "SELECT * FROM diamond WHERE id = '$counter' " or die("error");
$sql55 = mysql_query($query55) or die("You are logged out. <br><br> <a href='login.php'>LOGIN</a>");

while($row = mysql_fetch_array($sql55)) {
	 	 
	 $starter_id  = $row[0]; 	
	 $starter_Paid = $row[7];  
	 $starter_Leg1 = $row[8];  
	 $starter_Leg2 = $row[9]; 
	  
	 if($starter_Paid == "true") 
	 {
         if($starter_Leg1 != "true" || $starter_Leg2 != "true")  
	 $current_row = $starter_id;
	 }
	 
	break;
}
}
	
echo "<script>alert('$current_row')</script>";


$query555 = "SELECT * FROM diamond WHERE id = '$current_row' " or die("error");
$sql555 = mysql_query($query555) or die("You are logged out. <br><br> <a href='login.php'>LOGIN</a>");

while($row = mysql_fetch_array($sql555)) {

	 $user_Fullnames = $row['full_names'];  	  	
	 $user_Phone = $row['phone'];
	 $user_Email = $row['email']; 		
	 $user_Bank =  $row['bank_name'];  	
	 $user_Account = $row['account_number'];  	

         $user_time = $row['time'];  	
         $user_paid = $row['paid'];  	
         $user_leg1 = $row['leg1'];  	
         $user_leg2 = $row['leg2'];  	

}	 

 	 	 	 	
    
     echo "<br/>Username " . $user_Phone;  
         echo "<br/>Phone number is " . $user_Phone;  	  	
	 echo "<br/> Full names is " . $user_Fullnames; 
	 echo "<br/> Bank name is " . $user_Bank; 
	 echo "<br/> Account number is " .  $user_Account; 

	 echo "<br/> time is " .  $user_time; 
	 echo "<br/> paid = " .  $user_paid; 
	 echo "<br/> leg1 =  " .  $user_leg1; 
	 echo "<br/> leg2 =  " .  $user_leg2; 

	 
	 
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
	 

         if($user_leg1 == "")	
{        
	  $query_2 = "UPDATE diamond SET Leg1 = 'true' WHERE Email = '$user_Email' ";
	  $sql_2 = mysql_query($query_2);
}

 else if($user_leg2 == "")	
{        
	  $query_2 = "UPDATE diamond SET Leg2 = 'true' WHERE Email = '$user_Email' ";
	  $sql_2 = mysql_query($query_2);
}


else if( ($user_leg1 == "") && ($user_leg2 == "") )
{
echo "<script>alert('You cannot be matched at this time. Please try again in 24 hours' time</script>";
}

else if( ($user_leg1 == "true") && ($user_leg2 == "true") )
{
echo "<script>alert('You cannot be matched at this time. Please try again in 24 hours' time</script>";
}


//exit();
	
	header('Location: ./dashboard.php');

?>