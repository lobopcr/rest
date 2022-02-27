<?php
$arreglo[0]["codigo"]="1";
$arreglo[0]["nombre"]="Pablo";
$arreglo[0]["direccion"]="San Carlos 1234 calle secundaria";

$arreglo[1]["codigo"]="2";
$arreglo[1]["nombre"]="Marisol";
$arreglo[1]["direccion"]="Direccion del cliente numero 2";

$arreglo[2]["codigo"]="3";
$arreglo[2]["nombre"]="Andres";
$arreglo[2]["direccion"]="Direccion del cliente numero 3";

$arreglo[3]["codigo"]="4";
$arreglo[3]["nombre"]="Adrian";
$arreglo[3]["direccion"]="Direccion Del cliente 4";

echo json_encode($arreglo);

?>