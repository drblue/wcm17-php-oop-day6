<?php

class Student extends Person {
	protected $school;

	function getSchool() {
		return $this->school;
	}
	function setSchool($school) {
		$this->school = $school;
	}
}
