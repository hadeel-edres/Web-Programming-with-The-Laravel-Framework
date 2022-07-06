<?php

/**
 *   @author: Hadeel Adres.
 *  * @date: 11 Mai 2022
*/

trait Log{
    public function logIt($msg , $level){
        echo " Successfull write " . $this->msg . 
        " with level " . $this->level ;

    }

}

trait LogData{
    public $msg , $level;
    public function logIt2($msg , $level){
        echo " Successfull write " . $this->msg . 
        " with level " . $this->level ;

}

}

class Logger{
    use Log;
    use LogData;
    public function logIt2($msg , $level){
        $this->msg = $msg ;
        $this->level = $level;
        echo " Successfull write " . $this->msg . 
        " with level " . $this->level ;
    }
    public function logIt($msg , $level){
        $this->msg = $msg ;
        $this->level = $level;
        echo " Successfull write " . $this->msg . 
        " with level " . $this->level ;
    }

}

$logger = new Logger();
$logger -> logIt("hello world! " , 2);
echo "<br>";
$logger -> logIt2("hello world! " , 2);


?>