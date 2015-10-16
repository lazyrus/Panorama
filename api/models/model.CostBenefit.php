<?php

	require_once "model.BaseModel.php";

	// fetch from CostBenefit table
	class CostBenefit extends BaseModel {
		public $id, $name;
		public $checked_by, $cost_assigned_to_BU;
		public $pass_on_by;
		public $cost_approval, $approved_by;

		public function __construct( $id = -1)		// set $this->id = $id; populate all member vars from DB
		{
			parent::__construct();
			$q = "SELECT * FROM CostBenefit WHERE id = $id ";

			$db = new Dbase();
			$res = $db->fetchQueryResult( $q );

			if ( $res && $res->num_rows > 0 )
				if ( $row = $res->fetch_assoc() ) {
					$this->id = $row['id'];
					$this->checked_by = $row['checked_by'];
					$this->cost_assigned_to_BU = $row['cost_assigned_to_BU'];
					$this->pass_on_by = $row['pass_on_by'];
					$this->cost_approval = $row['cost_approval'];
					$this->approved_by = $row['approved_by'];
				}

			$res->free();
		}
	}
?>