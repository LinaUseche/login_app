<?php 

include '../../controllers/userController.php';

if(isset($_POST['email_user']) && isset($_POST['pass_user'])){

	$email_user = $_POST['email_user'];
	$pass_user = $_POST['pass_user'];

	if(UserController::login($email_user, $pass_user)){
		session_start();
		$_SESSION['email_user'] = $_POST['email_user'];

		header('location: http://localhost/login2/views/admin/index.php'); 
	}
}