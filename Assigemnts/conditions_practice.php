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

 <?php
 $Age =20;
 $Marks =10;

 if ($age>18) {
    echo " you are to young to apply";
} elseif ($Age>=18 && $Age<=25){
    if ($Marks>=85) {

        echo "Excellent student and eligible!";
    } elseif ($Age>=18 && $Age<=25){
        if ($Marks >=75) {
            echo "hello you are good boy ";
        }
    } else
    echo" you are an average student";
}
else {
    echo " you are the over limit";
}
?>