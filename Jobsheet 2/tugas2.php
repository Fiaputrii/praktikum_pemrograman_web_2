<?php
// 1. Implementasikan kelas dosen dengan atribut nama, nip, dan mata kuliah
// Membuat class Dosen
class Dosen {
    // Mendefinisikan atribut
    public $nama;
    public $nip;
    public $mataKuliah;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    //2.  Metode untuk menampilkan informasi dosen
    public function tampilkanDosen() {
        return "Nama Dosen : " . $this->nama . "<br>" .
                "Nip: " . $this->nip . "<br>" .
                "Mata Kuliah: " . $this->mataKuliah . "<br>";
    }
}
// 3. Buat objek dari kelas dosen
// Instansiasi objek dari class Dosen
$dosen1 = new Dosen("Tiara Dinda", "330202014", "Pemrograman Web");

// Menampilkan informasi dosen
echo $dosen1->tampilkanDosen();

?>
