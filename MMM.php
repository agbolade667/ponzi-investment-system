<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_MMM = "localhost";
$database_MMM = "matrixfundonline_mmm";
$username_MMM = "matrixfundonline_root";
$password_MMM = "root@wdp2017";
$MMM = mysql_pconnect($hostname_MMM, $username_MMM, $password_MMM) or trigger_error(mysql_error(),E_USER_ERROR); 
?>