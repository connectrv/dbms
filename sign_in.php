<?php
session_start();
//$_SESSION['sess_username']=$_POST['username'];
?>
<html>
	<body>
		<form action="login_sign_in.php" method="post">
			<table>
				<tr>
					<td><label>Username</label></td>
					<td><input type="text" name="username" required /></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="password" required /></td>
				</tr>
				<tr>
					<td><input type="submit" value="SIGN IN " /></td>
					<td><input type="reset" value="Cancel " /></td>
				</tr>
				<tr>
					<td><a href="index.php"><button type="button">Back</button></a></td>
				</tr>
			</table>

		</form>
	</body>
</html>