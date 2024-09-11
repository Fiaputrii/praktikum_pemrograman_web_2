<?php
// Membuat class Mahasiswa
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
}

// Instansiasi objek dari class Mahasiswa menggunakan constructor
$mahasiswa1 = new Mahasiswa("Winter", "230202341", "Teknik Informatika");

echo "Nama: " . $mahasiswa1->nama . "<br>";
echo "NIM: " . $mahasiswa1->nim . "<br>";
echo "Jurusan: " . $mahasiswa1->jurusan . "<br>";
?>
