<?php

require("includes/Person.php");
require("includes/Employee.php");
require("includes/Student.php");
require("includes/Teacher.php");

// $person = new Person("Kalle", "Anka");

$employee = new Employee("Joakim", "von Anka");
$employee->setAddress("Pengavägen 1, Ankeborg");
$employee->setEmployer("Pengaborgen");

$student = new Student("Kajsa", "Anka");
$student->setAddress("Rosa vägen 3");
$student->setSchool("Ankeborgs Universitet");

$teacher = new Teacher("Janne", "Långben");
$teacher->setAddress("Korta vägen 48");
$teacher->setEmployer("Ankeborgs Universitet");

echo $employee->getName();
echo "<br>";
echo $employee->getEmployer();
echo "<br>";
echo $employee->getAddress();
echo "<br>";
echo "<br>";

echo $student->getName();
echo "<br>";
echo $student->getSchool();
echo "<br>";
echo $student->getAddress();
echo "<br>";
echo "<br>";

echo $teacher->getName();
echo "<br>";
echo $teacher->getEmployer();
echo "<br>";
echo $teacher->getAddress();
echo "<br>";
echo "<br>";
