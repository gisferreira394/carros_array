<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$carros = array("gol", "onix");
print_r($carros);
echo "<br>";

echo $carros[0];
echo "<br>";

$carros[0] = "palio";
print_r($carros);
echo "<br>";

array_push($carros, "fiesta");
print_r($carros);
echo "<br>";

unset($carros[1]);
print_r($carros);
echo "<br>";

sort($carros);
print_r($carros);
echo "<br>";

foreach($carros as $carro){ // depois do AS n pode ser no plural tem q ser no singular --> para cada valor ele recebe um valor
    echo $carro . "<br>";
}
    ?>
</body>
</html>