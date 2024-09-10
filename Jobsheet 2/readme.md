# Jobsheet 2

<h2> Penjelasan Singkat </h2>

- Class : Kelas ini memiliki dua atribut (merk dan warna) dan satu metode
(deskripsi).
- Object: $mobil1 adalah objek yang merupakan instance dari kelas Mobil.
Metode deskripsi() digunakan untuk menampilkan informasi tentang objek
tersebut.
- Atribut: Menyimpan data atau keadaan dari objek.
- Metode: Operasi atau fungsi yang dilakukan oleh objek.

<p> Aksesibilitas </p>

- Public: Dapat diakses dari mana saja.
- Private: Hanya dapat diakses dalam kelas itu sendiri.
- Protected: Dapat diakses oleh kelas itu sendiri dan kelas turunan.

<h2> Langkah langkah </h2>

```php
// Membuat class Mahasiswa
class Mahasiswa {
    // Mendefinisikan atribut
    public $nama;
    public $nim;  
    public $jurusan;
```
Codingan ini menunjukan pembuatan Class dan Atribut (menggunakan public)

- Class menggunakan atribut public dikarenakan agar semua class bisa mengakses atribut tersebut


```php
// Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
Codingan ini menunjukan construct untuk menginisialisasi atribut

- Construct (__construct()) adalah metode yang sangat berguna untuk menyiapkan keadaan awal sebuah objek pada saat pembuatannya, memastikan bahwa objek memiliki semua nilai atau kondisi yang diperlukan untuk berfungsi dengan benar

```php
// Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama: " . $this->nama . "<br>" .
               "NIM: " . $this->nim . "<br>" .
               "Jurusan: " . $this->jurusan . "<br>";
    }
```
Codingan ini menunjukan tampilkanData() sebagai metode untuk menampilkan data

```php
// Metode untuk mengubah jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
```
Codingan ini menunjukan updateJurusan sebagai metode untuk mengubah data jurusan

```php
// Metode setter untuk mengubah NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
```

Codingan ini menunjukan setNim untuk mengubah nim

```php
// Instansiasi objek dari class Mahasiswa dengan constructor
$mahasiswa1 = new Mahasiswa("Karina", "3020291202", "Teknik Elektro");
```
Codingan ini menunjukan instansiasi objek

```php
// Metode untuk memperbarui jurusan mahasiswa
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
        echo "Jurusan telah diperbarui menjadi: " . $this->jurusan . "<br>";
    }
}

// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa("Karina", "230202071", "Teknik elektro");

// Menampilkan data mahasiswa sebelum update jurusan
echo "Data sebelum update jurusan:<br>";
$mahasiswa1->tampilkanData();

// Mengubah jurusan menggunakan metode updateJurusan()
$mahasiswa1->updateJurusan("Teknik Mesin");

// Menampilkan data mahasiswa setelah update jurusan
echo "<br>Data setelah update jurusan:<br>";
$mahasiswa1->tampilkanData();

?>
```
Codingan di atas adalah cara untuk memperbarui jurusan mengggunakan updateJurusan

```php
// Metode setter untuk mengubah NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
        echo "NIM berhasil diperbarui menjadi:  " . $this->nim . "<br>";
    }
}

// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa("Karina", "230202071", "Sistem Informasi");

// Menampilkan data mahasiswa sebelum perubahan NIM
$mahasiswa1->tampilkanData();

// Mengubah NIM mahasiswa menggunakan metode setNim()
$mahasiswa1->setNim("230301201");

// Menampilkan data mahasiswa setelah perubahan NIM
$mahasiswa1->tampilkanData();

?>
```
Codingan ini menunjukkan cara untuk mengubah nim menggunakan setter
