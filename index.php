<?php
	session_start();
	ob_start();
	$url=@$_GET['url'];
	$_SESSION["jlogged"]=false;
	require('load/loader.php');

	/*$user_name = $_GET['user_name'];
	
	$query=mysql_query("SELECT * FROM tbl_user WHERE u_name='$user_name'");
	while($data=mysql_fetch_array($query))
	{
		$pro = $data['protection'];
	}
	
	session_start();
	$_SESSION['login'];
	if($_SESSION['login'] == $pro) {
		$query=mysql_query("SELECT * FROM tbl_user WHERE u_name='$user_name'");
		while($data=mysql_fetch_array($query))
		{
			echo $data['p_i'];
		}
		
	}*/
	
?>
