<?php
class Pengguna {
    private $nama;
    
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Metode getter untuk nama
    public function getNama() {
        return $this->nama;
    }
}

// Definisi kelas Dosen yang mewarisi Pengguna
class Dosen extends Pengguna {
    // Atribut private tambahan
    private $mataKuliah;
    
    public function setMataKuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }

    public function getMataKuliah() {
        return $this->mataKuliah;
    }
}

// Instansiasi objek dari kelas Dosen
$dosen = new Dosen();

$dosen->setNama("Tiara Dinda");
$dosen->setMataKuliah("Bahasa Inggris");

// Menampilkan data dosen
echo "Nama: " . $dosen->getNama() . "\n";
echo "<br>";
echo "Mata Kuliah: " . $dosen->getMataKuliah() . "\n";
?>