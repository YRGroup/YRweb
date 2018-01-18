<?php 

/*
$school=$_REQUEST['school'];
if($school){
	require_once($school.'.php');
	exit;
}
switch($school)
{
	case 'ayst':
		require_once('ayst.php');
		exit;
		case 'baby':
		require_once('baby.php');
		exit;
		case 'gjxx':
		require_once('gjxx.php');
		exit;
		case 'gjzx':
		require_once('gjzx.php');
		exit;
		case 'nzzx':
		require_once('nzzx.php');
		exit;
		case 'xcyr':
		require_once('xcyr.php');
		exit;
}
else{
	require_once('nzzx.php');
}
*/
require_once($sites[$_SERVER['HTTP_HOST']]['theme'].'.php');
?>