<?php

abstract class Course {

    abstract public function getCourseDetails();
}

class OnlineCourse extends Course {
    private $namaKursus;
    private $platform;

    public function setCourseDetails($namaKursus, $platform) {
        $this->namaKursus = $namaKursus;
        $this->platform = $platform;
    }

    public function getCourseDetails() {
        return "Online Course: " . $this->namaKursus . " di platform " . $this->platform;
    }
}

class OfflineCourse extends Course {
    private $namaKursus;
    private $location;

    public function setCourseDetails($namaKursus, $location) {
        $this->namaKursus = $namaKursus;
        $this->location = $location;
    }

    public function getCourseDetails() {
        return "Offline Course: " . $this->namaKursus . " lokasi di " . $this->location;
    }
}

// Instansiasi objek dari class OnlineCourse
$onlineCourse = new OnlineCourse();
$onlineCourse->setCourseDetails("Bahasa Korea", "Ruang Guru");

// Instansiasi objek dari class OfflineCourse
$offlineCourse = new OfflineCourse();
$offlineCourse->setCourseDetails("Fisika", "Cafe");

echo $onlineCourse->getCourseDetails() . "<br>";
echo $offlineCourse->getCourseDetails() . "<br>";
?>
