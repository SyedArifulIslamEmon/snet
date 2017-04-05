<?php
if (isset($_SESSION["juser"]))
{
	?>
	<h1><div class="icon-mai"></div>No new message!</h1>
	<?php
}
else {
	redirect('home');
}
?>