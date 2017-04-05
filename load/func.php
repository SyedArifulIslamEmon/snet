<?php
 

function leoquire($pre,$dat,$def){
	if(file_exists($pre.$dat.'.php'))
	require_once ($pre.$dat.'.php');
	else {
		require_once ($pre.$def.'.php');
	}
}

function cssPath() {
	return BU . US . "resource" . US . "css" . US;
}

function jsPath() {
	return BU . US . "resource" . US . "js" . US;
}

function imgPath() {
	return BU . US . "resource" . US . "img" . US;
}


function redirect($url){
	if(isset($url)){
		header('location:'.BU.US.$url);
		ob_end_flush();
		exit;
	}
}

/*
 * loadClass function is used for class auto_load
 * this function is load class from classes directory
 * @param 	: only class name (for multiple class use (,) comma for class separator)
 * @return	: true
 */

function loadClass($class) {
	$cls = explode(",", $class);
	foreach ($cls as $val) {
		if (file_exists(ROOT . DS . "classes" . DS . trim(strtolower($val)) . ".class.php")) {
			require_once (ROOT . DS . "classes" . DS . trim(strtolower($val)) . ".class.php");
		} else {
			echo "Unable to load class <strong>{$val}</strong>";
		}
	}

	return true;
}
