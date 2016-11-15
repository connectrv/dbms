<?php
require("config.php");
?>
<html>
	<body>
	<td><a href="viewarticles.php"><button type="button">Back</button></a></td>
		<form action="articles.php"  method="post">
			<fieldset style="45%";>				
				<table cellpadding="1" cellspacing="1" align="center">
					<tr >
						<td><label>Author Name:</label></td>
						<td><input type="text" name="author" required /></td>
					</tr>
					<tr>
						<td><label>Subject:</label></td>
						<td><input type="text" name="subject" required/></td>
					</tr>
						<td><label>Message:</label></td>
						<td><textarea rows="10" cols="22" name="message" required></textarea></td>
					</tr>
					<tr>
						<td colspan="4" align="center"><input type="submit" value="submit" style="float: right; padding-left: 145px;" name="submit"/></td>				
				</table>
			
			
			
			
			
			
			</fieldset>
		</form>
		
	</body>
</html>