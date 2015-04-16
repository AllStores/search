<?php
$servername = "localhost";
$username = "allstores";
$password = "allstores";
$dbname = "allstores";

echo "1";

$link = mysql_connect('localhost', 'allstores', 'allstores')
    or die('Could not connect: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('allstores') or die('Could not select database');


try{

throw new Exception("error came");
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
  error_log($e, 3, "/home/allstorespanel/allstores_log/error.log");
}




echo "2";
?>