<?php
	session_start();
	
	if(!isset($_SESSION['login']) || !$_SESSION['login'])
	{
		header('location: login.php');
		die();
	}
	
	$fstream = fopen('data.txt', 'r');
	if($fstream)
	{
		$fdata = fread($fstream, filesize('data.txt'));
		fclose($fstream);
		$user = explode('|', $fdata);
	}
	else
	{
		die('System Error!');
	}
?>
<!DOCTYPE html>
<html lang="en_US">
	<head>
		<title><?= $user[3]=='admin' ? 'Admin\'s Home' : 'User\'s Home' ?></title>
	</head>
	<body>
		<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<td colspan="2" align="center">
					Profile
				</td>
			</tr>
			<tr>
				<td>
					ID
				</td>
				<td>
					<?= $user[0] ?>
				</td>
			</tr>
			<tr>
				<td>
					NAME
				</td>
				<td>
					<?= $user[2] ?>
				</td>
			</tr>
			<tr>
				<td>
					USER TYPE
				</td>
				<td>
					<?= $user[3] ?>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<a href="adminpage.php">Go Home</a>
				</td>
			</tr>
		</table>
	</body>
</html>