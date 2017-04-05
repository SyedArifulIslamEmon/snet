<?php
	if (!isset($_SESSION["jfrnd"])) redirect('home');
	else {
		$jfrnd=$_SESSION["jfrnd"];
	}
?>
<script type="text/javascript">
$(document).ready(function(){
	$(".active").removeClass("active");
	$("#street").addClass("active");
});
</script>
<div id="page">
  		<?php require_once 'asset/sidebar.php';?>
  		<article class='inset'>
  	<h1><?php echo $jfrnd; ?></h1>
  		
  		<?php
  			$crud = new Crud();
			$loop=0;
  			if (isset($_SESSION["juser"])) 
	  		{
	  			$use=$_SESSION["juser"];
				
				$k=@crud::selectAll("frnds","1 ORDER BY jpost DESC");
				if($k)
				{
					while($t=@mysql_fetch_object($k))
					{
						//selected user
						$loop++;if($loop==30) break;
						$nam=$t->jname;
						$im=$t->jpic;
						$m=@crud::selectAll("$t->juser","1 ORDER BY postdate DESC LIMIT 1");
						if($m)
						{
							while($p=mysql_fetch_object($m))
							{
						?>
						<div class='post p<?php echo $p->postid;?> strpost'><div class='propic' style="background: url('<?php echo imgPath()."up/$im";?>');background-size:64px 64px;"></div>
						<h1 class='prouser'><a title="<?php echo $nam;?>" href="<?php echo BU."/about?id=$t->juser";?>"><?php echo $nam;?></a></h1><code><?php echo htmlspecialchars($p->post);?></code><br/>
							<?php if($p->img!="") echo "<img class='proimg' src='".imgPath()."up/$p->img' title='$jfrnd pics' />";?>
						<h1 class='prodate'>Posted at <?php echo date('d F, Y g:i A', strtotime($p->postdate));?></h1>
						<div title="Like post" class="icon-lik liker <?php echo $p->postid." ".$t->juser;?>"><?php echo $p->liker;?></div>
						</div>
					<?php
							}
						}
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