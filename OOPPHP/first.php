<?php

class begin{
    public $property = "pp";
    protected $prop = "Pp";
    private $test = "Test";
    function __construct()
    {
        //echo "Con<br>";
        echo $this->property;
       // $this->method();
    }
   /* public function method()
    {
        //echo "Hi";
        return $this->test;
    }*/

}
class began extends begin{
   //public $prop = "Hello";
  // public $property = "pppppppppppp";
   function __construct()
   {
       //echo self::class;
       echo $this->test;
   }
   function test(){ return $this->prop; }
}
//$obj = new begin();
//echo $obj->method();
/*$begin = new begin();
echo $begin->property;
$begin->method();*/
/*
$began = new began();
echo $began->property."<br>".$began->prop;*/
//$met = new began();
//echo $met->test();

class setget{
    private $value = 1;

    public function setter(int $x)
    {
        $this->value = $x;
    }
    public function getter()
    {
        return $this->value;
    }
}/*
$o = new setget();
$o->setter(10);
echo $o->getter();*/
class stat{
    public static $values = 10;
    public static function Hi()
    {
        echo self::$values;
    }
}
//stat::Hi();

class mother {
    public $prop = 10;
    public function method()
    {
        echo self::class."-METHOD<br>";
    }
}
class child extends mother{
    public function method(){
        echo $this->prop."<br>";
        echo parent::method();
        echo self::class."-METHOD";
    }
}
//$obj = new child();
//$obj->method();

abstract class pet{
    abstract protected function hello();
}
class dog extends pet{
    public function hello(){
        echo "Woof";
    }
}
class cat extends pet{
    public function hello(){
        echo "Meow";
    }
}
//$dog = new dog();
//$dog->hello();
interface Driveable{
    function drive();
}
interface Rideable{
    function ride();
}
interface Flyable{
    function fly();
}
abstract class Vehicle{
    abstract public function start();
    abstract public function stop();
    function __construct($switchID){
      $this->id = $switchID;
      echo 'Vehicle ID :'.$this->id.'<br>';
        }
}
class motorcycle extends Vehicle implements Rideable{
    public function start()
    {

    }
    public function stop(){

    }
    public function ride()
    {

    }
}
class truck extends Vehicle implements Driveable{
    public function start()
    {

    }
    public function stop(){

    }
    public function drive()
    {
        
    }
}
class airplane extends Vehicle implements Flyable{
    public function start()
    {

    }
    public function stop(){

    }
    public function fly()
    {
        
    }
}
class drone extends Vehicle implements Driveable, Flyable{
    public function start()
    {

    }
    public function stop(){

    }
    public function drive()
    {
        
    }
    public function fly()
    {
        
    }
}
//$switch1 = new motorcycle(1);
//$switch2 = new truck(2);
//$switch3 = new airplane(3);
//$switch4 = new drone(4);
trait support
{
    function support_(){
        echo "Sup";
    }
}
class base{
    use support;

    function __construct()
    {
        $this->support_();
    }

}
$ob = new base();
?>