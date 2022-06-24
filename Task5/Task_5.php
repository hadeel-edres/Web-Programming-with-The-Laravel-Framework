<?php

/**
 *   @author: Hadeel Adres.
 *  * @date: 11 Mai 2022
*/

/* 5.1 Object: design a module for
the customer. 
This module must contain these property:
Data member:
• Account number
• Name of the depositor
• Last balance
 */

class Customer_Mod{
    // Properties
    public $account_number;
    public $name_despo;
    public $last_balance;
  
    // Methods
    public function __construct(){

    }

    public function setCustomer_Mod($account_number, $name_despo , $last_balance){
        $this->account_number = $account_number;
        $this->name_despo = $name_despo;
        $this->last_balance = $last_balance;
    }

   /* function will take input from the user (amount) and
    add it to the last balance. */
    public function deposit_money($amount){
      $this->last_balance = $this->last_balance + $amount;
      echo "The new balance is: ".$this->last_balance;

    }
    /* function will take input from the user (amount) and deduct
      the last balance with this amount. */
    public function withdraw_money($amount) {
      $this->last_balance = $this->last_balance - $amount;
      echo "The new balance is: ".$this->last_balance;

    } 
    /* function to print the name and the last balance to the user */
    public function display() {
      print "name: ".$this->name_despo ."\n";
      print "last balance is: ".$this->last_balance."\n";

    }
    
}

/* 5.2 test case for the object above with three customers */
$ews_customers = array();
$x=0;
while($x < 3){
  $ews_customers[$x] = new Customer_Mod();
  $x++;
}
$ews_customers[0]->setCustomer_Mod(1, "Lisa", 2500);
$ews_customers[1]->setCustomer_Mod(2, "Amelie", 5500);
$ews_customers[2]->setCustomer_Mod(3, "Hadeel", 5000);

echo "\n";
echo "customers: "."\n";
echo "-----------------------";
echo "\n";
$x=0;
while($x < 3){
  $ews_customers[$x]->display();
  $x++;
}
echo "\n";
echo "customers status:"."\n";
echo "-----------------------";
echo "\n";
echo"Lisa status: she made 100€ deposite: ";
$ews_customers[0]->deposit_money(100);

print "\n";

echo"Amelie status: she made 500€ from her account: ";
$ews_customers[1]->deposit_money(500);
print "\n";


echo"Hadeel status: she took 1000€ from her account: ";
$ews_customers[2]->withdraw_money(1000);
print "\n";

/* 5.3 New features for ATMs :
  Data:
• last transaction date
• password */

class Atm extends Customer_Mod{
  // Properties
  public $last_trans;
  public $password;

  public function setPasswort($password){
    $this->password = $password;

  }
  /* ask for password before transaction */
  public function askPassword($password){
      if($this->password == $password){
          print "welcome, You can complete the transaction";
      }else{
        print"wrong password, please write your password again!";}
  }
  /* change password */
  public function changePass($new_password){
    $this->password = $new_password;
    if($this->password == $new_password){
        print "Password changed successfully!";
    }else{
      print"wrong , please try again.";
    }
}

}

$customers_password = array();
$x=0;
while($x < 3){
  $customers_password[$x] = new Atm();
  $x++;
}
$customers_password[0]->setPasswort("lalisa");
$customers_password[1]->setPasswort("a123");
$customers_password[2]->setPasswort("heha123");

echo "\n";
echo"Lisa Passwort: ";
echo "\n";
$customers_password[0]->askPassword("lalisa");
echo "\n";

echo "\n";
echo"Amelie Passwort: ";
echo "\n";
$customers_password[1]->askPassword("cool");
echo "\n";


?>