<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

$uczniowie = [
["imie" => "Adam", "punkty" => 85],
["imie" => "Kasia", "punkty" => 92],
["imie" => "Marek", "punkty" => 48],
["imie" => "Ola", "punkty" => 67],
["imie" => "Tomek", "punkty" => 35]
];
//1
$punkty = 85;

if ($punkty >= 90) {
$ocena = 5;
} elseif ($punkty >= 80) {
$ocena = 4;
} elseif ($punkty >= 60) {
$ocena = 3;
} elseif ($punkty >= 40) {
$ocena = 2;
} else {
$ocena = 1;
}
//3
function obliczProcent($punkty) {
return $punkty . "%";
}

function przyznajOcene($punkty) {
if ($punkty >= 90) {
return 5;
} elseif ($punkty >= 80) {
return 4;
} elseif ($punkty >= 60) {
return 3;
} elseif ($punkty >= 40) {
return 2;
} else {
return 1;
}
}

function czyZdal($punkty) {
if ($punkty >= 40) {
return true;
} else {
return false;
}
}
//2

echo "<h1>RAPORT WYNIKOW TESTU INFORMATYCZNEGO</h1>";

$zaliczyli = [];
$nieZaliczyli = [];

foreach ($uczniowie as $uczen) {
$imie = $uczen["imie"];
$punkty = $uczen["punkty"];

$ocena = przyznajOcene($punkty);
$procent = obliczProcent($punkty);
$status = czyZdal($punkty);

echo "<h3>$imie</h3>";

echo "Punkty: $punkty <br>";
echo "Procent: $procent <br>";
echo "Ocena: $ocena <br>";

if ($status) {
echo "Status: ZALICZONY <br>";
$zaliczyli[] = $imie;
} else {
echo "Status: NIEZALICZONY <br>";
$nieZaliczyli[] = $imie;
}
echo "<hr>";
}
//4

$sumaPunktow = 0;

for ($i = 0; $i < count($uczniowie); $i++) {
$sumaPunktow += $uczniowie[$i]["punkty"];
}
$liczbaUczniow = count($uczniowie);
$srednia = $sumaPunktow / $liczbaUczniow;
//5

$liczbaZaliczylo = count($zaliczyli);
$liczbaNieZaliczylo = count($nieZaliczyli);

echo "<h2>PODSUMOWANIE KLASY</h2>";
echo "Liczba uczniow: $liczbaUczniow <br>";
echo "Suma punktow: $sumaPunktow <br>";
echo "Srednia punktow: " . round($srednia, 1) . "<br><br>";
echo "Zaliczylo: $liczbaZaliczylo <br>";
echo "Nie zaliczylo: $liczbaNieZaliczylo <br><br>";
echo "Uczniowie, ktorzy zaliczyli test: <br>";
foreach ($zaliczyli as $imie) {
echo $imie . "<br>";
}
echo "<br>";
echo "Uczniowie, ktorzy nie zaliczyli testu: <br>";
foreach ($nieZaliczyli as $imie) {
echo $imie . "<br>";
}
//6

echo "<br>";
switch (true) {
case ($srednia < 40):
$komentarz = "Bardzo slaby wynik klasy";
break;
case ($srednia >= 40 && $srednia < 60):
$komentarz = "Wynik klasy jest niezadowalajacy";
break;
case ($srednia >= 60 && $srednia < 80):
$komentarz = "Dobry wynik klasy";
break;
case ($srednia >= 80):
$komentarz = "Bardzo dobry wynik klasy";
break;
}
echo "<b>Komentarz: $komentarz</b>";

   ?> 
</body>
</html>