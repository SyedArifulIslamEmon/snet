<?php
	if (!isset($_SESSION["jfrnd"])) redirect('home');
	else {
		$jfrnd=$_SESSION["jfrnd"];
		$ab=$_GET['id'];
	}
?>
  	<h1><?php echo $jfrnd; ?></h1>
  		<?php
  			$crud = new Crud();
			
  			if (isset($_SESSION["juser"])) 
	  		{
	  			$use=$_SESSION["juser"];
				
				$k=@crud::selectAll("frnds"," juser='$ab'");
				//$k=@Crud::query("Select * from ".TBL_PREFIX."frnds where juser='$use'");
				if($k)
				{
					while($p=@mysql_fetch_object($k))
					{?>
						<div id='con'>
						<div class='block'><!--<button title="Edit" class="icon-set editbutton" type="button" onclick=""></button>-->
							<ul class='aboutul'>
								<li><img id='profile' title="<?php echo $_SESSION['jfrnd']; ?>" src="<?php echo imgPath()."up/$use/".$p->jpic; ?>" /></li>
								<li class='editable'>Name: <?php echo htmlspecialchars($p->jname); ?></li>
								<li class='editable'>Birthday: <?php echo htmlspecialchars($p->jdob); ?></li>
								<li class='editable'>Sex: <?php echo htmlspecialchars($p->jsex); ?></li>
								<li class='editable'>Email: <?php echo htmlspecialchars($p->jemail); ?></li>
								<li class='editable'>About: <?php echo htmlspecialchars($p->jabout); ?></li>
								</ul>
							</div>
						</div>
					<?php }
				}
				else
				{
					echo "$use";
				}
			}
  		?>