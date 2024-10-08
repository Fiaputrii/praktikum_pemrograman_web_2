# Jobsheet 1
<h2> Class </h2>

Kelas (Class): Kelas adalah cetak biru atau template yang digunakan untuk membuat objek. 
Kelas mendefinisikan atribut (properti) dan metode (fungsi) yang dimiliki oleh objek yang dibuat dari kelas tersebut.
####  Contoh :
 
```php
class Laptop
```

<h2> Object </h2>

Objek adalah instansi dari sebuah kelas. Setiap objek dapat memiliki nilai atribut yang berbeda meskipun dibuat dari kelas yang sama.
#### Contoh:

```php
$laptop1 = Laptop("Macbook", "Grey")
$laptop1.info()  # Output: Laptop Macbook berwarna Grey
```

<h2> Encapsulation </h2>

Enkapsulasi adalah konsep menyembunyikan data internal sebuah objek dan hanya memperbolehkan modifikasi melalui metode tertentu. Ini membantu melindungi data agar tidak diakses langsung dari luar objek.
#### Contoh:

```php
<?php
class Laptop {
    private $merk;
    private $warna;

    // Konstruktor
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    // Getter untuk atribut merk
    public function getMerk() {
        return $this->merk;
    }

    // Setter untuk atribut merk
    public function setMerk($merk) {
        $this->merk = $merk;
    }

    public function tampilkanInfo() {
        echo "Laptop " . $this->getMerk() . " berwarna " . $this->warna . ".<br>";
    }
}

// Membuat objek
$laptop1 = new Laptop("Macbook", "Grey");
$laptop1->tampilkanInfo(); // Output: Laptop Macbook berwarna Grey.

// Mengubah merk menggunakan setter
$laptop1->setMerk("Hp");
$laptop1->tampilkanInfo(); // Output: Laptop Hp berwarna Grey.
?>
```

<h2> Inheritance </h2>

Pewarisan (Inheritance) memungkinkan sebuah kelas baru (kelas turunan) untuk mewarisi sifat-sifat dari kelas yang sudah ada (kelas induk). Kelas turunan dapat menambahkan fitur baru atau mengganti fitur dari kelas induk.
#### Contoh:

```php
<?php
class Produk {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this-> nama;
    }
}

class Buku extends Produk {
    private $penulis;

    public function __construct($nama, $penulis) {
        parent::__construct($nama);
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }
}

$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getNama(); //Output Pemrograman PHP
?>
```

<h2> Polymorphism </h2>

Polimorfisme (Polymorphism) memungkinkan objek untuk mengambil banyak bentuk. Ini berarti bahwa metode yang sama dapat memiliki perilaku yang berbeda tergantung pada objek yang memanggilnya.
### Contoh:

```php
<?php
class Hewan {
    public function bersuara() {
        echo "Hewan ini bersuara.<br>";
    }
}

class Kucing extends Hewan {
    public function bersuara() {
        echo "Meong!<br>";
    }
}

class Anjing extends Hewan {
    public function bersuara() {
        echo "Guk Guk!<br>";
    }
}

function buatHewanBersuara(Hewan $hewan) {
    $hewan->bersuara();
}

// Membuat objek
$kucing = new Kucing();
$anjing = new Anjing();

// Memanggil metode yang sama dengan hasil yang berbeda
buatHewanBersuara($kucing); // Output: Meong!
buatHewanBersuara($anjing); // Output: Guk Guk!
?>
```

<h2> Abstract </h2>

Abstraksi adalah konsep menyembunyikan kompleksitas dari cara kerja internal dan hanya menampilkan fitur penting.
Ini memudahkan pengembang fokus pada apa yang dilakukan objek tanpa harus memahami bagaimana ia melakukannya.
#### Contoh: 

```php
<?php
// Membuat abstract class Hewan
abstract class Hewan {
    // Property
    protected $nama;

    // Constructor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Abstract method (harus diimplementasikan oleh kelas turunan)
    abstract public function bersuara();

    // Non-abstract method
    public function tampilkanNama() {
        echo "Nama hewan ini adalah: " . $this->nama . "<br>";
    }
}

// Kelas Kucing mewarisi kelas Hewan
class Kucing extends Hewan {
    // Implementasi dari metode abstract bersuara
    public function bersuara() {
        echo $this->nama . " berkata: Meong!<br>";
    }
}

// Kelas Anjing mewarisi kelas Hewan
class Anjing extends Hewan {
    // Implementasi dari metode abstract bersuara
    public function bersuara() {
        echo $this->nama . " berkata: Guk Guk!<br>";
    }
}

// Membuat objek Kucing
$kucing = new Kucing("Kucing Anggora");
$kucing->tampilkanNama(); // Output: Nama hewan ini adalah: Kucing Anggora
$kucing->bersuara(); // Output: Kucing Anggora berkata: Meong!

// Membuat objek Anjing
$anjing = new Anjing("Anjing Bulldog");
$anjing->tampilkanNama(); // Output: Nama hewan ini adalah: Anjing Bulldog
$anjing->bersuara(); // Output: Anjing Bulldog berkata: Guk Guk!
?>
```

<h2> Tambahan </h2>

<h3> What is Private? </h3>

private digunakan untuk menyembunyikan detail implementasi internal suatu objek dan memastikan data hanya dapat dimodifikasi dengan cara yang diizinkan oleh kelas tersebut. Ini dikenal sebagai enkapsulasi. <br>

```php
private $nim;
private $nama;
```

1. Atribut Private:
Atribut $merk dan $warna dideklarasikan sebagai private. Artinya, atribut-atribut ini hanya dapat diakses dari dalam kelas Mobil. Di luar kelas, kita tidak bisa mengaksesnya secara langsung. <br>

2. Getter dan Setter:
Untuk mengakses atau mengubah nilai dari properti private, kita membuat metode getter (getMerk()) dan setter (setMerk($merk)). Metode ini menyediakan kontrol atas bagaimana data diakses atau dimodifikasi. <br>

<h3> What is Public? </h3>

public function dalam pemrograman berorientasi objek (OOP) adalah metode (fungsi) yang dapat diakses dari mana saja, baik dari dalam kelas itu sendiri, dari kelas turunan, maupun dari luar kelas (dalam kode lain). Ini adalah kebalikan dari private, yang membatasi akses hanya di dalam kelas. <br>

```php
public $nama;
public $nim;
```

1. Metode Public (public function):
tampilkanInfo() dan ubahWarna() adalah contoh metode public. Keduanya dapat diakses dari luar kelas melalui objek $mobil1. <br>

2. Akses dari Luar Kelas:
Saat objek dibuat dengan new Mobil("Toyota", "Merah"), kita bisa langsung memanggil metode public seperti $mobil1->tampilkanInfo() dan $mobil1->ubahWarna("Hitam"). <br>

3. Fleksibilitas:
Metode public memberikan fleksibilitas bagi kode di luar kelas untuk berinteraksi dengan objek, seperti mengubah nilai atau mengeksekusi tindakan tertentu pada objek. <br>

<h3> Fungsi Return </h3>

return dalam pemrograman digunakan untuk mengembalikan nilai dari sebuah fungsi atau metode. Ketika sebuah fungsi dipanggil, ia bisa melakukan berbagai perhitungan atau operasi, dan hasil dari operasi tersebut bisa dikirim kembali ke pemanggil menggunakan return

```php
return "Nama Dosen : " . $this->nama . "<br>" .
                "Nip: " . $this->nip . "<br>" .
                "Mata Kuliah: " . $this->mataKuliah . "<br>";
```

<h3> Fungsi Construct </h3>

__construct adalah sebuah konstruktor dalam OOP (Object-Oriented Programming) di PHP. Fungsi ini secara otomatis dipanggil setiap kali sebuah objek dari kelas dibuat (diinstansiasi). Konstruktor berguna untuk melakukan inisialisasi awal pada objek, seperti menetapkan nilai default untuk properti, atau mempersiapkan logika yang harus dijalankan pada awal objek dibuat.

```php
public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```

<h3> Fungsi Extends </h3>

Kata kunci extends dalam pemrograman, termasuk dalam PHP, digunakan untuk mengimplementasikan konsep Inheritance (Pewarisan). Ketika suatu kelas menggunakan extends, itu berarti kelas tersebut mewarisi atau mengambil properti dan metode dari kelas induknya.

```php
class Dosen extends Pengguna {
    private $mataKuliah;
```

# Output object dan class

![Cuplikan layar 2024-09-11 213323](https://github.com/user-attachments/assets/1fa7d419-fee7-47ea-b9a0-75f15b69d304)

# Output Encapsulation

![Cuplikan layar 2024-09-11 213334](https://github.com/user-attachments/assets/7161d5e2-3d57-4624-a845-54a205aee8f1)

# Output Inheritance

![Cuplikan layar 2024-09-11 213304](https://github.com/user-attachments/assets/d588a34e-bd64-41f5-82a1-631e5c40a863)

# Output Polymorphism

![Cuplikan layar 2024-09-11 213343](https://github.com/user-attachments/assets/de5abaea-f0ef-4f76-9f8c-a07e9f131b7e)

# Output Abstraction

![Cuplikan layar 2024-09-11 213314](https://github.com/user-attachments/assets/8a53a2f7-156c-4331-b11d-baca3e0adb3d)
