<?php

session_start();

// remove all session variables

session_unset($_SESSION['MM_Username']); 
header("Location: index.html");

?>