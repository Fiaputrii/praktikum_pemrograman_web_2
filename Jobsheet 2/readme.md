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

```php
// Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
Codingan ini menunjukan construct untuk menginisialisasi atribut

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
