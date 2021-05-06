<?php

function media ($nome, $n1, $n2, $n3) {
	$media = number_format(($n1 + $n2 + $n3) / 3, 2);
	if ($media >= 7):
		echo "$nome foi aprovado com média: $media";
		else:
			echo "$nome reprovou com média: $media";
		endif;
}
media ("Ewerton", 5, 8, 6);