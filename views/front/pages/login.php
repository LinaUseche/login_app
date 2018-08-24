<?php
include '../templates/head.php';
include '../templates/nav.php';
?>

<div class="form-login">
	<h1>Login</h1>
	<hr class="hr-login">

	<form class="" action="http://localhost/login2/views/front/validarCode.php" method="post">
		<input type="email" name="email_user" placeholder="Email" class="input-login" autofocus required>
		<input type="password" name="pass_user" placeholder="Contraseña" class="input-login" required>
		<button type="submit" name="btn-login" class="btn-login">Ingresar</button>
	</form>
</div>


<?php 
include '../templates/foot.php';
?>
