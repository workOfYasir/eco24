<?php
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
$json=array($radio1,$radio2,$radio3,$number,$radio4,$birthdate,$vorname,$nachname,$email,$telefon,$und,$plz);
$jsonData = json_encode($json);
?>
