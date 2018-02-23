<?php

class CreditAccount extends Account implements Interest {
	protected $interest = -0.03; // 3,0%

	function getInterest() {
		return $this->interest;
	}
}
