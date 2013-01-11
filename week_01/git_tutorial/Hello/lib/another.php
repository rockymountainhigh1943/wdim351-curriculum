<?php

$what = 'In Class';

function getActivity($activity){
	if($activity == 'In Class'){
		echo 'Have fun bro!';
	} else {
		echo 'Crack a brew!';
	}
}

getActivity($what);

?>