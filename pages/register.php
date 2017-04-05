		<?php
			if (isset($_SESSION["jfrnd"])) redirect('user');
			$crud = new Crud();
			if (@$_POST['rsub']) {
				$name = @mysql_real_escape_string($_POST['rname']);
				$email = @mysql_real_escape_string($_POST['remail']);
				$user = @mysql_real_escape_string($_POST['ruser']);
				$pass = @mysql_real_escape_string($_POST['rpass']);
				$pass=md5($pass).sha1($pass);
				$im=mt_rand(1, 50).".jpg";
				$insert = Crud::insert('junglee', array('juser' => $user, 'jpass' => $pass, 'jdate' => date("Y-m-d H:i:s", time())));
				if ($insert) {
					$insert=Crud::query("CREATE TABLE frnd_$user (postid VARCHAR(50),post VARCHAR(1000),postdate DateTime,img VARCHAR(50),liker INT(10))");
					if ($insert) {
						$insert = Crud::insert('frnds', array('juser' => $user, 'jname' => $name, 'jemail' => $email, 'jpic' => $im));
						$dirp = "resource/img/up/$user";
						if(!is_dir($dirp))
						$dirCreate = mkdir($dirp,0777,TRUE);
						if ($insert)
						$insert = Crud::insert($user, array('postid' => $user.date("YmdHis"), 'post' => 'Hello friends! {'.$user.'} has joined Friends Jungle!', 'postdate' => date("Y-m-d H:i:s",strtotime("-9 Hours")), 'img' => ''.$im, 'liker' => '0'));
							if($insert)
							{
								$_SESSION["jfrnd"]=$name;
								$_SESSION["juser"]=$user;
								$_SESSION['im']=$im;
								redirect('user');
							}
					}
				} else {
					echo "<div id='dberr'>UserName Already exists, please try another.</div>";
					
				}
			}
		?>
		<div id="reg" align="center" id="main">
			<ul>
			<form action="" enctype="multipart/form-data" method="post">
			<li><input class="logm" type="text" name="rname" required="required" placeholder="Full Name" title="Write your full name" /></li>
			<li><input class="logm" id="remail" type="text" name="remail" required="required" placeholder="Email" title="Write your email" /></li>
			<li style="float: left;"><div id="emmatch" class=""></div></li>
			<li><input class="logm" type="text" name="ruser" required="required" placeholder="User Name" title="Take an unique username" /></li>
			<li><input class="logm" type="password" id="rpass" name="rpass" required="required" placeholder="Password" title="Your password" /></li>
			<li><input class="logm" type="password" id="rpasss" name="rpasss" required="required" placeholder="Repeat Password" title="Repeat your password" /></li>
			<li><input type="hidden" value="NONCE"/></li>
			<li style="float: left;"><div id="match" class=""></div></li>
			<li><input name="rsub" id="regsub" class="logsub" type="submit" value="REGISTER"/></li>
			</form>
			</ul>
		</div>
		<style>
		body{
			background-color:#36C07A;
		}
		</style>