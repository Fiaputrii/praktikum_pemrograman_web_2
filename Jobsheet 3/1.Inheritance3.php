<?php

class Person {
    public $name;

    // Metode untuk mengambil nama
    public function getName() {
        return "Nama: " . $this->name;
    }
}

class Student extends Person {
    public $studentID;

    // Metode untuk mengambil Student ID
    public function getStudentID() {
        return "Student ID: " . $this->studentID;
    }
}

// Instansiasi objek dari class Student
$student1 = new Student();

$student1->name = "Devia Herena";
$student1->studentID = "230302051";

echo $student1->getName() . "<br>";
echo $student1->getStudentID() . "<br>";
?>
