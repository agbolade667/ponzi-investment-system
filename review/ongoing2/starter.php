<?php


echo "<br/>Full names is " . $Fullnames;
echo "<br/>Phone is " . $Phone;
echo "<br/>Email is " . $Email;
echo "<br/>Bank name is " . $Bank;
echo "<br/>Account number is " . $Account;


$query = "INSERT INTO starter (
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
        . ' FROM `starter`'; 
$max_value = mysql_query($sql); 
		
while($row = mysql_fetch_array($max_value)) 
{ 	 
	 $current_id =  $row[0];	
}

$query5 = "SELECT * FROM starter WHERE id <= $current_id " or die("error");

$sql5 = mysql_query($query5) or die("You are logged out. <br><br> <a href='login.php'>LOGIN</a>");

$count = mysql_num_rows($sql5);

for($counter = 1; $counter <= $count; $counter++)
{

$query55 = "SELECT * FROM starter WHERE id = '$counter' " or die("error");
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


$query555 = "SELECT * FROM starter WHERE id = '$current_row' " or die("error");
$sql555 = mysql_query($query555) or die("You are logged out. <br><br> <a href='login.php'>LOGIN</a>");

while($row = mysql_fetch_array($sql555)) {

	 $user_Fullnames = $row['Fullnames'];  	  	
	 $user_Phone = $row['Phone'];
	 $user_Email = $row['Email']; 		
	 $user_Bank =  $row['Bank'];  	
	 $user_Account = $row['Account'];  		
}	 

         echo "<br/>Username " . $user_Phone;  
         echo "<br/>Phone number is " . $user_Phone;  	  	
	 echo "<br/> Full names is " . $user_Fullnames; 
	 echo "<br/> Bank name is " . $user_Bank; 
	 echo "<br/> Account number is " .  $user_Account; 
exit();	 
	 
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
?>