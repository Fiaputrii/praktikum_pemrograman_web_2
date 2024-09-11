<?php

// Membuat Class Mahasiswa dan Atribut Nama Nim Jurusan
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Metode untuk menampilkan data
    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}

// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Alifia";
$mahasiswa1->nim = "230302025";
$mahasiswa1->jurusan = "Teknik Informatika";

$mahasiswa1->tampilkanData();
?>