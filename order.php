<?php

//print_r($_GET);

$crust = $_GET['crust'];
$drink = $_GET['drink'];
$toppings = $_GET['toppings'];

//print_r($crust);
//print_r($drink);
//print_r($toppings);


//create email based on order data.  send to admin (instructor)
//$email = "217cis@gmail.com";
$email = "laraconnelly@hotmail.com";
$subject = "South Hill Pizza";
$message = "The following order was submitted:  \nCrust: " . $crust . "\nToppings: " . $toppings . "\nDrink: " . $drink;
$headers = "From: noReply@SouthHillPizza.com";
mail($email, $subject, $message, $headers);

echo json_encode("<p class='red'>Thank you for your order.</p>");




