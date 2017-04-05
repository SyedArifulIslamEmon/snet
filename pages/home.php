		<?php
			if (isset($_SESSION["jfrnd"])) redirect('user');
			//$crud = new Crud();
		?>
		<div align="center" id="main">
		    <div id="home-top"></div>
		    <h1 class="bev" id="home-title"><img src="<?php echo imgPath(); ?>frndjungle.png" />FRIENDS JUNGLE</h1>
			<h1 id="home-slogan">Meet Friends, go Wild!</h1>
			<h1 class="button" id="reg-button">JOIN NOW</h1>
		</div>
		<style>
		body{
			background-color:#36C07A;
		}
		</style>