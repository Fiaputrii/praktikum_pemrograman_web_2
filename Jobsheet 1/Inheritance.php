<?php
//membuat class pengguna
class Pengguna {
    // Atribut protected untuk menyimpan nama
    protected $nama;
    // Konstruktor untuk menginisialisasi atribut nama
    public function __construct($nama) {
        $this->nama = $nama;
    }
    // Getter untuk mengambil nilai dari atribut nama
    public function getNama() {
        return $this->nama;
    }
}
//mebuat class dosen yang mewarisi class pengguna//
class Dosen extends Pengguna {
    // Atribut private untuk menyimpan mata kuliah
    private $mataKuliah;

    // Konstruktor untuk menginisialisasi atribut nama dan mata kuliah
    public function __construct($nama, $matakuliah) {
        parent::__construct($nama);
        $this->matakuliah = $matakuliah;
    }

    public function getMatakuliah() {
        return $this->matakuliah;
    }
    
    // Metode untuk menampilkan data dosen (nama dan matkul)
    public function tampilkanData() {
        echo "Nama: " . $this->getNama() . "<br>";
        echo "Mata Kuliah: " . $this->getMatakuliah() . "<br>";
    }
}

// Instansiasi objek dari class Dosen dengan nama dan mata kuliah
$dosen1 = new Dosen("Tiara Dinda", "Desain Interaksi Pengguna");
// Memanggil metode tampilkanData()
$dosen1->tampilkanData();
?>