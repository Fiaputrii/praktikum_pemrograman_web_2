<?php

abstract class Course {
    protected $courseName;

    public function __construct($courseName) {
        $this->courseName = $courseName;
    }

    // Metode abstrak
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {
    public function getCourseDetails() {
        return "Online Course: " . $this->courseName . "<br>Platform: Goggle Meet";
    }
}

// Kelas OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course {
    public function getCourseDetails() {
        return "Offline Course: " . $this->courseName . "<br>Location: Cafe";
    }
}

$onlineCourse = new OnlineCourse("English");
$offlineCourse = new OfflineCourse("Science");

echo $onlineCourse->getCourseDetails() . "<br>";
echo $offlineCourse->getCourseDetails() . "<br>";
?>
