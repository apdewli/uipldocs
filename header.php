<?php
session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Welcome to UIPL Documents</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>


	<?php if( !empty($user) ): ?>
	<div class="header">
		<table  width="100%"><tr ><td><a href="/">Umbrella Infocare Documents</a></td><td><a href="logout.php">Logout</a></td><td><?php echo  $user['email']; ?></td></tr></table>

	</div>

	<?php else: ?>

		<h1>Please Login or Register</h1>
		<a href="login.php">Login</a> or
		<a href="register.php">Register</a>

	<?php endif; ?>
