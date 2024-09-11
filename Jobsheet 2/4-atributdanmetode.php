<?php

class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Metode untuk menetapkan nilai NIM (setter)
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}

// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa();

$mahasiswa1->nama = "Shalsa";
$mahasiswa1->nim = "230302021";
$mahasiswa1->jurusan = "Teknik Listrik";

echo "Sebelum update NIM:<br>";
$mahasiswa1->tampilkanData();

// Mengubah nilai NIM menggunakan metode setter setNim()
$mahasiswa1->setNim("230301011");

echo "<br>Setelah update NIM:<br>";
$mahasiswa1->tampilkanData();
?>
