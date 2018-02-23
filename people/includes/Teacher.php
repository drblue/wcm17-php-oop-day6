<?php

class Teacher extends Person {
	protected $employer;

	function getEmployer() {
		return $this->employer;
	}
	
	function setEmployer($employer) {
		$this->employer = $employer;
	}
}
