<?php
session_start();
require("config.php");
?>
<html>
<body>
<fieldset style="width:30%"><legend>New Account</legend>
<form action="new_account.php" method="post" >
<table>
<tr>
<td><label>Name</label></td>
<td><input type="text" name="firstname" required/></td>
</tr>
<tr>
<td><label>Address</label></td>
<td><input type="text" name="address" required /></td>
</tr>
<tr>
<td><label>D.O.B</label></td>
<td><input type="text" name="dob" required/></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="password" name="password" required/></td>
</tr><br>
<tr>
<tr>
<td><label>Phone</label></td>
<td><input type="tel" name="mobile" required/></td>
</tr><br>
<tr>
<td><input type="submit" value="Create " /></td>
<td><a href="index.php"><button type="button">Cancel</button></a></td>
</tr>
</table>



</form>
</fieldset>
</body>
</html>