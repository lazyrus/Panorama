<?php
	require_once 'logger.php';
	require_once 'models/model.Project.php';

	/*$tmp = print_r($_SERVER, true);
	logger($tmp);
	$headers = apache_request_headers();*/

	if ( $_SERVER['REQUEST_METHOD'] == "GET" ) {
		logger("GET request");
		logger(print_r($_GET, true));

		$project = serveGetRequest( $_GET );
		logger( print_r($project, true) );
	}
	else if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {
		logger("POST request");
		logger(print_r($_POST, true));
		$project = $_POST;
	}

	$return = json_encode( array( "response" => $project ) );
	// $return = json_encode( array( "result" => "Recieved", "kuch" => "naya" ) );
	// logger( print_r($return, true) );
	echo $return;


	// Takes care of all GET requests
	function serveGetRequest( $query_params ) {

		switch ( $query_params['fetch'] ) {
			case 'projects_list':
				return getActiveProjects();
				break;

			case 'project':
				logger("project name : ".$query_params['project']);
				$project = new Project( $query_params['project'], 0 );
				return get_object_vars( $project );
				break;
			
			default:
				return array( "status" => false, "message" => "Invalid request. Check request parameters" );
				break;
		}

		/*logger("project name : ".$query_params['project']);
		$project = new Project( $query_params['project'], 0 );
		return get_object_vars( $project );*/
	}

	function getActiveProjects() {

		require_once 'utils/Dbase.php';

		$q = "SELECT * FROM projects WHERE is_active = 1 ORDER BY id DESC";
		
		$db = new Dbase();
		$res = $db->fetchQueryResult( $q );

		$activeProjects = array();
		while ( $row = $res->fetch_assoc() ) {
			$activeProjects[] = $row;
		}
		
		return $activeProjects;
	}

?>