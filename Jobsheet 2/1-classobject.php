<?php
// Mendefinisikan class Mahasiswa
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}

// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa();

$mahasiswa1->nama = "Karina";
$mahasiswa1->nim = "230302024";
$mahasiswa1->jurusan = "Teknik Elektro";

$mahasiswa1->tampilkanData();
?>