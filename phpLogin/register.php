<?php

if ($_POST['regCheck'] != 'on'){
	header("location:account.php?error=tac0");
	die();
}

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "phplogin";


$newID = "U_" . strval(str_pad(random_int(000, 999),3, '0', STR_PAD_LEFT));
$newUser = $_POST['regUsername'];
$newEmail = $_POST['regEmail'];
$newPassword = $_POST['regPassword'];
$newConfirm = $_POST['regConfirm'];
$passHash = password_hash($newPassword, PASSWORD_DEFAULT);



if ($newPassword == $newConfirm){
	
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "INSERT INTO logindetails (userID, username, email, password)
	    VALUES ('" . $newID . "', '".$newUser."', '".$newEmail."', '".$passHash."')";
	    // use exec() because no results are returned
	    $conn->exec($sql);
	    
	    session_start();

	    $_SESSION['username'] = $newUser;
	    
	    header("location:dashboard.php");

	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

	$conn = null;

} else {

	header("location:account.php?error=cnfP0");


}


?>