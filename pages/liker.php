<?php
if (isset($_SESSION["juser"]))
{
		$use=$_SESSION["juser"];
		$crud = new Crud();
		$pid=$_POST['pid'];
		$us=$_POST['user'];
		$val=$_POST['value'];
		$val++;
		$s=Crud::query("UPDATE frnd_$us SET liker='$val' where postid='$pid'");
}
else {
	redirect('home');
}
?>