<?php

function location($module, $action, $get){
	$url = "location:?module=" . $module . "&action=" . $action;
	if ($get!="")
		$url .= "&" . $get;
	header($url);
	exit;
}


function protection($session, $module, $action, $level){
	if (!isset($_SESSION[$session])) {
		//header("location:?module=".$module."&action=".$action."&notif=protection");
		//exit;
		location($module, $action, "notif=protection");
	}
	if (!isset($_SESSION["level"])){
		//header("location:?module=".$module."&action=".$action."&notif=protection");
		//exit;
		location($module, $action, "notif=protection");
	}

	if($_SESSION["level"] < $level){
		//header("location:?module=".$module."&action=".$action."&notif=admin");
		//exit;
		location($module, $action, "notif=admin");

	}
}

