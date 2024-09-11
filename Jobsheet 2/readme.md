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

![Cuplikan layar 2024-09-11 214811](https://github.com/user-attachments/assets/0736076b-dd79-4237-89dd-b3f4fbdc3c5f)

# Output Constructor

![Cuplikan layar 2024-09-11 214820](https://github.com/user-attachments/assets/0f7ca5c7-0e68-4ad2-8d0b-22198edc298b)

# Output Metode Tambahan

![Cuplikan layar 2024-09-11 215130](https://github.com/user-attachments/assets/b056f120-db72-47eb-a218-7d97a7be1975)

# Output Atribut dan Metode

![Cuplikan layar 2024-09-11 215141](https://github.com/user-attachments/assets/fc9199a6-b017-4674-9892-11e4e1e940b2)

# Output Tugas 

![Cuplikan layar 2024-09-11 215150](https://github.com/user-attachments/assets/a414a29b-4cb1-4c34-89b3-d27072126087)
