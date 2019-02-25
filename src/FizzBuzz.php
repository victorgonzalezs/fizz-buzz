<?php

namespace FizzBuzz;

class FizzBuzz
{
	public function printFizzBuzz($num){
		$count = 1;
		$saida = "";
		while($count<=17){
			$div3 = $count%3 == 0 ? true: false;		
			$div5 = $count%5 == 0 ? true: false;

			if(!empty($saida)){
				$saida .= ', ';
			}
			if($div3 && $div5){
				$saida .= 'FizzBuzz';			
			} elseif ($div3){
				$saida .= 'Fizz';
			} elseif($div5){
				$saida .= 'Buzz';
			} else {
				$saida .= $count;
			}
			$count++;
		}
		return $saida;
	}


}
