<?php

//initialize the session

if (!isset($_SESSION())) {
  header('location: index.html');
}


require_once('./Connections/MMM.php');

?>