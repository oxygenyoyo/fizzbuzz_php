<?php

class Fizzbuzz
{
	public function execute($number)
	{
		if( ($number % 3) == 0 && ($number % 5) == 0 ) return 'fizzbuzz';
		if( ($number % 3) == 0 ) return 'fizz';
		if( ($number % 5) == 0 ) return 'buzz';
	
		return $number;
	}

	public function play($endNumber = 15)
	{
		$startNumber = 1;
		$result = '';
		for( $number = $startNumber; $number <= $endNumber; $number ++ )
		{
			$result .= $this->execute($number) . ' ';
		}

		return substr($result, 0, -1);
	}
}