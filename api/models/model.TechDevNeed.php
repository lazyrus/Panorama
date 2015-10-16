<?php

	require_once "model.BaseModel.php";

	// fetch from TechDevNeed table
	class TechDevNeed extends BaseModel {
		public $id, $name;
		public $tech_requirement;
		public $dev_time_estimate, $dev_start_date, $dev_end_date;
		public $responsible, $accountable, $consulted, $informed;

		public function __construct( $id = -1)		// set $this->id = $id; populate all member vars from DB
		{
			parent::__construct();
			$q = "SELECT * FROM TechDevNeed WHERE id = $id";

			$db = new Dbase();
			$res = $db->fetchQueryResult( $q );

			if ( $res && $res->num_rows > 0 )
				if ( $row = $res->fetch_assoc() ) {
					$this->id = $row['id'];
					$this->tech_requirement = $row['tech_requirement'];
					$this->dev_time_estimate = $row['dev_time_estimate'];
					$this->dev_start_date = $row['dev_start_date'];
					$this->dev_end_date = $row['dev_end_date'];
					$this->responsible = $row['responsible'];
					$this->accountable = $row['accountable'];
					$this->consulted = $row['consulted'];
					$this->informed = $row['informed'];
				}

			$res->free();
		}
	}
?>