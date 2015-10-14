<?php
	require_once 'logger.php';
	require_once 'models/model.Project.php';

	/*$tmp = print_r($_SERVER, true);
	logger($tmp);
	$headers = apache_request_headers();*/

	if ( $_SERVER['REQUEST_METHOD'] == "GET" ) {
		logger("GET request");
		logger(print_r($_GET, true));

		$return = serveGetRequest( $_GET );
		logger( print_r($return, true) );
	}
	else if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {
		logger("POST request");
		logger(print_r($_POST, true));
	}

	$return = json_encode( array( "result" => "Recieved", "kuch" => "naya" ) );
	logger( print_r($return, true) );

	echo $return;

	function serveGetRequest( $query_params ) {
		logger("project name : ".$query_params['project']);
		$project = new Project( $query_params['project'], 0 );
		return get_object_vars( $project );
	}

?>