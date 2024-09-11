<?php
// 1. Implementasikan kelas dosen dengan atribut nama,nip, dan mata kuliah
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    // 2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
    public function tampilkanDosen() {
        echo "Nama Dosen: " . $this->nama . "<br>";
        echo "NIP: " . $this->nip . "<br>";
        echo "Mata Kuliah: " . $this->mataKuliah . "<br>";
    }
}

// 3. Buat objek dari kelas Dosen
$dosen1 = new Dosen();

$dosen1->nama = "Bpk Susanto Radjiman";
$dosen1->nip = "230401223";
$dosen1->mataKuliah = "Desain Interasi Pengguna";

//  Menggunakan metode tampilkanDosen() untuk menampilkan informasi
$dosen1->tampilkanDosen();
?>