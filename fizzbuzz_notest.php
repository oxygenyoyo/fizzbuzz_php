<?php

function fizzbuzz($number)
{
	$output = [];

	for ($i=1; $i <= $number; $i++) 
	{ 
		if($i%15 == 0) 
		{
			$output[] = 'fizzbuzz';
		} else if ($i%5 == 0) {
			$output[] = 'buzz';
		} else if ($i%3 == 0) {
			$output[] = 'fizz';
		} else {
			$output[] = $i;
		}
	}

	return implode(', ', $output);
}

echo fizzbuzz(15)

