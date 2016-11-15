<?php
require("config.php");
session_start();
?>
<?php
			//echo "Hello";
			$art=mysql_query("SELECT * from user ORDER by abc DESC")or die(mysql_error());
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
			<?php } ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
					$(".viewcomment").click(function(){
					$(this).next(".viewcmnt").toggle();
				});
			});
		</script>
	</body>
</html>