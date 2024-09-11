<?php

abstract class Pengguna {
    // Metode abstrak yang harus diimplementasikan oleh class turunan
    abstract public function aksesFitur();
}

// Implementasikan class Mahasiswa yang mewarisi dari Pengguna
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        return "Mahasiswa dapat melihat nilai ipk.";

    }
}

// Implementasikan class Dosen yang mewarisi dari Pengguna
class Dosen extends Pengguna {
    public function aksesFitur() {
        return "Dosen dapat mengakses sistem nilai.";
    }
}

$mahasiswa = new Mahasiswa();
$dosen = new Dosen();

// Memanggil metode aksesFitur() dari objek yang diinstansiasi
echo $mahasiswa->aksesFitur(); 
echo "\n";
echo $dosen->aksesFitur(); 

?>