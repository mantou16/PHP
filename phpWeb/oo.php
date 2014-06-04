<?php
///////////   construct, __get, __set, public, protected, private. __get and __set doesn't deal with public var.
class myphp
{
	public $public;
	protected $protected;
	private $private;

	function __construct()
	{
		$this->public = "this is public";
		$this->protected = "this is protected";
		$this->private = "this is private";
	}
	
	function __get($var)
	{
		return $this->$var."<br>";
	}
	
	function __set($var, $value)
	{
		$this->$var = $value."<br>";
	}
}

$myphp1 = new myphp();

echo $myphp1->public;
echo $myphp1->protected;
echo $myphp1->private;

$myphp1->public = "changing public";
$myphp1->protected = "changing protected";
$myphp1->private = "changing private";

echo $myphp1->public;
echo $myphp1->protected;
echo $myphp1->private;

///////////  extends
class root
{
	function root_say()
	{
		return "This is root"."<br>";
	}
}

class son extends root
{
	function son_say()
	{
		return "This is son"."<br>";
	}
	function son_say2()
	{
		return $this->root_say();
	}
	function root_say()
	{
		return "This is son say \"".root::root_say()."\"";
	}
}

$son = new son();
echo $son->root_say();
echo $son->son_say();
echo $son->son_say2();

////////////   abstract
abstract class abstract1
{
	abstract function abstr();
}

class abstract2 extends abstract1
{
	function abstr()
	{
		echo "this is abstract2, implementing abstract1";
	}
}

$ab = new abstract2();
$ab->abstr();

///////// final class can not be extended, final class can not be overrided
final class final_class
{
	final function final_func()
	{
		echo "this is final, can't be override";
	}
}
/*class final_class_try_extends extends final_class
{
}*/



///////// self Vs this.   "this" can only be used in a class instance. 
////////                  "self" is used in class. 
////////                  self::static_var = class::static_var, self::const_var = class::const_var

class class1
{
	static $static_var = "static";
	public $non_static_var = "this is non-static";
	
	const CONST_VAR = "This is CONST";
	
	static function static_func()
	{
		////     NO non-static var is allowed to be used inside static function.
		
		//echo self::$non_static_var;
		echo self::$static_var;
	}
	
	function non_static_func()
	{
		echo $non_static_var;
	}
}

$c1 = new class1();
$c1->static_func();
$c1->non_static_var = "non-static";
$c1->non_static_func();


//////////      interface   implements
interface interf1
{
	CONST NAME="Robert";
	function func1();
	function func2();
}

interface interf2
{
	function func3();
	function func4();
}

class imp implements interf1, interf2
{
	function func1()
	{
		echo "this is func1()"."<br>";
	}
	function func2()
	{
		echo "this is func2()"."<br>";
	}
	function func3()
	{
		echo "this is func3()"."<br>";
	}
	function func4()
	{
		echo "this is func4()"."<br>";
	}
}

$imp = new imp();
$imp->func1();
$imp->func2();
$imp->func3();
$imp->func4();
echo $imp::NAME;

/////////   object description, exception handler
class description_handler
{
	function __toString()
	{
		return "<br>"."this is __toString() output"."<br>";
	} 
}
$h = new description_handler();
echo $h;

class exception_handler
{
	function __call($error_name, $error_arg)
	{
		echo "Error:".$error_name."<br>";
		echo "Error Arguments:".print_r($error_arg)."<br>";
	} 
}
$e = new exception_handler();
$e->not_exists_func();

//////////////   Clone
class clone_test
{
	function __clone()
	{
		echo "clonning";
	}
}

$a = new clone_test();
$b = $a;
$c = clone $a;


////////////////    autoload

function __autoload($class_name)
{
	include ($class_name.".php");
}
//$p = new xxx();
//$q = new yyy();


















?>