<?php
	if (!isset($_SESSION["jfrnd"])) redirect('home');
	else {
		$jfrnd=$_SESSION["jfrnd"];
		if(isset($_GET['id']))
		$ab=$_GET['id'];
		else $ab=$_SESSION['juser'];
		$crud = new Crud();
	}
?>
<div id="page">
<?php require_once 'asset/sidebar.php';?>
  <article class='inset'>
  		<?php
  			if (isset($_SESSION["juser"])) 
	  		{
	  			$use=$_SESSION["juser"];
				
				$k=@crud::selectAll("frnds"," juser='$ab'");
				$use=$ab;
				$ka=@crud::selectAll("$use","1 ORDER BY postdate DESC");
				$row=@mysql_query("select COUNT(*) AS con from frnd_$use");
				$num =@mysql_fetch_array($row);
				$row=@mysql_query("select SUM(liker) AS lik from frnd_$use");
				$sum=@mysql_fetch_array($row);;
				$puse="";
				//p
				if($k)
				{
					while($p=@mysql_fetch_object($k))
					{?>
					<h1><a href="<?php echo BU; ?>/about?id=<?php echo $p->juser;?>"><?php echo $p->jname; ?></a></h1>
						<!--<div id='con'>-->
							<ul class='aboutul'>
								<li><img id='profile' title="<?php echo $_SESSION['jfrnd']; ?>" src="<?php echo imgPath()."up/".$p->jpic; $im=$p->jpic;?>" /></li>
								<li class="abouta">Name:</li> <li class='editable name'><?php echo htmlspecialchars($p->jname); $puse=$p->jname;?></li>
								<li class="abouta">Birthday:</li> <li class='editable dob'><?php echo htmlspecialchars($p->jdob); ?></li>
								<li class="abouta">Sex:</li> <li class='editable sex'><?php echo htmlspecialchars($p->jsex); ?></li>
								<li class="abouta">Email:</li> <li class='editable email'><?php echo htmlspecialchars($p->jemail); ?></li>
								<li class="abouta">About:</li> <li class='editable about'><?php echo htmlspecialchars($p->jabout); ?></li>
								<li class="abouta">Total posts:</li> <li class='postCount'><?php echo $num["con"];?></li>
								<li class="abouta">Total likes:</li> <li class='postCount'><?php echo $sum["lik"];?></li>
								</ul>
						<!--</div>-->
					<?php }
					//
				
				if($ka)
				{
					while($pa=@mysql_fetch_object($ka))
					{
						?>
						<div class='post p<?php echo $pa->postid;?>' style="padding-top: 20px;width: auto;">
						<div class='propic' style="background: url('<?php echo imgPath()."up/$im";?>');background-size:64px 64px;"></div>
						<h1 class='prouser'><?php echo $puse;?></h1><code><?php echo htmlspecialchars($pa->post);?></code><br/>
							<?php if($pa->img!="") echo "<img class='proimg' src='".imgPath()."up/$pa->img' title='$puse pics' />";?>
						<h1 class='prodate'>Posted at <?php echo date('d F, Y g:i A', strtotime($pa->postdate));?></h1>
						<div title="Like post" class="icon-lik liker <?php echo $pa->postid." ".$use;?>"><?php echo $pa->liker;?></div>
						</div>
					<?php	
					}
				}
				else
				{
					echo "$use";
				}
					//
				}
				else
				{
					echo "$use";
				}
			}
  		?>
  		<script type="text/javascript">
  			<?php if($_SESSION['juser']!=$ab) echo "$('li').removeClass('editable');"; ?>
  		</script>
  		
  		<!--
  </article>
</main>
</div>-->