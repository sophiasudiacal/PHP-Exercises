<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query1 = 'Tina';

$query2 = 'Bob';

function findName ($a, $b) {
	$result = array_search($a, $b);
	
	if ($result !== false) {
		echo "TRUE\n";
	} else {
		echo "FALSE\n";
	}
	
}

findName($query1, $names);
findName($query2, $names);

// a way to do compareSearch function but using array_intersect instead of array_search
// function compareTwo ($c, $d) {
// 	$result = array_intersect($c, $d);
// 	var_dump($result);
// }

// compareTwo($names, $compare);


function compareSearch ($e, $f) {
	$i = 0;
	foreach ($e as $value) {
		$result = array_search($value, $f);
		if ($result !== false) {
			$i++;
		}
	} echo "There are {$i} similar values within these arrays." . PHP_EOL;
}

compareSearch($names, $compare);