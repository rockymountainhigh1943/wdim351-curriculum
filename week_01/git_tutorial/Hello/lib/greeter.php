<?php

class greeter
{
	function greeter($name) {
		echo 'Howdy '.$name.'!';
	}
}

$g = new greeter;
$g->greeter($name);
