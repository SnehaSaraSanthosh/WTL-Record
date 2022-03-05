<!DOCTYPE html>
<html>
       <h2>Bank Account</h2>
</html>
<?php

class BankAccount
{
    private $balance;

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }

        return $this;
    }
}

class SavingAccount extends BankAccount
{
    private $interestRate;

    public function setInterestRate($interestRate)
    {
        $this->interestRate = $interestRate;
    }

    public function addInterest()
    {
        // calculate interest
        $interest = $this->interestRate * $this->getBalance();
        // deposit interest to the balance
        $this->deposit($interest);
    }
}

$account = new SavingAccount();
$account->deposit(100);
// set interest rate
$account->setInterestRate(0.05);
$account->addInterest();
echo"Balance=0";
echo"<br>";
echo"Deposit=100";
echo"<br>";
echo"Interest Rate=0.05";
echo"<br>";
echo"<br>";
echo"Current Balance = ";
echo $account->getBalance();
?>