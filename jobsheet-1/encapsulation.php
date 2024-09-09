<?php
class Mahasiswa {
    //Atribut
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Getter nama
    public function getNama() {
        return $this->nama;
    }
    //Setter nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    //Getter nim
    public function getNim() {
        return $this->nim;
    }
    //Setter nim
    public function setNim($nim) {
        $this->nim = $nim;
    }

    //Getter jurusan
    public function getJurusan() {
        return $this->jurusan;
    }
    //Setter jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    //tampilkan data
    public function tampilkanData() {
        echo "Nama: ". $this->getNama() . "<br>";
        echo "Nim: ". $this->getNim() . "<br>";
        echo "Jurusan: ". $this->getJurusan() . "<br>";
    }
}

//Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Alifia", "230302025", "Komputer dan Bisnis");
$mahasiswa1->setNama("Alifia");
$mahasiswa1->tampilkanData();
?>