<?php
if (isset($_SESSION["juser"]))
{
	$use=$_SESSION["juser"];
	$crud = new Crud();
	//date_default_timezone_set('Asia/Dacca');
	$p=@mysql_real_escape_string($_POST['newpost']);
	//$p = preg_replace('/\s+/', ' ', $p);
	$tmp=date("YmdHis").$use.rand(111,999);
	$img="";//$tmp."_".$use.".".$ext
	if($p!='')
	$insert = Crud::insert("$use", array('postid' => $tmp, 'post' => $_POST['newpost'], 'postdate' => date("Y-m-d H:i:s",strtotime("-9 Hours")), 'img' => $img, 'liker' => '0'));
	$updt = Crud::update("frnds", array('jpost' => date("Y-m-d H:i:s",strtotime("-9 Hours"))), "juser='$use'");
}
else {
	redirect('home');
}
?>