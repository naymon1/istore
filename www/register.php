
<?php
$page_title = "Register";

include "includes/header.php";

if(array_key_exists('register', $_POST)) {
	#cache errors
	$errors = [];

	#validaton firsnmae

	if(empty($_POST['firstname'])) {
		$errors [] = "please enter firstname".'</br>';
	}

	if(empty($_POST['lastname'])){
		$errors [] = "please enter lastname".'</br>';
	}

	if(empty($_POST['email'])) {
		$errors [] = "PLEASE ENTER email".'</br>';
	}

	if(empty($_POST['password'])) {
		$errors [ ] = "enter password".'</br>';
	}
	if(empty($_POST['confirmed password'])) {
		$errors[] = "please enter confirmed password".'</br>';
	}

	if(empty($errors)) {

	}else{
		foreach ($errors as $err) {
			# code 
			echo $err;
		}
	}
}







?>
 
	<div class="wrapper">
		<h1 id="register-label">Admin Register</h1>
		<hr>
		<form id="register"  action ="register.php" method ="POST">
			<div>
				<label>first name:</label>
				<input type="text" name="fname" placeholder="first name">
			</div>
			<div>
				<label>last name:</label>	
				<input type="text" name="lname" placeholder="last name">
			</div>

			<div>
				<label>email:</label>
				<input type="text" name="email" placeholder="email">
			</div>
			<div>
				<label>password:</label>
				<input type="password" name="password" placeholder="password">
			</div>
 
			<div>
				<label>confirm password:</label>	
				<input type="password" name="pword" placeholder="password">
			</div>

			<input type="submit" name="register" value="register">
		</form>

		<h4 class="jumpto">Have an account? <a href="login.php">login</a></h4>
	<?php 

include "includes/footer.php";
	?>