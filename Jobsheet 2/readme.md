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

<h2> Penjabaran </h2>

### 1. Pembuatan Class dan Atribut (menggunakan public)

- Class menggunakan atribut public dikarenakan agar semua class bisa mengakses atribut tersebut
  
```php
// Membuat class Mahasiswa
class Mahasiswa {
    // Mendefinisikan atribut
    public $nama;
    public $nim;  
    public $jurusan;
```

### 2. Construct untuk menginisialisasi atribut

- Construct (__construct()) adalah metode yang sangat berguna untuk menyiapkan keadaan awal sebuah objek pada saat pembuatannya, memastikan bahwa objek memiliki semua nilai atau kondisi yang diperlukan untuk berfungsi dengan benar

```php
// Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```

### 3. TampilkanData() 

- Tampilkandata() sebagai metode untuk menampilkan data yang sudah di masukkan lalu keluar di output

```php
// Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama: " . $this->nama . "<br>" .
               "NIM: " . $this->nim . "<br>" .
               "Jurusan: " . $this->jurusan . "<br>";
    }
```

### 4. updateJurusan 

- Metode updateJurusan sebagai metode untuk mengubah data jurusan

```php
// Metode untuk mengubah jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
```

### 4. setNim

- Code ini untuk mengubah data atau menyeting data

```php
// Metode setter untuk mengubah NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
```

### 5. Codingan ini menunjukan instansiasi objek dari mahasiswa

```php
$mahasiswa1 = new Mahasiswa("Karina", "3020291202", "Teknik Elektro");
```

### 6. Codingan ini adalah step lengkap untuk memperbarui jurusan mengggunakan updateJurusan

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

### 7. Codingan ini menunjukkan step lengkap untuk mengubah nim menggunakan setter

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

# Output Class dan Object
![Cuplikan layar 2024-09-10 125853](https://github.com/user-attachments/assets/b8a39188-19ac-4040-9061-8e5e558bd9b4)


# Output Constructor
![Cuplikan layar 2024-09-10 125903](https://github.com/user-attachments/assets/348177c6-5a84-42f1-b797-4d9255c702ff)


# Output Metode Tambahan
![Cuplikan layar 2024-09-10 125917](https://github.com/user-attachments/assets/8deae540-bc6f-477a-8fd1-5df63dacc684)


# Output Atribut dan Metode
![Cuplikan layar 2024-09-10 125930](https://github.com/user-attachments/assets/3315a5b4-23ab-4edd-bc7f-6cd133176122)


# Output Tugas 
![Cuplikan layar 2024-09-10 125944](https://github.com/user-attachments/assets/217a92cd-053e-415e-9a12-d63a94ca1afc)
