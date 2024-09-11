<?php
class Person {
    public $name;

    public function getName() {
        return "Nama: " . $this->name;
    }
}

class Student extends Person {

    public function getName() {
        return "Nama Mahasiswa: " . $this->name;
    }

}

class Teacher extends Person {
    public $teacherID;

    public function getName() {
        return "Nama Dosen: " . $this->name;
    }
}

// Instansiasi objek dari class Student
$student1 = new Student();
$student1->name = "Ferina Sheren";

// Instansiasi objek dari class Teacher
$teacher1 = new Teacher();
$teacher1->name = "Bpk Faisal";

echo $student1->getName() . "<br>";
echo $teacher1->getName() . "<br>";
?>
