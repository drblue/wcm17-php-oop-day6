<?php

class Guest {
	protected $id;
	protected $firstname;
	protected $lastname;
	protected $email;

	function getId() {
		return $this->id;
	}

	function getName() {
		return "{$this->firstname} {$this->lastname}";
	}

	function getEmail() {
		if (empty($this->email)) {
			return "No email";
		}
		return $this->email;
	}
}
