<?php

class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Metode untuk mengubah jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
}

// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa();

// Menetapkan nilai atribut secara langsung
$mahasiswa1->nama = "Nayla";
$mahasiswa1->nim = "230202071";
$mahasiswa1->jurusan = "Teknik Elektro";

echo "Sebelum update jurusan:<br>";
echo "Nama: " . $mahasiswa1->nama . "<br>";
echo "NIM: " . $mahasiswa1->nim . "<br>";
echo "Jurusan: " . $mahasiswa1->jurusan . "<br>";

// Mengubah jurusan menggunakan metode updateJurusan
$mahasiswa1->updateJurusan("Teknik Listrik");

echo "<br>Setelah update jurusan:<br>";
echo "Nama: " . $mahasiswa1->nama . "<br>";
echo "NIM: " . $mahasiswa1->nim . "<br>";
echo "Jurusan: " . $mahasiswa1->jurusan . "<br>";
?>
