<?php

$idade = 30;

if ($idade < 12) {
    echo "Criança.";
} 

elseif ($idade < 18) {
    echo "Adolescente.";
}

elseif ($idade < 60) {
    echo "adulto.";
}

else {
    echo "Idoso.";
}
?>

<br> <br>

<?php

$idade = 90;
$temCarteira = true;

if ($idade >= 18 && $temCarteira) {
    echo "Você pode dirigir.";
}
elseif ($idade >= 18 && !$temCarteira) {
    echo "Você tem idade para dirigir, mas não tem carteira.";
}
else {
    echo "Você ainda não pode dirigir";
}