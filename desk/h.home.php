<?php
	if (@$_POST['usub']) {
		$crud = new Crud();
			$nam = @mysql_real_escape_string($_POST['uname']);
			$pas = @mysql_real_escape_string($_POST['upass']);
			$pas=@md5($pas).sha1($pas);
			$res=@crud::selectAll("junglee","juser='$nam' AND jpass='$pas'");
			if($res)
			{
					while($data=@mysql_fetch_object($res))
					{
						$ok = $data->juser;
						$tmp=@crud::selectAll("frnds","juser='$ok'");
						if($tmp)
						{
							while($dat=@mysql_fetch_object($tmp))
							{
								$k = $dat->jname;
								$_SESSION["jfrnd"]=$k;
								$_SESSION["juser"]=$ok;
								$_SESSION['im']=$dat->jpic;
								redirect('user');
							}
						}
					}
			}
			else {
				echo "Error!";
			}
	}
?>
<div id="top-menu"><div class="button">Login</div>
<ul class="dropdown">
	<form id="login" action="" method="post" enctype="multipart/form-data">
	<li><input id="lognam" class="logm" type="text" name="uname" placeholder="Username" required="required" /></li>
	<li><input id="logpass" class="logm" type="password" name="upass" placeholder="Password" required="required"/></li>
	<li><input class="logsub" type="submit" name="usub" value="Login"/></li>
	</form>
</ul>	
</div>