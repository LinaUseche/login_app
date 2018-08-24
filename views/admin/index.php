<?php

session_start ();
if (isset ($_SESSION['email_user'])){
	echo'
	<p> 
	Bienvenido prro: '. $_SESSION['email_user'] .'
	</p>
	';
}
?>