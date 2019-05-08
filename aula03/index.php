<?php

$preco = 10;

if($preco >= 20){
    echo "Nao posso comprar!";
} else{
    echo "Posso comprar!";
}



$nota = 9.5;

echo "<br>";

if($nota >= 7){
    echo "Aprovado!";
}else{
    echo "Reprovado!";
}


echo "<br>";
$contador = 0;

while($contador <= 10){
    echo $contador ++;
    echo "<br>";
}

for($i = 10; $i <= 50; $i++){
    echo "<br>";
    echo $i;
}
?>