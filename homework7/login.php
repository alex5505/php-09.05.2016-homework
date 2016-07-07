<?php 
	session_start();
	
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';

	if ($username == 'Alex' && $password == '12345') {
		$_SESSION['user'] = array('username' => $username,
								  'password' => $password);
		header('Location: members.php');
	} else {
		header('Location: index.php');
	}
?>