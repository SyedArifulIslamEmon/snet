<?php
if (!isset($_SESSION["jfrnd"])) redirect('home');
	else {
		$jfrnd=$_SESSION["jfrnd"];
	}
	$crud = new Crud();
	$pid=$_POST['pid'];
	$use=$_SESSION['juser'];
	//$set=Crud::delete("$use"," where postid='$pid'");
	$set=Crud::query("DELETE from frnd_$use where postid='$pid'");
?>