<?php
//******** File name : storesmetadata.php  ****************//

include('storesconstants.php');
require_once("dbhelper.php");
header('Content-Type: application/json');

$db_helper=new DBHelper();

//if(!empty($_POST["keyword"])) {
	//$search_keyword=$_POST["keyword"];
	$stores_metadata=$db_helper->executeQuery(metadata_query);
        echo json_encode($stores_metadata);
//}





?>