<?php
	if (!isset($_SESSION["jfrnd"])) redirect('home');
	else {
		$jfrnd=$_SESSION["jfrnd"];
	}
?>
<script type="text/javascript">
$(document).ready(function(){
	$(".active").removeClass("active");
	$("#home").addClass("active");
});
</script>
<div id="page">
  		<?php require_once 'asset/sidebar.php';?>
  		<article class='inset'>
  	<h1><?php echo $jfrnd; ?></h1>
  	<div id="hid" style="display: none;"><?php echo $juser;?></div>
  	<div id="poster">
  		<form id="subpost" action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
				<textarea class="newpost" name="newpost" placeholder="Whats on your mind?"></textarea>
				<div style="height:0px;overflow:hidden">
				   <input type="file" id="filein" name="filein" />
				</div>
				<button class="icon-ins postimg" type="button" onclick="chooseFile();"></button>
				<input id="postsub" type="submit" class="logsub" value="Post"/>
		  </form>
  	</div>
  		
  		<?php
  			$crud = new Crud();
  			if (isset($_SESSION["juser"])) 
	  		{
	  			$use=$_SESSION["juser"];
				
				$k=@crud::selectAll("$use","1 ORDER BY postdate DESC");
				if($k)
				{
					while($p=@mysql_fetch_object($k))
					{
						$im=$_SESSION['im'];
						?>
						<div class='post p<?php echo $p->postid;?>'><div title="Delete post" id="<?php echo $p->postid;?>" class="icon-exx del"></div>
						<div class='propic' style="background: url('<?php echo imgPath()."up/$im";?>');background-size:64px 64px;"></div>
						<h1 class='prouser'><?php echo $jfrnd;?></h1><code><?php echo htmlspecialchars($p->post);?></code><br/>
						<?php if($p->img!="") echo "<img class='proimg' src='".imgPath()."up/$p->img' title='$jfrnd pics' />";?>
						<h1 class='prodate'>Posted at <?php echo date('d F, Y g:i A', strtotime($p->postdate));?></h1>
						<div title="Like post" class="icon-lik liker <?php echo $p->postid." ".$use;?>"><?php echo $p->liker;?></div>
						</div>
					<?php	
					}
				}
				else
				{
					echo "$use";
				}
			}
  		?>
  </article>
</main>
</div>