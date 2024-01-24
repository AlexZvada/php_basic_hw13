<?php

const APP_DIR = __DIR__ . '/';
require_once APP_DIR . "classes/BankAccount.php";

try {
    $myAccount = new BankAccount(12345678, 0);
    $myAccount->addMoney(4520);
    $myAccount->withdrawMoney(4100);
    $balance = $myAccount->showBalance();
    $myAccountNumber = $myAccount->showAccountNumber();
    var_dump($balance);
    var_dump($myAccountNumber);

}
catch (Exception $exception){
    var_dump($exception->getMessage());
}