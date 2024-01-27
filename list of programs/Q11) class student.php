<?php

class Student {
    public $RollNo;
    public $Name;
    public $Branch;
    public $Year;

    public function __construct($rollNo, $name, $branch, $year) {
        $this->RollNo = $rollNo;
        $this->Name = $name;
        $this->Branch = $branch;
        $this->Year = $year;
    }

    public function displayInfo() {
        echo "Roll No: {$this->RollNo}\n";
        echo "Name: {$this->Name}\n";
        echo "Branch: {$this->Branch}\n";
        echo "Year: {$this->Year}\n";
        echo "\n";
    }
}

$student1 = new Student(1, "ankit", "Computer Science", 1);
$student2 = new Student(2, "rahul", "cyber security", 1);
$student3 = new Student(3, "rohit", "Mechanical Engineering", 2);

echo "Student 1:\n";
$student1->displayInfo();

echo "Student 2:\n";
$student2->displayInfo();

echo "Student 3:\n";
$student3->displayInfo();

?>
