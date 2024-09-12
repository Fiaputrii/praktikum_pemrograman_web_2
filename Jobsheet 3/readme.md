# Jobsheet 3

<h2> Inheritance (Pewarisan) </h2>

- Pembuatan Class dan Atribut
```php
class Person {
    public $name;
```

- Membuat fungsi getName

```php
 public function getName() {
        return "Nama: " . $this->name;
    }
```

- Membuat class student yang mewarisi kelas person

```php
class Student extends Person {
```

- Menambahkan atribut studentID

```php
public $studentID;
```

- Mengambil nilai dari atribut di objek menggunakan fungsi getStudent
  
```php
public function getStudentID() {
        return "Student ID: " . $this->studentID;
    }
```

- Membuat sebuah objek dari kelas Student

```php
$student1 = new Student();

$student1->name = "Devia Herena";
$student1->studentID = "230302051";
```

- Menampilkan data

```php
echo $student1->getName() . "<br>";
echo $student1->getStudentID() . "<br>";
```

<h3> Output inheritance </h3>

![Cuplikan layar 2024-09-11 232751](https://github.com/user-attachments/assets/6a4953b3-f404-487a-ba8b-01442791e1cf)

<h2> Polymorphism </h2>

- Membuat Class dan Atribut

```php
class Person {
    public $name;
```

- Membuat fungsi getName

```php
public function getName() {
        return "Nama: " . $this->name;
    }
```

- Membuat class Teacher dan mewarisi Person

```php
class Student extends Person {
```

- Override public function getName

```php
public function getName() {
        return "Nama Mahasiswa: " . $this->name;
    }
```

- Membuat class Teacher 

```php
class Teacher extends Person {
```

- Menambahkan atribut teacherID di class teacher

```php
public $teacherID;
```

- Override class Teacher untuk format yang berbeda

```php
public function getName() {
        return "Nama Dosen: " . $this->name;
    }
```

- Instansiasi objek dari class student

```php
$student1 = new Student();
$student1->name = "Ferina Sheren";
```

- Instansiasi objek dari class Teacher

```php
$teacher1 = new Teacher();
$teacher1->name = "Bpk Faisal";
```

- Menampilkan data

```php
echo $student1->getName() . "<br>";
echo $teacher1->getName() . "<br>";
```

<h3> Output Polymorphism </h3>

![Cuplikan layar 2024-09-11 232802](https://github.com/user-attachments/assets/dfddc923-58ff-4ae7-a605-b374990ac35f)

<h2> Encapsulation </h2>

- Membuat class

```php
class Student {
```

- Merubah Atribut Name dan StudentID menjadi private

```php
private $name;
private $studentID;
```

- Metode setter untuk menetapkan nama

```php
public function setName($name) {
        $this->name = $name;
    }
```

- Metode getter untuk mendapatkan nama

```php
public function getName() {
        return $this->name;
    }
```

- Metode setter untuk menetapkan studentID

```php
public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
```

- Metode getter untuk mendapatkan studentID

```php
public function getStudentID() {
        return $this->studentID;
    }
```

- Membuat Objek

```php
$student1 = new Student();

$student1->setName("Devia Herena");
$student1->setStudentID("230302051");
```

- Menampilkan data sebelum di ubah

```php
echo "Nama: " . $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID() . "<br>";
?>
```
- Mengubah nilai atribut

```php
$student1->setName("Pamungkas");
$student1->setStudentID("320202452");
```

- Menampilkan data

```php
echo "<br>Data mahasiswa setelah perubahan:<br>";
echo "Nama: " . $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID() . "<br>";
```

<h3> Output Encapsulation </h3>

![Cuplikan layar 2024-09-11 232812](https://github.com/user-attachments/assets/0c7491d4-7752-4bdf-9766-e024e2310096)

<h2> Abstraction </h2>

- Membuat class abstract

```php
abstract class Course {
```

- Membuat public function abstract

```php
abstract public function getCourseDetails();
```

- Kelas Onlinecourse yang mengimplementasikan getcourseDetail

```php
class OnlineCourse extends Course {
    private $namaKursus;
    private $platform;

    public function setCourseDetails($namaKursus, $platform) {
        $this->namaKursus = $namaKursus;
        $this->platform = $platform;
    }

    public function getCourseDetails() {
        return "Online Course: " . $this->namaKursus . " di platform " . $this->platform;
    }
```

- Kelas Offlinecourse yang mengimplementasikan getcourseDetail

```php
class OfflineCourse extends Course {
    private $namaKursus;
    private $location;

    public function setCourseDetails($namaKursus, $location) {
        $this->namaKursus = $namaKursus;
        $this->location = $location;
    }

    public function getCourseDetails() {
        return "Offline Course: " . $this->namaKursus . " lokasi di " . $this->location;
    }
```

- Instansiasi objek dari class Online course

```php
$onlineCourse = new OnlineCourse();
$onlineCourse->setCourseDetails("Bahasa Korea", "Ruang Guru");
```

- Instansiasi objek dari class Offlinecourse

```php
$offlineCourse = new OfflineCourse();
$offlineCourse->setCourseDetails("Fisika", "Cafe");
```

<h3> Output Abstraction </h3>

![Cuplikan layar 2024-09-11 232825](https://github.com/user-attachments/assets/c5d1b46d-294d-449e-803d-54189766b0a1)

ub.com/user-attachments/assets/918d7233-06dd-40c7-a2cf-b5abce8f892f)

<h2> Tugas </h2>

- Membuat Class, Atribut (protected) dan menambahkan construct untuk menginisialisasi (name)

```php
class Person {
    protected $name;
```

```php

- Membuat setname dan getname

```php
public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
```

- Membuat public function menggunakan metode polymorphism getRole()

```php
// Metode Polymorphism getRole()
    public function getRole() {
        return "Peran: Person";
    }
```

- Membuat class Dosen dan subclass (Person)

```php
class Dosen extends Person {
```

- Membuat Atribut nidn

```php
private $nidn;
```

- Membuat getNidn dan setNidn (Encapsulation)

```php
public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }
```

- Override metode getRole

```php
public function getRole() {
        return "Peran: Dosen";
    }
```

- Class Mahasiswa juga memiliki langkah  yang sama dengan Class Dosen

```php
class Mahasiswa extends Person {
    private $nim;

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    // Override metode getRole untuk menampilkan peran mahasiswa
    public function getRole() {
        return "Peran: Mahasiswa";
    }
```

- Membuat class abstract Jurnal

```php
abstract class Jurnal {
```

- Membuat public function abstract kelolaPengajuan

```php
abstract public function kelolaPengajuan();
}
```

- Membuat class JurnalDosen yang mewarisi class Jurnal

```php
class JurnalDosen extends Jurnal {
```

- Membuat class JurnalDosen yang diwarisi dari class Jurnal

```php
class JurnalDosen extends Jurnal {
```

- Membua public function kelolaPengajuan

```php
public function kelolaPengajuan() {
        return "Mengelola pengajuan jurnal dosen";
    }
```

- Membuat class JurnalMahasiswa yang mewarisi Jurnal

```php
class JurnalMahasiswa extends Jurnal {
```

- Membuat public function kelolaPengajuan

```php
 public function kelolaPengajuan() {
        return "Mengelola pengajuan jurnal mahasiswa";
    }
```

- Membuat Objek Dosen, Mahasiswa, JurnalDosen, JurnalMahasiswa

```php
$dosen = new Dosen();
$dosen->setName("Bpk. Naufal");
$dosen->setNidn("330202341");

$mahasiswa = new Mahasiswa();
$mahasiswa->setName("Ana Febri");
$mahasiswa->setNim("230302001");

$jurnalDosen = new JurnalDosen();
$jurnalMahasiswa = new JurnalMahasiswa();
```

- Menampilkan data

```php
echo $dosen->getName() . "<br>";
echo $dosen->getNidn() . "<br>";
echo $dosen->getRole() . "<br>";
echo $jurnalDosen->kelolaPengajuan() . "<br><br>";

echo $mahasiswa->getName() . "<br>";
echo $mahasiswa->getNim() . "<br>";
echo $mahasiswa->getRole() . "<br>";
echo $jurnalMahasiswa->kelolaPengajuan() . "<br>";
```

<h3> Output Tugas 3 </h3>

![Cuplikan layar 2024-09-11 232836](https://github.com/user-attachments/assets/a96a913a-67b0-45a8-b013-1b5a9f027f2d)
