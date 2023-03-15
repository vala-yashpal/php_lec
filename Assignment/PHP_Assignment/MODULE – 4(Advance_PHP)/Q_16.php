
<?php
  $Question = "16:Use of The $ this keyword?";
          
  echo "<h3 style=color:red;>Question =".$Question."<h3>";

  echo "<h3>Ans: </h3><h4>Whenever you want to use a variable that is outside of the function but inside the same class, you use $ this. $ this refers to the current php class that the property or function you are going to access resides in<?php
  <h4>";


        class BankAccount
        {
            public $accountNumber;

            public $balance;

            public function deposit($amount)
            {
                if ($amount > 0) {
                    $this->balance += $amount;

                    echo "<br><br>deposit balance".$this->balance;
                }
            }



            public function withdraw($amount)
            {
                if ($amount <= $this->balance) {
                    $this->balance -= $amount;
                   echo $this->balance;
                }
                        return false;

            }

        }

        // create a new account object

        $account = new BankAccount();

        $account->accountNumber = 1;

        $account->balance = 100;
        $account->deposit(10);
        // $account->withdraw(10);
  
?>