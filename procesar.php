<?php
define("VALORHORA",80);
$cantHoras=$_GET["horas"];
if(empty($cantHoras))
{
//true
echo '<script>alert("Campo vacio")</script>';
}

else {
    //false
    $saldo=VALORHORA*$cantHoras;
    echo "Monto a cobrar: $".$saldo;
}