<?php

// API URL
$url = 'https://eigenheim-backend.herokuapp.com/eco24/create-form';

// Create a new cURL resource
$ch = curl_init($url);

$radio1=$_POST['radio1'];
$radio2=$_POST['radio2'];
$radio3=$_POST['radio3'];
$number=$_POST['number'];
$radio4=$_POST['radio4'];
$birthdate=$_POST['birthdate'];
$vorname=$_POST['vorname'];
$nachname=$_POST['nachname'];
$email=$_POST['email'];
$telefon=$_POST['telefon'];
$und=$_POST['und'];
$plz=$_POST['plz'];
$json=array('StepOne'=>$radio1,'StepTwo'=>$radio2,'StepThree'=>$radio3,'Postleitahl'=>$number,'StepFour'=>$radio4,'DateOfBirth'=>$birthdate,'Vorname'=>$vorname,'Nachname'=>$nachname,'Email'=>$email,'telefonnumber'=>$telefon,'Srabe'=>$und,'PLZ'=>$plz);
$jsonData = json_encode($json);
// die($jsonData);
 $jsonData;


// Setup request to send json via POST



// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);

// Close cURL resource
curl_close($ch);
// $jsonObject=json_decode($jsonData);
// echo $jsonObject->radio1;
?>
