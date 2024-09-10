<?php

class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return "Nama: " . $this->name;
    }
}

// Kelas Teacher mewarisi dari Person
class Teacher extends Person {
    public $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    // Override metode getName() untuk Teacher
    public function getName() {
        return "Teacher: " . $this->name;
    }
}

// Override metode getName() di kelas Student
class Student extends Person {
    public $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

// Override metode getName() untuk Student
    public function getName() {
        return "Student: " . $this->name;
    }
}

// Contoh penggunaan
$student1 = new Student("Winter", "230301270");
$teacher1 = new Teacher("Ny. Karina", "230302320");

echo $student1->getName() . "<br>";
echo $teacher1->getName() . "<br>";
?>
