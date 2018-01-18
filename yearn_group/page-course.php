<?php 
$course=$_REQUEST['course'];
$m=$_REQUEST['m'];
require_once('coursePages/page-sd-'.$course.($m?'-m':'').'.php');
?>