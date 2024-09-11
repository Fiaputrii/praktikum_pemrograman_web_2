# Jobsheet 3

<h2> Inheritance (Pewarisan) </h2>

- Pembuatan Class dan Atribut
```php
<?php
// Kelas Person 
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
```

- Membuat fungsi getName

```php
public function getName() {
        return "Nama: " . $this->name;
    }
```

- Kelas student yang mewarisi kelas person

```php
class Student extends Person {
```

- Menambahkan atribut studentID

```php
public $studentID;
```

- Membuat construct untuk menginisialisasi name, studentID

```php
public function __construct($name, $studentID) {
        parent::__construct($name); 
        $this->studentID = $studentID;
```

- Mengambil nila dari atribut di objek menggunakan fungsi getStudent
```php
public function getStudentID() {
        return "Student ID: " . $this->studentID;
    }
```

- Membuat sebuah objek dari kelas Student dan kemudian memanggil metode dari objek tersebut.

```php
$student1 = new Student("Devia Herena", "230302051");
echo $student1->getName() . "<br>";
echo $student1->getStudentID() . "<br>";
```

<h2> Polymorphism </h2>

- Membuat Class dan Atribut

```php
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
```

- Membuat fungsi getName

```php
public function getName() {
        return "Nama: " . $this->name;
    }
```

- Membuat class Teacher dan mewarisi Person

```php
class Teacher extends Person {
```

- Membuat atribut baru bernama teacherID

```php
public $teacherID;
```

- Mmebuat construct untuk menginisialisasi name, teacherID

```php
public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }
```

- Override class teacher untuk format berbeda

```php
public function getName() {
        return "Teacher: " . $this->name;
    }
```

- Membuat class Student yang mewarisi Person dan membuat atribut

```php
class Student extends Person {
    public $studentID;
```

- Membuat construct untuk menginisialisasi name, student

```php
public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }
```

- Override class Student untuk format yang berbeda

```php
public function getName() {
        return "Student: " . $this->name;
    }
```

- Membuat objek lalu memanggil

```php
$student1 = new Student("Winter", "230301270");
$teacher1 = new Teacher("Ny. Karina", "230302320");
```

- Menampilkan nama dari objek Student dan Teacher

```php
echo $student1->getName() . "<br>";
echo $teacher1->getName() . "<br>";
```

<h2> Encapsulation </h2>

- Membuat class

```php
class Student {
```

- Mengubah atribut name dan studentID menjadi private

```php
private $name;
    private $studentID;
```

- Menambahkan construct untuk menginisialisasi name dan studentID

```php
public function __construct($name, $studentID) {
        $this->name = $name;
        $this->studentID = $studentID;
    }
```

- Membuat setter dan getter untuk name (Metode ini digunakan untuk mengatur (setter) dan mengambil (getter) nilai dari atribut private atau protected dalam sebuah kelas)

```php
public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return "Student: " . $this->name;
    }
```

- Membuat setter dan getter untuk studentID ( Metode ini digunakan untuk mengatur (setter) dan mengambil (getter) nilai dari atribut private atau protected dalam sebuah kelas)

```php
public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return "Student ID: " . $this->studentID;
    }
```

- Membuat objek

```php
$student1 = new Student("Minju", "230302002");
```

- Menampilkan data sebelum ubah

```php
echo $student1->getName() . "<br>";
echo $student1->getStudentID() . "<br>";
```

- Mengubah data menggunakan set

```php
$student1->setName("Winter");
$student1->setStudentID("230301003");
```

- Menampilkan data setelah di set atau diubah

```php
echo $student1->getName() . "<br>";
echo $student1->getStudentID() . "<br>";
```

<h2> Abstraction </h2>

- Membuat class abstract

```php
abstract class Course {
```

- Membuat atribut (protected)

```php
protected $courseName;
```

- Membuat construct untuk menginisialisasi courseName

```php
public function __construct($courseName) {
        $this->courseName = $courseName;
    }
```

- Metode abstract

```php
abstract public function getCourseDetails();
```

- Kelas Onlinecourse yang mengimplementasikan getcourseDetail

```php
class OnlineCourse extends Course {
    public function getCourseDetails() {
        return "Online Course: " . $this->courseName . "<br>Platform: Goggle Meet";
    }
```

- Kelas Offlinecourse yang mengimplementasikan getcourseDetail

```php
class OfflineCourse extends Course {
    public function getCourseDetails() {
        return "Offline Course: " . $this->courseName . "<br>Location: Cafe";
    }
```

- Membuat objek Onlinecourse dan Offlinecourse

```php
$onlineCourse = new OnlineCourse("English");
$offlineCourse = new OfflineCourse("Science");
```

- Menampilkan data

```php
echo $onlineCourse->getCourseDetails() . "<br>";
echo $offlineCourse->getCourseDetails() . "<br>";
```

<h2> Tugas </h2>

- Membuat Class, Atribut (protected) dan menambahkan construct untuk menginisialisasi (name)

```php
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }
```

- Membuat public function menggunakan metode polymorphism getRole()

```php
// Metode Polymorphism getRole()
    public function getRole() {
        return "Person";
    }
```

- Membuat fungsi getName

```php
public function getName() {
        return $this->name;
    }
```

- Membuat class Dosen dan subclass (Person)

```php
class Dosen extends Person {
```

- Membuat Atribut nidn dan membuat public function name, nidn

```php
private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }
```

- Override metode getRole

```php
public function getRole() {
        return "Dosen";
    }
```

- Membuat setter dan getter untuk nidn

```php
// Getter dan Setter untuk NIDN (Encapsulation)
    public function getNidn() {
        return $this->nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
```

- Class Mahasiswa juga memiliki langkah  yang sama dengan Class Dosen

```php
class Mahasiswa extends Person {
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Override metode getRole untuk Polymorphism
    public function getRole() {
        return "Mahasiswa";
    }

    // Getter dan Setter untuk NIM (Encapsulation)
    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }
```

- Membuat class abstract Jurnal , Atribut 

```php
abstract class Jurnal {
    protected $title;
```

- Membuat public function untuk atribut title

```php
public function __construct($title) {
        $this->title = $title;
    }
```

- Membuat metode abstrak untuk submitJurnal

```php
abstract public function submitJurnal();
```

- Membuat class JurnalDosen yang diwarisi dari class Jurnal

```php
class JurnalDosen extends Jurnal {
```

- Membuat Atribut dan fungsi construct untuk title, dan nidn

```php
private $nidn;

    public function __construct($title, $nidn) {
        parent::__construct($title);
        $this->nidn = $nidn;
    }
```

- Implementasi metode submitJurnal

```php
public function submitJurnal() {
        return "Jurnal dengan judul '$this->title' telah diterima oleh Dosen dengan NIDN $this->nidn.";
    }
```

- Membuat class JurnalMahasiswa dan langkah langkah nya sama dengan class JurnalDosen

```php
class JurnalMahasiswa extends Jurnal {
    private $nim;

    public function __construct($title, $nim) {
        parent::__construct($title);
        $this->nim = $nim;
    }

    // Implementasi metode submitJurnal
    public function submitJurnal() {
        return "Jurnal dengan judul '$this->title' telah diterima oleh Mahasiswa dengan NIM $this->nim. ";
    }
```

- Contoh Pengguna

```php
$dosen = new Dosen("Bpk Sutrisno", "202101022");
echo $dosen->getName() . " adalah seorang " . $dosen->getRole() . " dengan NIDN  " . $dosen->getNidn() . "<br>";

$mahasiswa = new Mahasiswa("Ferina", "230301031");
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole() . " dengan NIM " . $mahasiswa->getNim() . "<br>";

$jurnalDosen = new JurnalDosen("Matematika Diskrit", $dosen->getNidn());
echo $jurnalDosen->submitJurnal() . "<br>";

$jurnalMahasiswa = new JurnalMahasiswa("Hukum Newton", $mahasiswa->getNim());
echo $jurnalMahasiswa->submitJurnal() . "<br>";
```
