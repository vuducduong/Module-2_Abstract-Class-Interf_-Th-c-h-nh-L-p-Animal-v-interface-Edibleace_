
<?php
include 'InterFaceClass/Edible.php';
include 'Abstract/Animal.php';
include 'Abstract/Fruit.php';
include 'Animal/Tiger.php';
include 'Animal/Chicken.php';
include 'Fruit/Apple.php';
include 'Fruit/Orange.php';

$chicken = new Chicken();
$tiger = new Tiger();
$apple = new Apple();
$orange = new Orange();
echo $chicken->makeSound().'<br>';
echo $chicken->howtoEat();
echo $tiger->makeSound();
echo $apple->howtoEat();
echo $orange->howtoEat();