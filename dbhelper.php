<?php
class DBHelper {
	private static $host = "localhost";
	private static $username = "allstores";
	private static $password = "allstores";
	private static $database = "allstores";
	static $stores_metadata_json;
	
	private static $conn;
	
		
        static function init(){
		try{
		self::$conn= new mysqli($host, self::$username, self::$password, self::$database);
		}
		catch(Exception $e){
		echo " DB connection not created ...";
		error_log($e->getMessage(), 3, "/home/allstorespanel/allstores_log/error.log");
		}
        	
	}
		
	   
	function executeQuery($query) {
	   	   
	    //echo $query;
	    //$result=self::$conn->query("select merchant_name from stores_metadata ");
	    

	    
		    $result=self::$conn->query($query);
		    if($result->num_rows > 0){
		     $rows = array();
			   			    
			    while($row = $result->fetch_assoc()) {
			    $rows[] = $row;
		            //echo $row["merchant_name"];
		            }
		            
		                   
		          return json_encode($rows);
		    }
		    else{
		    	echo "no data found via executeQuery method ";
		    	error_log("no data found via executeQuery method", 3, "/home/allstorespanel/allstores_log/error.log");
		    }
	    
	
	}
	
	
	function executeQueryOtherMethod(){
	
         	echo "<hr><br/>";
	
    		echo "Entering executeQueryOtherMethod....";
		mysql_connect('localhost', 'grocery', 'grocery') or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.')</script></html>");
        	mysql_select_db('grocery' );

		# Check If Record Exists
		
		$query = "SELECT distinct id_profile  FROM groceryaccess limit 10";
		
		$result = mysql_query($query);
		
		if($result)
		{
		  while($row = mysql_fetch_array($result))
		  {
		    $name = $row["id_profile"];
		    echo "Name: ".$name."<br>";
		  }
		}
		else{
		echo "<>";
		echo " no result via executeQueryOtherMethod()";
		}
			
	}
	
	
	
	
}


DBHelper::init(); // initiliaze the DB resource 


?>