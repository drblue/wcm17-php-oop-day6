<?php

class GuestsController {
	protected $dbh;

	function __construct($dbh) {
		$this->dbh = $dbh;
	}

	function getGuests() {
		$query = $this->dbh->prepare("SELECT * FROM guests");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_CLASS, 'Guest');
	}

	function getGuest($id) {
		$query = $this->dbh->prepare("SELECT * FROM GUESTS WHERE id = :id");
		$query->execute(['id' => $id]);
		return $query->fetchAll(PDO::FETCH_CLASS, 'Guest')[0];
	}

}
