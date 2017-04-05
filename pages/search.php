<?php
if (isset($_SESSION["juser"]))
{
	$use=$_SESSION["juser"];
	$crud = new Crud();
	$p=@mysql_real_escape_string($_POST['sea']);
	//$p = preg_replace('/\s+/', ' ', $p);
	if($p!='')
	{
		$sea = Crud::selectAll("frnds"," jname like '%$p%'");
		if($sea)
		{?>
					<h1>Search results</h1>
					<?php
					while($psea=@mysql_fetch_object($sea))
					{?>
						<div class='post' style="padding-top: 20px;">
							<div class='propic' style="background: url('<?php echo imgPath()."up/$psea->jpic";?>');background-size:64px 64px;"></div>
							<h1 class='prouser'><a href="<?php echo BU."/about?id=$psea->juser";?>"><?php echo $psea->jname;?></a></h1>
							<h1 class="icon-cre"></h1>
						</div>
					<?php }
		}
		else echo"<h1>No results found!</h1>";
	}
	else echo"<h1>No results found!</h1>";
}
else {
	redirect('home');
}
?>