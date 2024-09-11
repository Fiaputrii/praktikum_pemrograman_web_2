<?php

class Person {
    public $name;

    // Metode untuk mengambil nama (getter)
    public function getName() {
        return "Nama: " . $this->name;
    }

    // Metode untuk menetapkan nama (setter)
    public function setName($name) {
        $this->name = $name;
    }
}

class Student extends Person {
    private $studentID;

    public function getStudentID() {
        return "Student ID: " . $this->studentID;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    public function getName() {
        return "Nama Mahasiswa: " . $this->name;
    }
}

$student1 = new Student();

$student1->setName("Annisa Febri");
$student1->setStudentID("230302051");

echo $student1->getName() . "<br>";
echo $student1->getStudentID() . "<br>";
?>
