<?php

class Employee extends Person {
	protected $employer;

	function getEmployer() {
		return $this->employer;
	}
	
	function setEmployer($employer) {
		$this->employer = $employer;
	}
}
