<?php
$metros = $_POST['metros'];

if ($metros) {
    $centimetros = $metros * 100; 
    echo "O resultado da conversão é: ", $centimetros;
}