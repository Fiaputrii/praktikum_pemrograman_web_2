<?php
//membuat class
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode aksesFitur () yang akan di override oleh class turunan
    public function aksesFitur() {
        return "Pengguna umum mengakses fitur";
    }
}

//Definisi class dosen yang meng - override aksesFitur()
class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
//Implementasi
    public function aksesFitur() {
        return "Nama Dosen: ($this->nama)<br> Mata Kuliah: ($this->mataKuliah)<br>";
    }
}

//Definisi class mahasiswa yang meng-override aksesFitur()
class Mahasiswa extends Pengguna {
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        parent::__construct($nama);
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
//Implementasi
    public function aksesFitur() {
        return "Nama Mahasiswa: {$this->nama}<br> NIM: {$this->nim}<br> Jurusan: {$this->jurusan}<br>";
    }
}

//Instansiasi objek dari class dosen dan mahasiswa
$dosen = new Dosen("Tiara Dinda", "Bahasa Inggris");
$mahasiswa= new Mahasiswa("Alifia", "230302025", "Komputer dan Bisnis");

//Memanggil metode aksesFitur() dari objek Dosen dan Mahasiswa
echo $dosen->aksesFitur() . "<br>";
echo $mahasiswa->aksesFitur() . "<br>";
?>