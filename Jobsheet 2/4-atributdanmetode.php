<?php
// Membuat class Mahasiswa
class Mahasiswa {
    // Mendefinisikan atribut
    public $nama;
    public $nim;  
    public $jurusan;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }

    // Metode setter untuk mengubah NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
        echo "NIM berhasil diperbarui menjadi:  " . $this->nim . "<br>";
    }
}

// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa("Karina", "230202071", "Sistem Informasi");

// Menampilkan data mahasiswa sebelum perubahan NIM
$mahasiswa1->tampilkanData();

// Mengubah NIM mahasiswa menggunakan metode setNim()
$mahasiswa1->setNim("230301201");

// Menampilkan data mahasiswa setelah perubahan NIM
$mahasiswa1->tampilkanData();

?>