<?php
class Log{
// $msg = message i n s t r i n g format
// $ level : 1 = high , 2 = normal , 3 = low
public function logIt($msg , $level){

}
}
abstract class LogData extends Log{
public $msg , $lvl;
public function _logIt($msg , $level){

}
}

class Logger extends LogData{

public function logIt($msg , $level){
$this->msg = $msg ;
$this->level = $level;
echo " Successfull write " . $this->msg . " with level " .
$this->level ;
}

}
$logger = new Logger();
$logger -> logIt("hello world! " , 2);

 ?>