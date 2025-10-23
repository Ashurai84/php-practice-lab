<?php 
$age =20;
$has_job = true;

if ($age<18 && $has_job) {
    echo "you are young amd focus on your study";
} 
elseif($age >= 18 && $age < 25){
    echo "You are young and energetic!";

}
else
    echo "Wisdom comes with age";
?>


<!-- Write a PHP program that checks a person’s age and marks, then prints messages based on both. -->

 <<?php
$Age = 25;
$Marks = 10;

if ($Age < 18) {
    echo "You are too young to apply.";
} elseif ($Age >= 18 && $Age <= 25) {
    if ($Marks >= 85) {
        echo "Excellent student and eligible!";
    } elseif ($Marks >= 75) {
        echo "Hello, you are a good student.";
    } else {
        echo "You are an average student.";
    }
} else {
    echo "You are over the age limit.";
}
?>
