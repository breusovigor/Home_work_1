<?php
//Task 1

// Breusov Igor
/*09 July 2018*/

//Task 2
$tvChannelname = 'BBC';
$manufacturerAddress = 'America Washington DC';
$carColor = 'Black Metalic';
$waterTemperature = '23';
$phoneModel = 'Xiaomi';

//Task 3
$var1 = 3;
$var2 = 5;
$var3 = 8;

echo 'Переменная №1 - ' . $var1 . '</br>';
echo 'Переменная №2 - ' . $var2 . '</br>';
echo 'Переменная №3 - ' . $var3 . '</br>';

$sum = $var1 + $var2 + $var3;
echo 'Сумма переменных равна - ' . $sum . '</br>';

$result = 2+6+2/5-1;
echo 'Результат выражения - ' . $result . '</br>';

//Task 4
$a = 1;
$b = 2;

echo 'Переменная a - ' . $a . '</br>';
echo 'Переменная b - ' . $b  . '</br>';

$c = $a;
$d = &$b;

echo 'Переменная с - ' . $c . '</br>';
echo 'Переменная d - ' . $d . '</br>';

$a = 3;
$b = 4;

echo 'Переменная a - ' . $a . '</br>';
echo 'Переменная b - ' . $b  . '</br>';
echo 'Переменная с - ' . $c . '</br>';
echo 'Переменная d - ' . $d . '</br>';

/*Переменные по ссылке изменяются, а переменную $a переприсвоить не получилось */

//Task 5
const FIRST = 41;
define("SECOND", 33);
echo 'Сумма констант - ' . (FIRST + SECOND) . '</br>';
const FIRST = 55; //Constant reassingnment Second assignment has no effect
echo 'Переопредленная константа осталась с прежним значением - ' . FIRST . '</br>';

//Task 6
$a = 152;
$b = '152';
$c = 'London';
$d = array(152);
$e = 15.2;
$f = false;
$g = true;

echo '<pre>';
var_dump($a, $b, $c, $d, $e, $f, $g);
echo '</pre>';
echo "Целое число - $a" . '</br>';
echo "Строка - $b" . '</br>';
echo "Строка - $c" . '</br>';
echo "Массив - $d" . '</br>';
echo "Число с плавающей точкой - $e" . '</br>';
echo "Булев тип данных - $f" . '</br>';
echo "Булев тип данных - $g" . '</br>';

//Task 7
$a = 10;
$b = 5;

echo  "<p> $b из {$a}ти студентов посетили лекцию </p>" . '</br>';
echo  $b . ' из ' . $a . 'ти студентов посетили лекцию' . '</br>';

//Task 8
$str1 = 'Доброе утро, ';
$str2 = 'дамы ';
$str3 = 'и господа';

$str1 .= $str2;
$str1 .= $str3;
echo $str1 . '</br>';

//Task 9
$array1 = array('one', 'two', 'three', 'four', 'five');
$array2 = array('six', 'seven', 'eight', 'nine', 'ten');
unset($array2[0]);
echo $array1[2] . '</br>';
echo $array2[2] . '</br>';
foreach($array1 as $value1){
    echo ($value1) . '</br>';
};
foreach($array2 as $value2){
    echo ($value2) . '</br>';
};

//Task 10
const MIN = 10;
const MAX = 50;
$x = rand(1 ,100);

if ($x > MIN && $x < MAX){
    echo $x . '+';
} elseif ($x < MIN || $x > MAX) {
    echo $x . '-';
} elseif ($x == MIN || $x == MAX) {
    echo $x . '+-';
}


?>