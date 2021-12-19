<?php
	// Initialize
	session_start();
	set_time_limit(0);
	ini_set('max_execution_time', '-1');
	ini_set('memory_limit', '-1');
	error_reporting(-1);
	ini_set('display_errors', true);	
	

	require_once('class.github.php');


	
	
	$repo = new github("medusajs", "medusa");
	$REPOSITORY_API_RELEASE_HISTORY = $repo->get_releases();
	

	

echo '<pre>';
print_r($repo->DATA);
echo '</pre>';
		
?>
