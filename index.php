<!--

На вход подается строка целых уникальных (не повторяющихся) чисел, разделенных пробелами.

Найдите все возможные комбинации пар чисел и выведите их в любом порядке
-->


<?php

function combinationNumbers ($strNums) {
	$arrCombination = [];
	$arrNums = explode(" ", $strNums);
	foreach($arrNums as $thisKey => $thisValue) {
		foreach($arrNums as $twoKey => $twoValue) {
			if ($thisKey === $twoKey) {
				continue;
			}
			if ($thisValue !== $twoValue) {
				$arrCombination[] = "$thisValue $twoValue";
			}
		}
	}
	return $arrCombination;
}

foreach (combinationNumbers('1 2 3') as $value) {
	echo $value."<br>";
}


?>