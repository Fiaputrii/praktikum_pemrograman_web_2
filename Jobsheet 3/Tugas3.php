<?php

// Kelas induk Person
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Metode Polymorphism getRole()
    public function getRole() {
        return "Person";
    }

    // Getter untuk nama
    public function getName() {
        return $this->name;
    }
}

// Kelas Dosen yang menginherit Person
class Dosen extends Person {
    // Atribut yang dilindungi dengan Encapsulation
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // Override metode getRole untuk Polymorphism
    public function getRole() {
        return "Dosen";
    }

    // Getter dan Setter untuk NIDN (Encapsulation)
    public function getNidn() {
        return $this->nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
}

// Kelas Mahasiswa yang menginherit Person
class Mahasiswa extends Person {
    // Atribut yang dilindungi dengan Encapsulation
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
}

// Kelas abstrak Jurnal untuk implementasi Abstraction
abstract class Jurnal {
    protected $title;

    public function __construct($title) {
        $this->title = $title;
    }

    // Metode abstrak untuk submit jurnal
    abstract public function submitJurnal();
}

// Kelas JurnalDosen yang mengimplementasikan Jurnal
class JurnalDosen extends Jurnal {
    private $nidn;

    public function __construct($title, $nidn) {
        parent::__construct($title);
        $this->nidn = $nidn;
    }

    // Implementasi metode submitJurnal
    public function submitJurnal() {
        return "Jurnal dengan judul '$this->title' telah diajukan oleh Dosen dengan NIDN $this->nidn.";
    }
}

// Kelas JurnalMahasiswa yang mengimplementasikan Jurnal
class JurnalMahasiswa extends Jurnal {
    private $nim;

    public function __construct($title, $nim) {
        parent::__construct($title);
        $this->nim = $nim;
    }

    // Implementasi metode submitJurnal
    public function submitJurnal() {
        return "Jurnal dengan judul '$this->title' telah diajukan oleh Mahasiswa dengan NIM $this->nim.";
    }
}

// Contoh penggunaan
$dosen = new Dosen("Budi", "123456789");
echo $dosen->getName() . " adalah seorang " . $dosen->getRole() . " dengan NIDN " . $dosen->getNidn() . PHP_EOL;

$mahasiswa = new Mahasiswa("Ani", "987654321");
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole() . " dengan NIM " . $mahasiswa->getNim() . PHP_EOL;

$jurnalDosen = new JurnalDosen("AI Research", $dosen->getNidn());
echo $jurnalDosen->submitJurnal() . PHP_EOL;

$jurnalMahasiswa = new JurnalMahasiswa("Machine Learning Study", $mahasiswa->getNim());
echo $jurnalMahasiswa->submitJurnal() . PHP_EOL;

?>
