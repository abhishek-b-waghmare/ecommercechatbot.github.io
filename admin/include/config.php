<?php
define('DB_SERVER','sql311.epizy.com');
define('DB_USER','epiz_30921253');
define('DB_PASS' ,'GswAmg8UOUidoaz');
define('DB_NAME', 'epiz_30921253_chatbotdb');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>