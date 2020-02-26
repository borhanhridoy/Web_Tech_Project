<?php
	session_start();
	
	

	$errors = array();
	
	if(isset($_POST['submit']))
	{
		$id = trim($_POST['id']);
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$name = trim($_POST['name']);
		$usertype = isset($_POST['user_type']) ? $_POST['user_type'] : '';
		
		if(empty($id))
		{
			$errors[] = 'ID Cannot be empty';
		}
		else if(strlen($id)<3)
		{
			$errors[] = 'ID Must be greater than 2 character';
		}
		
		if(empty($password))
		{
			$errors[] = 'Password Cannot be empty';
		}
		else if(strlen($password)<3)
		{
			$errors[] = 'Password must be greater than 2 character';
		}
		
		if(empty($repassword))
		{
			$errors[] = 'Confirm Password Cannot be empty';
		}
		else if($repassword!=$password)
		{
			$errors[] = 'Confirm password doesn\'t match';
		}
		
		if(empty($usertype))
		{
			$errors[] = 'Please choose an user type';
		}
		
		if(empty($errors))
		{
			$str = $id . '|' . $password . '|' . $name . '|' .$usertype;
			$fstream = fopen('datauser.txt', 'w');
			if($fstream)
			{
				fwrite($fstream, $str);
				fclose($fstream);
				header('location: home.php');
				exit;
			}
		}
	}
	
?>

<!DOCTYPE html>
<html lang="en_US">
	<head>
		<title>Registration</title>
	</head>
	<body>
		<form method="POST">
			<fieldset>
				<legend>REGISTRATION</legend>
				<?php if(!empty($errors)) : ?>
				<ul>
				<?php foreach($errors as $error) : ?>
					<li><?= $error ?></li>
				<?php endforeach; ?>
				</ul>
				<?php endif; ?>
				<label><b>ID</b></label><br>
				<input type="text" name="id" value="<?= isset($_POST['id']) ? $_POST['id'] : ''?>"><br>
				<label><b>Password</b></label><br>
				<input type="password" name="password"><br>
				<label><b>Confirm Password</b></label><br>
				<input type="password" name="repassword"><br>
				<label><b>Name</b></label><br>
				<input type="text" name="name" <?= isset($_POST['name']) ? $_POST['name'] : ''?>><br>
				<label><b>User Type</b></label><hr>
				<input type="radio" name="user_type" value="user"> User <input type="radio" name="user_type" value="Ambulance">Ambulance   <hr>
				<input type="submit" name="submit" value="Sign Up"> <a href="login.php">Sign In</a>
			</fieldset>
		</form>
	</body>
</html>
