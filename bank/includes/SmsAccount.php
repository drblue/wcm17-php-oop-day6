<?php

class SmsAccount extends Account implements Interest {
	protected $interest = -0.30; // 30%

	function getInterest() {
		return $this->interest;
	}
}
