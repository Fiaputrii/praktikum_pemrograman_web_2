<?php
// Kelas Person 
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return "Nama: " . $this->name;
    }
}
// Kelas Student mewarisi Person
class Student extends Person {
    // Tambah Atribut student
    public $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name); 
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return "Student ID: " . $this->studentID;
    }
}

$student1 = new Student("Devia Herena", "230302051");
echo $student1->getName() . "<br>";
echo $student1->getStudentID() . "<br>";
?>