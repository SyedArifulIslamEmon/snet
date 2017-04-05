<?php
	$crud = new Crud();
	$val=$_POST['value'];
	$fl=$_POST['field'];
	$set=Crud::query("update ".TBL_PREFIX."frnds set j".$fl."='$val' where juser='".$_SESSION['juser']."'");
?>