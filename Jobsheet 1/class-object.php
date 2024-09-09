<?php
//Membuat class
class Mahasiswa {
    //Atribut atau properties
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode atau function 
    public function tampilkanInfo() {
        return "nama: $this->nama, nim: $this->nim, jurusan: $this->jurusan";
    }
}

// Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Alifia", "230302025", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanInfo();
?>