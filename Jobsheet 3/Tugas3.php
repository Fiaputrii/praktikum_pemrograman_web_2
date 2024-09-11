<?php

class Person {
    protected $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getRole() {
        return "Peran: Person";
    }
}

class Dosen extends Person {
    private $nidn;

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }

    // Override metode getRole untuk menampilkan peran dosen
    public function getRole() {
        return "Peran: Dosen";
    }
}

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
}

abstract class Jurnal {
    // Metode abstrak untuk mengelola pengajuan jurnal
    abstract public function kelolaPengajuan();
}

class JurnalDosen extends Jurnal {

    public function kelolaPengajuan() {
        return "Mengelola pengajuan jurnal dosen";
    }
}

class JurnalMahasiswa extends Jurnal {
     
    public function kelolaPengajuan() {
        return "Mengelola pengajuan jurnal mahasiswa";
    }
}

$dosen = new Dosen();
$dosen->setName("Bpk. Naufal");
$dosen->setNidn("330202341");

$mahasiswa = new Mahasiswa();
$mahasiswa->setName("Ana Febri");
$mahasiswa->setNim("230302001");

$jurnalDosen = new JurnalDosen();
$jurnalMahasiswa = new JurnalMahasiswa();


echo $dosen->getName() . "<br>";
echo $dosen->getNidn() . "<br>";
echo $dosen->getRole() . "<br>";
echo $jurnalDosen->kelolaPengajuan() . "<br><br>";

echo $mahasiswa->getName() . "<br>";
echo $mahasiswa->getNim() . "<br>";
echo $mahasiswa->getRole() . "<br>";
echo $jurnalMahasiswa->kelolaPengajuan() . "<br>";
?>
