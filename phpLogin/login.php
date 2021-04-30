<?php

/*some kind of change*/

if (!empty($_POST['loginUsername']) && !empty($_POST['loginPassword'])){

	$logUser = $_POST['loginUsername'];
	$logPass = $_POST['loginPassword'];

	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "phplogin";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $stmt = $conn->prepare("SELECT * FROM logindetails WHERE username = '".$logUser."'");
	    $stmt->execute();

	    // set the resulting array to associative
	    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	    
	    if ($stmt->rowCount() > 0){

		    foreach($stmt->fetchAll() as $col => $val){

		    	if (password_verify($logPass, $val['password'])){

		    		
		    		session_start();
		    		
		    		$_SESSION['username'] = $val['username'];
		    		
		    		header("location:dashboard.php");

		    		
		    	} else {
		    		header("location:account.php?error=bpm0");
		    	}
		    }
		} else {
			header("location:account.php");
		}

	}
	catch(PDOException $e) {
	    echo "Error: " . $e->getMessage();
	}
	$conn = null;
} else {
	header("location:account.php");
}
?>