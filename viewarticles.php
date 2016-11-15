<?php
require("config.php");
session_start();
?>
<html>
	<head>
		<style>
		a{
			text-decoration:none;
		}	
							
		</style>
	</head>
	<body>
	<a style="float: right;" href="log_out.php"><button value="logout">Logout</button></a>
	<a style="float: right;" href="author.php"><button value="add_article">Add Article</button></a>	
		<?php
			//echo "Hello";
			$art=mysql_query("SELECT * from user ORDER BY abc DESC")or die(mysql_error());
		while(  $res =mysql_fetch_array($art)  )
			//FETCHING A ARTICLE
		{
			echo "  <p><h1>".$res['subject']."</h1></P><P>".$res['message']."</P><P><b>".$res['author']."</b></span></P> ";
			$cmnt =mysql_query(" SELECT comments.*, userdetails.name FROM comments JOIN userdetails ON comments.userid = userdetails.id WHERE comments.articleid = ".$res['abc'] ) or die( mysql_error() );
			//FETCHING A COMMENT ARTICLE WISE
			?>
			<a href="javascript:void(0)"  class="viewcomment">View Comment</a>
			<div class="viewcmnt" style="display:none;">
				
					<?php
							//PUBLISHING COMMENTS	
						if(mysql_num_rows($cmnt)>0)
						{
							while($cmnt_res=mysql_fetch_array($cmnt))
							{
								/*echo "<pre>";
								print_r($cmnt_res);
								echo "</pre>";*/
								?>
								
								<p><?php echo $cmnt_res['comment']; ?></p>
								<p>Written By: <?php echo $cmnt_res['username']; ?></p>
								<?php
									echo "<hr />";
							}
						}
						else{
							echo "<p>no comment found</p>";
						}
					?>
			</div>
			<a href="javascript:void(0)"  class="commentshow">Add Comment</a>
			<div class="cmnt" style="display:none;">
				<form action="comment.php" method="post">
					<input type="hidden" name="article_id" value="<?php echo $res['abc'];?>" />
					<textarea rows="6" cols="30" name="comment">        </textarea>
					<input type="submit" name="submit" value="post" /> 
				</form>
			</div>
        <?php } ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$(".commentshow").click(function(){
					$(this).next(".cmnt").toggle();
				});
				$(".viewcomment").click(function(){
					$(this).next(".viewcmnt").toggle();
				});
			});
		</script>
	</body>
</html>