<?php
	$action = $_REQUEST['action']
	switch($action)
	{
		case 'statRegion':
			$lesRegions = Region::allRegion();
			include("vue/v_regions.php");
			break;
		default: echo "Rien";
	}
?>
