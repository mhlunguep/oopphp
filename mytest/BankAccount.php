<?php

require_once 'Logger.php';

class BankAccount
{
	use Logger;

	private $accountNumber;

	public function __construct($accountNumber)
	{
		$this->accountNumber = $accountNumber;
		$this->log("A new $accountNumber bank account created");
	}
}