<?php
session_start();
require("config.php");
?>
<?php
			
	if(isset($_POST['submit']))
		{
			$default_time = $_SERVER['REQUEST_TIME'];
			$customtime = date("Y-m-d H:i:s",$default_time);
			
			echo "<pre>"; print_r($_POST);
			echo "<pre>"; print_r($_SESSION);
			$ef=mysql_query(  "insert INTO comments(userid,articleid,comment,username,date) VALUES (".$_SESSION['userid'].",".$_POST['article_id'].",'".$_POST['comment']."','".$_SESSION['username']."','".$customtime."' )  ") or die(mysql_error() );
			
		
		}	
				
		else
			{
				echo "Values not submitted successfully";
                echo "<a href='author.php'><button type='button'>Go Back</button></a>";

			}
			//'".$_POST['author']."'
			$join= mysql_query("SELECT comments.comment from comments JOIN user ON comments.articleid=user.abc") or die(mysql_error());
			if( mysql_num_rows($join)>0 )
			{
				while( $res=mysql_fetch_array($join) )
				{
					echo "<pre>";
					print_r ($res);
					echo "</pre>";
					
					
				}
		
			}
		?>