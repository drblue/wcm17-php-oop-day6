<?php

require("includes/Account.php");
require("includes/Interest.interface.php");
require("includes/SavingsAccount.php");
require("includes/CreditAccount.php");
require("includes/SmsAccount.php");

$accounts = [];
// $firstAccount = new Account("1", 100);

$secondAccount = new SavingsAccount("2", 250);

$thirdAccount = new CreditAccount("3", -5000);

$fourthAccount = new SmsAccount("4", -2000);

array_push($accounts, /*$firstAccount,*/ $secondAccount, $thirdAccount, $fourthAccount);

foreach ($accounts as $account) {
	$className = get_class($account);
	echo "I am an account of class {$className}<br>";
	echo "The current balance is: {$account->getBalance()}<br>";
	if ($account instanceof Interest) {
		echo "The account has an interest of: {$account->getInterest()}<br>";
	}
	echo "<br>";
}
