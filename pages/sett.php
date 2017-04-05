<?php
if (isset($_SESSION["juser"]))
{
	?>
	<h1>Settings</h1>
	<div title="Delete your account" class="settings">Deactivate account</div>
	<?php
}
else {
	redirect('home');
}
?>