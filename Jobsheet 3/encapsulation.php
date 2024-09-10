<?php
// Kelas Student dengan enkapsulasi
class Student {
    private $name;
    private $studentID;

    public function __construct($name, $studentID) {
        $this->name = $name;
        $this->studentID = $studentID;
    }

    // Setter dan Getter untuk name
    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return "Student: " . $this->name;
    }

    // Setter dan Getter untuk studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return "Student ID: " . $this->studentID;
    }
}


$student1 = new Student("Minju", "230302002");
echo $student1->getName() . "<br>";
echo $student1->getStudentID() . "<br>";
echo "Nilai setelah di ubah:" . "<br>";

// Mengubah nilai atribut melalui setter
$student1->setName("Winter");
$student1->setStudentID("230301003");

echo $student1->getName() . "<br>";
echo $student1->getStudentID() . "<br>";
?>
