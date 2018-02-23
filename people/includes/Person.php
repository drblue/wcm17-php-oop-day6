<?php

abstract class Person {
	protected $firstName;
	protected $LastName;
	protected $address;

	function __construct($firstName, $lastName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	function getName() {
		return "{$this->firstName} {$this->lastName}";
	}

	function getAddress() {
		return $this->address;
	}
	function setAddress($address) {
		$this->address = $address;
	}
}
