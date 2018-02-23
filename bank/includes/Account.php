<?php

abstract class Account {
	protected $accountNumber;
	protected $balance;
	protected $interest = 0;

	function __construct($accountNumber, $balance) {
		$this->accountNumber = $accountNumber;
		$this->balance = $balance;
	}

	function withdraw($amount) {
		return $this->balance -= $amount;
	}
	function deposit($amount) {
		return $this->balance += + $amount;
	}

	function getBalance() {
		return $this->balance;
	}
}
