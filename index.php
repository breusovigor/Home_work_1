<?php
//Task 1 (Comments)

// Breusov Igor
/*09 July 2018*/

//Task 2 (variables)
$tvChannelname = 'BBC';
$manufacturerAddress = 'America Washington DC';
$carColor = 'Black Metalic';
$waterTemperature = '23';
$phoneModel = 'Xiaomi';

//Task 3 (Operators)
$var1 = 3;
$var2 = 5;
$var3 = 8;

echo('Переменная №1 - ' . $var1) . '</br>';
echo('Переменная №2 - ' . $var2) . '</br>';
echo('Переменная №3 - ' . $var3) . '</br>';

$sum = $var1 + $var2 + $var3;
echo('Сумма переменных равна - ' . $sum) . '</br>';

$result = 2+6+2/5-1;
echo('Результат выражения - ' . $result) . '</br>';

//Task 4
$a = 1;
$b = 2;

echo('Переменная a - ' . $a) . '</br>';
echo('Переменная b - ' . $b) . '</br>';


//Task 5
const FIRST = 41;
define("SECOND", 33);
echo ('Сумма констант - ' . (FIRST + SECOND)) . '</br>';
const FIRST = 55; //Constant reassingnment Second assignment has no effect
echo (FIRST);

?>