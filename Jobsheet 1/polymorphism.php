<?php
class Pengguna {
    public function aksesFitur() {
        echo "Akses fitur dari Pengguna.\n";
    }
}

// Definisi kelas Dosen yang mewarisi Pengguna
class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Akses fitur khusus Dosen: Mengubah nilai mahasiswa.\n";
        echo "<br>";
    }
}

// Definisi kelas Mahasiswa yang mewarisi Pengguna
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Akses fitur khusus Mahasiswa: Melihat nilai ipk.\n";
    }
}

// Instansiasi objek dari kelas Dosen dan Mahasiswa
$dosen = new Dosen();
$mahasiswa = new Mahasiswa();

// Panggil metode aksesFitur() pada masing-masing objek
$dosen->aksesFitur();
$mahasiswa->aksesFitur();
?>
