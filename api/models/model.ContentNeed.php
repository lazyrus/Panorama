<?php

	require_once "model.BaseModel.php";

	// fetch from ContentNeed table
	class ContentNeed extends BaseModel {
		public $id, $name;
		public $content_creation_required, $content_created_by;
		public $content_approval_by, $content_approved;
		public $responsible, $accountable, $consulted, $informed;

		public function __construct( $id = -1)		// set $this->id = $id; populate all member vars from DB
		{
			parent::__construct();
			$q = "SELECT * FROM ContentNeed WHERE id = $id";

			$db = new Dbase();
			$res = $db->fetchQueryResult( $q );
			
			if ( $res && $res->num_rows > 0 )
				if ( $row = $res->fetch_assoc() ) {
					$this->id = $row['id'];
					$this->content_creation_required = $row['content_creation_required'];
					$this->content_created_by = $row['content_created_by'];
					$this->content_approval_by = $row['content_approval_by'];
					$this->content_approved = $row['content_approved'];
					$this->responsible = $row['responsible'];
					$this->accountable = $row['accountable'];
					$this->consulted = $row['consulted'];
					$this->informed = $row['informed'];
				}

			$res->free();
		}
	}
?>