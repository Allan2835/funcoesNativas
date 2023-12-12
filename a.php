
<?php
//exemplo múltiplo de 10

echo"Anonymous functions <br><br>";

$array = [10,13,15];

echo "<prev>"; print_r($array); echo "prev>";

$numeros = array_filter($array, function($item) {
    return $item % 10 == 10;

});
echo "<br>multiplos<br>";
echo "<pres>"; print_r($numeros); echo "<pre>";

//Arrow function - simplifica a função anonima(muito utilizada para casos simples)
echo"Arrow function<br><br>";

$array = [20,4,2];

$numeros = array_filter($array,      fn($item) => $item % 5== 10);

echo "<pre>"; print_r($array); echo "<pre>";

//funções recursivas
echo"Recursiva <br><br>";

function dividir($numero) {
    $result = $numero / 2;
    echo "$numero <br>";

    if(round($result) > 0) {
        dividir($result);

    }
}

dividir(5);

//função número absoluto:
echo"<br> Absoluto <br>";
$num = -9.5;

echo abs($num);

//função pi
echo pi();

echo "<br><br> Arredondar número para baixo <br>";

$n = 2.8;
echo $n."<br>";

echo floor($n);

echo "<br><br> Arredondar número para cima <br>";
$n2 = 3.3;
echo "<br>" .$n2. "<br>";

echo ceil($n2);

echo "<br><br> Arredondar<br>";
$n3 = 10.9;
echo "<br>" .$n3. "<br>";

echo round ($n3);

echo "<br><br> Arredondar casas decimais <br>";
$n4 = 5.12345678;
echo "<br>" .$n4. "<br";

$testePi = pi();
echo "<br>".$testePi;
echo round($n4, 2); 
echo "<br>".round($testePi, 2);;


//Função com número aleatório:
echo "<br><br> Número aleatório <br>";

$randomico = rand(1,250);

echo $randomico;

//Função número maior e menor de um array:
echo "<br><br> Número maior: ";
 
$numMaior = [50,30,60,40,2,5];
echo max($numMaior);

echo "<br><br> Número menor: ";

$numMenor = [2,5,8,2,-4,-10];
echo min($numMenor);

//Função contagem e retirar espaços:
echo"<br><br> Manipulação de string <br>";
echo "<br> Retirar espaços <br>";

$nomeComEspaço = "     Allan     ";
 
$nomeSemEspaço = trim($nomeComEspaço);

echo "<br> Com espaço: ".strlen($nomeComEspaço);
echo "<br> Sem espaço: ".strlen($nomeSemEspaço);

//Função Lower case e Upper casse:
echo "<br><br> Lower case:<br>";
$nome1 = "Allan Willian";
echo "<br>".strtolower($nome1);

echo "<br><br> Upper case:<br>";
echo "<br>".strtoupper($nome1);

//Função recuperar alguns caracteres:
echo "<br><br> Escolher algumas strings: <br>";
$nome2 = "Jorginho";

echo "<br>".$nome2;
echo "<br>".substr($nome2, 3, 4);
echo "<br>".substr($nome2, -3);


//Função recuperar alguns caracteres:
echo "<br><br> Procurar algo na string<br>";
echo $posição = strpos($nome2, '0');

//------------------
echo "<br><br> Transformar o nome em array: ";
echo $nomeCompleto = "Allan willian Vargas Maciel <br>";
$nomeArray = explode(" ",$nomeCompleto);

print_r($nomeArray);

//------------------
echo"<br><br> Formatar números<br>";






?>