<?php 
/**
  * SumZ(arg1,arg2) - сложение
  * SubZ(arg1,arg2) - вычитание комплексных чисел первого на второе
  * MultZ(arg1,arg2) - умножение
  * DivZ(arg1,arg2) - деление первого на второе
  * arg1 и arg2 - входящие комплексные числа вида (а;b), представленные массивами из двух значений
**/
include __DIR__.'/../complex.php';

// входящие комплексные в виде массивов с двумя значениями
$a = array(20,5);
$b = array(7,13);
// $b = true;

$Compl = new Complex;

echo "<p style='color:red'>Входящие комплексные числа: ($a[0];$a[1]) и ($b[0];$b[1])</p> ";

$s = $Compl->SumZ($a,$b);
echo "<p style='color:green'>Сложение: $s</p>";

$s = $Compl->SubZ($a,$b);
echo "<p style='color:green'>Вычитание: $s</p>";

$s = $Compl->MultZ($a,$b);
echo "<p style='color:green'>Умножение: $s</p>";

$s = $Compl->DivZ($a,$b);
echo "<p style='color:green'>Деление: $s</p>";