<?php
$contador = 1;

while ($contador <= 5) {
    echo "O contador está em: " . $contador . "<br>";
    $contador++; // Incrementa o contador para que a condição eventualmente se torne falsa
}

echo "Fim do laço.";
?>