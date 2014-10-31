<?php

$colors = ['Black', 'Gray', 'Red', 'Magenta', 'Blue', 'Cyan', 'Green', 'Shamrock', 'Yellow', 'Lemon'];

foreach($colors as $key => $value){
	echo "Color $key is $value <br>";
}

echo '<br>';

for($i = 9; $i >= 0; $i--){
	echo "Color " . $i . ' is ' . $colors[$i] . ' <br>';
}

echo '<br>';

foreach($colors as $key => $value){
	if(($key % 2) == 0){
		echo "Color $key is $value <br>";
	}
}

?>