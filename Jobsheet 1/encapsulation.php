<?php
class Mahasiswa {
    // Atribut private
    private $nama;
    private $nim;
    private $jurusan;
    
    // Setter untuk nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter untuk nama
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk nim
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Getter untuk nim
    public function getNim() {
        return $this->nim;
    }

    // Setter untuk jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // Getter untuk jurusan
    public function getJurusan() {
        return $this->jurusan;
    }
}

$mahasiswa = new Mahasiswa();

$mahasiswa->setNama("Ashila") ;
$mahasiswa->setNim("230302032") ;
$mahasiswa->setJurusan("Sistem Informasi") ;

echo "Nama: " . $mahasiswa->getNama() . "<br>";
echo "NIM: " . $mahasiswa->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa->getJurusan() . "<br>";
?>