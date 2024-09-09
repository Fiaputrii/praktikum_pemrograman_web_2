<?php
//Definisi membuat class pengguna menggunakan abstract
abstract class Pengguna {
    protected $nama;

    //Konstruktor untuk menginisialisasi nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode abstrak yang harus diimplementasikan oleh class turunan
    abstract public function aksesFitur();
}

// Class Dosen yang mewarisi class pengguna dan mengimplementasikan metode abstract
class Dosen extends Pengguna {
// Atribut tambahan
    private $mataKuliah;

// Konstruktor untuk menginisialisasi nama dan matkul
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function aksesFitur() {
        return "Nama Dosen: ($this->nama)<br> Mata Kuliah: ($this->mataKuliah)<br>";
    }
}

// Class mahasiswa mewarisi class pengguna dan mengimplementasikan metode abstract
class Mahasiswa extends Pengguna {
    // Atribut tambahan
    private $nim;
    private $jurusan;

    // Konstruktor untuk menginisialisasi nama, nim, jurusan
    public function __construct($nama, $nim, $jurusan) {
        parent::__construct($nama);
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function aksesFitur() {
        return "Nama Mahasiswa: {$this->nama}<br> NIM: {$this->nim}<br> Jurusan: {$this->jurusan}<br>";
    }
}

//Instansiasi objek 
$dosen = new Dosen("Tiara Dinda", "Bahasa Inggris");
$mahasiswa= new Mahasiswa("Alifia", "230302025", "Komputer dan Bisnis");

// Memanggil metode aksesFitur()
echo $dosen->aksesFitur() . "<br>";
echo $mahasiswa->aksesFitur() . "<br>";
?>
