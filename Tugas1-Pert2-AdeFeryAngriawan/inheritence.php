<?php
// Kelas utama
class Person {
  public $name;
  public $addres;
  public $noHp;
  

  public function __construct($name, $addres, $noHp) {
    $this->name = $name;
    $this->addres = $addres;
    $this->noHp = $noHp;
  }

  public function greet() {
    echo "Hello, I am :" . $this->name;
    echo "My addres :" . $this->addres;
    echo "No Hp :" . $this->noHp;
  }
}

// Kelas turunan (subclass)
class Student extends Person {
  public $studentID;
  public $classLevel;
  public function __construct($name,$addres,$noHp,$studentID,$classLevel) {
    parent::__construct($name, $addres, $noHp, $studentID,$classLevel);
    $this->studentID = $studentID;
    $this->classLevel = $classLevel;
  }
}

class Teacher extends Person {
  public $teacherID;
  public $role;
  public function __construct($name,$addres,$noHp,$teacherID,$role) {
    parent::__construct($name, $addres, $noHp, $teacherID,$role);
    $this->teacherID = $teacherID;
    $this->role = $role;
    
  }
}

// Penggunaan inheritance
$student = new Student ("Ade Fery Angriawan \n", "Bandung \n", "0813 \n", "2155 \n", "Mahasiswa \n");
echo $student->name;      // Output: John Doe
echo $student->addres;
echo $student->noHp;
echo $student->studentID;
echo $student->classLevel;
// $student->greet();        

echo "\n";
echo "----------";
echo "\n";
echo "\n";

$teacher = new Teacher("Kang Ikhwan \n", "UTB \n", "0812 \n", "71721 \n", "Web Prog 2 \n");
echo $teacher->name;
echo $teacher->addres;
echo $teacher->noHp;
echo $teacher->teacherID;
echo $teacher->role;
// $teacher->greet();
?>
