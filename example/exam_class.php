<?php 

/* 

CLASS's Features:
	- Properties
	- Permission
	- Contruct Methods :
		+ With params optional
	- Destruct Method
	- Instance Method
	- Class Method
	- Abstract
	- Interface

OOP's Features:
	- Inheritance
	- Polymorphism
		+ Override
		+ Overload
	- Encapsulation
*/

class Human{

	/*PROPERTIES DEFINE*/
	public $name; // Defined with public permission
	private $age; // Defined with private permission
	protected $sex; // Defined with protected permission
	static $stt=0;

	/*CONSTRUCTORS METHODS DEFINE*/

	// Method 01a: Constructor function without params
	// function __construct(){
	// 	$this->name = "Noname";
	// 	$this->age = 0;
	// 	$this->sex = "Undefined";
	// }

	// Method 01b: Constructor function without params
	function Human($name="Noname", $age=-1, $sex="Undefined"){
		$this->name = $name;
		$this->age = $age;
		$this->sex = $sex;
	}

	function __destruct(){
		// echo "Destruct class Human successfull !";
	}

	/*GETTER AND SETTER FOR PROPERTIES*/
	function setAge($age){
		$this->age = $age;
	}
	function getAge(){
		return $this->age;
	}

	/*INSTANCE METHODS DEFINE*/
	function Info(){
		echo "===== Human Info =====<br>";

		// Call static property
		self::$stt++;
		echo "STT: ".self::$stt."<br>";

		echo "Name: ".$this->name."<br>";
		echo "Age: ".$this->age."<br>";
		echo "Sex: ".$this->sex."<br>";

		// Method 1: Call static method (classmethod)
		self::StaticHello();
		// Method 2: Call static method (classmethod)
		// $this->StaticHello();
	}

	/*CLASS METHODS DEFINE*/
	static function StaticHello(){
		echo "Default hello of Human Class";
	}
}

class Student extends Human{ // OOP's Feature : Inheritance FROM "Human" Class
	
	/*PROPERTIES DEFINE*/
	var $className; // Default is public permission

	/*METHODS DEFINE*/
	function Student(){
		Human::Human();
		$this->className = "1A";
	}

	/*INSTANCE METHODS DEFINE*/
	function Info(){
		Human::Info();
		echo "<br>";
		echo "===== Student Info =====<br>";
		// echo "Name: ".$this->name."<br>";
		// echo "Age: ".$this->getAge()."<br>"; // Defined with private permission so use getter and setter 
		// echo "Sex: ".$this->sex."<br>";
		echo "Class: ".$this->className."<br>";

		// Call class method
		self::StaticHello();
	}
}

/*INSTANCE OF "Human" CLASS*/

// New instance without params
$hm = new Human;
echo $hm->name.'<br>';
// echo $hm->age; // <- Not implement because private permission
// echo $hm->sex; // <- Not implement becasue protected permission

echo "<br><br>";

$hm->Info();

echo "<br><br>";

// New instance with params
$hm2 = new Human("Kane", 25, "Male");
$hm2->Info();

echo "<br><br>";

// Call static method of Human Class
Human::StaticHello();

echo "<hr>";

/*INSTANCE OF "Student" CLASS*/
$sd = new Student;
echo $sd->className.'<br>';
echo $sd->name.'<br>';
// echo $sd->age;  // <- Not implement because private permission
// echo $sd->sex; // <- Not implement becasue protected permission

$sd->Info();
?>