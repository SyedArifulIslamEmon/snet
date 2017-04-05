<?php
function setReporting() {
	if (DEV_ENV == FALSE) {
		error_reporting(E_ALL);
		ini_set('display_errors', 'On');
	} else {
		error_reporting(E_ALL);
		ini_set('display_errors', 'Off');
		ini_set('log_errors', 'On');
		ini_set('error_log', ROOT . DS . 'logs' . DS . 'error.log');
	}
}

function stripSlashesDeep($value) {
	$value = is_array($value) ? array_map('stripSlashesDeep', $value) : stripslashes($value);
	return $value;
}

function removeMagicQuotes() {
if ( get_magic_quotes_gpc() ) {
	$_GET    = stripSlashesDeep($_GET   );
	$_POST   = stripSlashesDeep($_POST  );
	$_COOKIE = stripSlashesDeep($_COOKIE);
}
}


// this function is used for unregistered global variable
/*
function unregisterGlobals() {
	if (ini_get('register_globals')) {
		$array = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');
		foreach ($array as $value) {
			foreach ($GLOBALS[$value] as $key => $var) {
				if ($var === $GLOBALS[$key]) {
					unset($GLOBALS[$key]);
				}
			}
		}
	}
}*/



function urlDrive(){
	global $url;
	
	$urlArray=explode('/', $url);
	$pg=$urlArray[0];
	$sb=empty($urlArray[1])?NULL:$urlArray[1];
	$ctrl=new Control();
	
	call_user_func_array(array($ctrl, "pageload"), array($pg,$sb));
}


// This function used for class auto load...
function __autoload($class) {
	if (file_exists(ROOT . DS . "classes" . DS . strtolower($class) . ".class.php")) {
		require_once (ROOT . DS . "classes" . DS . strtolower($class) . ".class.php");
	}
}

setReporting();
removeMagicQuotes();
//unregisterGlobals();
//urlDrive();
?>