<?php

class Account {
	protected $accountNumber;
	protected $balance;

	function __construct($accountNumber, $balance) {
		$this->accountNumber = $accountNumber;
		$this->balance = $balance;
	}

	function withdraw($amount) {}
	function deposit($amount) {}

	function getBalance() {
		return $this->balance;
	}
}
