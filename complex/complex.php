<?php 
/**
 * Класс реализующий математические операции
 *Задача:
 *Требуется написать класс по работе с комплексными числами, реализовать операции сложения, вычитания, умножения и деления, а также провести тестирование его работы. Решение пришлите ссылкой на гит.
 *
 *$arg1,$arg2 - входящие два комплексных числа в виде массива
 */
class Complex
{
	
	
	// проверяем входящие данные на тип
	// сделать еще проверку значений массивов, чтобы значения были численными
	private function TestComplex($arg1,$arg2){
		
		if ((is_array($arg1))and(is_array($arg2))) {
			$boo1 = ((count($arg1)!=2) or (count($arg2)!=2)) ? false : true ;
			$boo2 = (($this->TipeTst($arg1))and($this->TipeTst($arg2))) ? true : false ;
			$boo = ($boo1 and $boo2) ? true : false ;
		}else{
			$boo = false;
		}
		return $boo;
	}
	
	// проверка значений массива на тип интегер
	private function TipeTst($arr){
		
		foreach ($arr as $key => $value) {
			if (is_int($value)) {
				$boo = true;
			}else{
				$boo = false;
				break;
			}
		}
		return $boo;
	}

	// сложение комплексных чисел
	public function SumZ($arg1,$arg2){
		// проверяем входящие данные на комплексность
		if($this->TestComplex($arg1,$arg2)){
			$a = $arg1[0]+$arg2[0];
			$b = $arg1[1]+$arg2[1];
			$Z = '('.$a.';'.$b.')';
		}else{
			$Z = 'введенные данные не удовлетворяют требованию';
		}
		return $Z;
	}

	// вычитание
	function SubZ($arg1,$arg2){
		if($this->TestComplex($arg1,$arg2)){
			$a = $arg1[0]-$arg2[0];
			$b = $arg1[1]-$arg2[1];
			$Z = '('.$a.';'.$b.')';
		}else{
			$Z = 'введенные данные не удовлетворяют требованию';
		}
		return $Z;
	}

	// умножение
	function MultZ($arg1,$arg2){
		if($this->TestComplex($arg1,$arg2)){
			$a = $arg1[0]*$arg2[0]-$arg1[1]*$arg2[1];
			$b = $arg1[0]*$arg2[1]+$arg1[1]*$arg2[0];
			$Z = '('.$a.';'.$b.')';
		}else{
			$Z = 'введенные данные не удовлетворяют требованию';
		}
		return $Z;
	}

	// деление
	function DivZ($arg1,$arg2){
		if($this->TestComplex($arg1,$arg2)){
			$a = ($arg1[0]*$arg2[0]+$arg1[1]*$arg2[1])/($arg2[0]*$arg2[0]+$arg2[1]*$arg2[1]);
			$b = ($arg1[0]*$arg2[1]-$arg1[1]*$arg2[0])/($arg2[0]*$arg2[0]+$arg2[1]*$arg2[1]);
			$Z = '('.$a.';'.$b.')';
		}else{
			$Z = 'введенные данные не удовлетворяют требованию';
		}
		return $Z;
	}
}