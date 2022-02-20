<?php
$texto="";
echo "<br>";
$texto=($_POST["texto"]);

//echo texto

echo "<br>";
echo "<table border=1>";
echo "<td>"; "texto ingresado:"; "</td>";
echo "<td>", $texto, "</td>";
echo "</tr>";

echo "<td>", "total en mayusculas:", "</td>";
echo "<td>", strtoupper($texto), "</td>";
echo "</tr>";

echo "<td>", "total de caracteres:", "</td>";
echo "<td>", strlen($texto), "</td>";
echo "</tr>";

echo "<td>"," texto invertido", "</td>";
echo "<td>", strrev($texto), "</td>";
echo "</tr>";

echo "<td>", "mostar un caracter por linea:"; "</td>";
$texto_div=str_split($texto);
for($i=0;$i<count($texto_div); $i++){
    echo "</tr>";
    echo "<td>", $texto_div[$i], "</td>";
    echo "</tr>";
}
echo "</table>"
?>