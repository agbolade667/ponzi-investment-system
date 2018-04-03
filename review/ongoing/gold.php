<?php

$query = "INSERT INTO `mmm`.`gold` (
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
		
while($row = mysql_fetch_array($max_value)) {
	 	 
	 $current_id =  $row[0];	
echo "<script>alert($current_id)</script>";	 
}

$merge_number = $current_id - 1;
echo "<script>alert($merge_number)</script>";

//$query = "SELECT * FROM bronze WHERE id = '$merge_number' " or die("error");


$bronze_query = "SELECT * FROM bronze WHERE id = '$merge_number' " or die("error");
$bronze_sql = mysql_query($bronze_query) or die("You are logged out. <br><br> <a href='login.php'>LOGIN</a>");

echo mysql_num_rows($bronze_sql);

 while($row = mysql_fetch_array($bronze_sql)) {
	 	 
	 $bronze_id  = $row[0]; 	
	 $bronze_Fullnames = $row[1];  	  	
	 $bronze_Phone = $row[2];  	
	 $bronze_Email = $row[3];  	
	 $bronze_Bank = $row[4];  	
	 $bronze_Account = $row[5];  	
	 
 }
 
//echo "<br/><br/> id is ".$bronze_id;

echo "<br/>" . $bronze_Fullnames . "<br/>";

echo "User full names is <script>alert('$bronze_Fullnames')</script>";



 
?>

