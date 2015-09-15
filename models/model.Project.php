<?php
	require_once "model.LineItem.php";
	require_once "model.BaseModel.php";

	class Project extends BaseModel{
		public $id, $name, $remarks;		// FETCH from projects table
		public $lineItems;					// array of lineItems in the project
		public $lineItemIDs;				// array of lineItem ids

		public function __construct( $name = "_dummy1_", $id = "-1" ) 
		{
			parent::__construct();
			$lineItems = array();
			$lineItemIDs = array();

			if ( !($name == "_dummy1_" || $name == "_dummy_") && $id > 0 )
				$project_details_query = "SELECT * FROM projects WHERE name = $name AND id = $id";
			else if ( $name == "_dummy1_" || $name == "_dummy_" )
				$project_details_query = "SELECT * FROM projects WHERE id = $id";
			else if ( $id < 0 )
				$project_details_query = "SELECT * FROM projects WHERE name = $name";
			else
				$project_details_query = "SELECT * FROM projects WHERE name = '_dummy_'";

			$res_project = $this->fetchQueryResult( $project_details_query );
			
			$project = array();
			if ( $res_project && $res_project->num_rows > 0 )
				while ( $row_project = $res_project->fetch_assoc() )
				{
					if ( $row_project['is_active'] != 0 ){
						$this->id = $row_project['id'];
						$this->name = $row_project['name'];
						$this->remarks = $row_project['remarks'];
						break;
					}
				}

			if ( $this->id && $this->id > 0 ){
				$this->getLineItemIds();
				$this->getLineItems();
			}

		}

		public function getLineItemIds()	// FETCH from projects_lineitems_mapping
		{
			$q = "SELECT * FROM projects_lineitems_mapping WHERE project_id = $this->id";

			$res = $this->fetchQueryResult( $q );

			$lineItemIDsArray = array();
			if ( $res && $res->num_rows > 0 )
				if ( $row = $res->fetch_assoc() ){
					$lineItemIDsArray[] = $row['lineitem_id'];
				}

			$res->free();
			$this->lineItemIDs = $lineItemIDsArray;
		}

		// CHECK CORRECTNESS OF THIS SHIT
		public function initializeLineItems()		// initialize the $lineItems (array of lineItem objects) by invoking 
		{
			foreach ( $this->lineItemIDs as $id ) {
				$tmp = new LineItem($id);
				$this->lineItems[] = $tmp;
			}
		}
		
		/*public function getLineItems()		// initialize the $lineItems (array of lineItem objects) by invoking 
		{
			$str_array = $this->array2string( $this->lineItemIDs );
			$q = "SELECT * FROM lineitems WHERE id IN ".$str_array;

			$res = $this->fetchQueryResult( $q );

			while ( $row = $res->fetch_assoc() ) {
				$lineItemsArray[] = $row;
			}
		}

		protected function array2string( $arr )
		{
			if ( count($arr) < 1 )
				return "()";
			else {
				$str = "( $arr[0]";
				for ( $i = 1; $i < count($arr); $i += 1 ) {
					$str = $str.", $arr[$i]";
				}
				$str = $str." )";
			}

			return $str;
		}*/
		
	}

?>