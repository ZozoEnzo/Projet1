<?php
	$action = $_REQUEST['action']
	switch($action)
	{
		$lesRegions = Region::allRegion();
		include("vue/v_regions.php");
	}

?>
