<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_DATABASE', 'it255-dz10');

	header('Access-Control-Allow-Origin: *'); 
	$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	if ($conn->connect_error) {
   		die("Greska: " . $conn->connect_error);
	}
  	function getAllJela(){
  	  global $conn;
	  $jelainfo = "SELECT * FROM meni";
	  if($stmt = $conn->prepare($jelainfo)) 
	  {
	    $stmt->execute();
	    if(!$stmt->execute()) 
	    { 
	            echo $stmt->error.' in query: '.$userinfo; 
	    }
	    else {
	        $parameters = array();
	        $result = $stmt->get_result();
	        while ($row = $result->fetch_assoc()) {
	          array_push($parameters,$row);
	        }
	        $stmt->close(); 
	        return $parameters;
	    }
	    $stmt->close();
	  }
	}
	header("Content-type: application/json");
	echo json_encode(getAllJela());
?>

